<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Contrato;

class ContratoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Contrato::class;
    }


    public function listar(Request $req)
    {
        $dados = $this->classe::all();
        $mensagem = $req->session()->get('mensagem');

        return view('Contrato.index', compact('dados', 'mensagem'));
    }


    public function buscar($id)
    {
        $dados = $this->classe::find($id);

        return view('Contrato.edita_tabeliao', compact('dados'));
    }
}
