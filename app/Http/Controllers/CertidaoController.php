<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certidao;
use App\Tabeliao;
use App\Http\Controllers\Api\BaseController;

class CertidaoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Certidao::class;
    }


    public function listar(Request $req)
    {
        $dados = $this->classe::all();
        $mensagem = $req->session()->get('mensagem');

        return view('Certidao.index', compact('dados', 'mensagem'));
    }


    public function buscar($id)
    {
        $dados = $this->classe::find($id);
        $tabelioes = Tabeliao::all();

        return view('Certidao.edita_certidao', compact('dados','tabelioes'));
    }


    public function editar(Request $req, $id)
    {
        $dados = $this->classe::find($id);
        $dados->update($req->all());

        $mensagem = $req->session()
            ->flash(
                'mensagem',
                'Certidão editada com sucesso!'
            );

        return redirect()->route('listarCertidao');
    }

    public function viewAdc()
    {
        
        return view('Certidao/insere_certidao', compact('tabelioes'));
    }
}
