<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabeliao;
use App\Http\Controllers\Api\BaseController;

class TabeliaoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Tabeliao::class;
    }


    public function listar(Request $req)
    {
        $dados = $this->classe::all();
        $mensagem = $req->session()->get('mensagem');

        return view('Tabeliao.index', compact('dados', 'mensagem'));
    }


    public function buscar($id)
    {
        $dados = $this->classe::find($id);

        return view('Tabeliao.edita_tabeliao', compact('dados'));
    }


    public function editar(Request $req, $id)
    {
        $dados = $this->classe::find($id);
        $dados->update($req->all());

        $mensagem = $req->session()
            ->flash(
                'mensagem',
                'Tabeliao editado com sucesso!'
            );

        return redirect()->route('listarTabeliao');
    }


    public function deletar(Request $req, $id)
    {
        $dados = $this->classe::find($id)->delete();

        $mensagem = $req->session()
            ->flash(
                'mensagem',
                'Tabeliao excluido com sucesso!'
            );
            
        return redirect()->route('listarTabeliao');
    }


    public function viewAdc()
    {
        return view('Tabeliao/insere_tabeliao');
    }

    public function insert(Request $req)
    {
        $dados = $req->all();
        $this->classe::create($dados);

        $mensagem = $req->session()
            ->flash(
                'mensagem',
                'Tabeliao adicionado com sucesso!'
            );

        return redirect()->route('listarTabeliao', compact('mensagem'));
    }

    
}
