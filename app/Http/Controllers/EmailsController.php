<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{EmailSetting, Emails};
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use stdClass;

class EmailsController extends Controller
{
  public function Conexao()
  {
    $setting = EmailSetting::findOrFail(1);
    $email = $setting->email;
    $senha = $setting->password;
    $host = $setting->host;
    $porta = $setting->porta;
    // $host = "imap.hostinger.com";
    // $email = "mailbox@realmarcos.com";
    // $senha = "Mailbox.realmarcos123";
    // $porta = "993";
    $mbox = imap_open("{" . $host . ":" . $porta . "/imap/ssl}INBOX", $email, $senha);
    $this->mbox = $mbox;
  }

  public function Insert()
  {
    $this->Conexao();
    for ($i = 1; $i <= imap_num_msg($this->mbox); $i++) {
      $header = imap_headerinfo($this->mbox, $i);
      $msg = imap_fetchbody($this->mbox, $i, 1);
      Emails::firstOrCreate(
        ['message_id' => $header->message_id],
        [
          'remetente' => $header->fromaddress,
          'assunto' => $header->subject,
          'mensagem' => $msg,
          'data' => $header->date
        ]
      );
    }
  }

  public function index(Request $request)
  {
    $emails = Emails::get();
    return view('dashboard', compact('emails'));
  }

  public function SendEmail(Request $request)
  {
    $email = new stdClass();
    $email->assunto = $request->assunto;
    $email->email = $request->email;
    $email->mensagem = $request->mensagem;
    Mail::send(new Email($email));
    return redirect()->route('dashboard')->with('msg', 'Email enviado com sucesso!');
  }
}
