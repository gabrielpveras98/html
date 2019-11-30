<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;
use \App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (Object) ["nome" => "Maria", "telefone" => "62561561"],
            (Object) ["nome" => "Pedro", "telefone" => "666"],
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o criar controller do contato controller";
    }

    public function editar()
    {
        return "Esse é o editar controller do contato controller";
    }
}
