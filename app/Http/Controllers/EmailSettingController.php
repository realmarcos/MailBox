<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailSetting;
use Illuminate\Support\Facades\Hash;

class EmailSettingController extends Controller
{
    public function Create()
    {
        // $contatos = Contato::get();
        $setting = EmailSetting::findOrFail(1);
        return view('config', ['setting' => $setting]);
    }

    public function CreatePost(Request $request)
    {
        $setting = EmailSetting::findOrFail(1);
        try {
           if (empty($setting)){
            EmailSetting::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'host' => $request->host,
                'porta' => $request->porta
            ]);
           }else{
            $setting->update([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'host' => $request->host,
                'porta' => $request->porta
            ]);   
           }
            
            return redirect()->route('config')->with('msg', 'Configuração salva com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('config')->with('msg', 'Erro ao tentar salvar dados! ' . $e->getMessage());
        }
    }
}
