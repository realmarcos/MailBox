<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function Contatos()
    {
        $contatos = Contato::get();
        return view('contatos', compact('contatos'));
    }

    public function Create()
    {
        // $contatos = Contato::get();
        return view('addcontato');
    }

    public function CreatePost(Request $request)
    {
        try {
            Contato::create($request->all());
            return redirect()->route('contatos')->with('msg', 'Contato cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('contatos')->with('msg', 'Erro ao tentar salvar dados! '.$e->getMessage());
        }
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();
        return redirect()->route('contatos')->with('msg', 'Contato excluído com sucesso!');
    }

    public function edit($id)
    {
        $contato = Contato::findOrFail($id);
        return view('editcontato', ['contato' => $contato]);
    }

    public function update (Request $request){
        Contato::findorfail($request->id)->update($request->all());
        return redirect()->route('contatos')->with('msg', 'Contato atualizado com sucesso!');
    }
}
