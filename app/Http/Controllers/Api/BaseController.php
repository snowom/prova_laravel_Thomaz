<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    protected $classe;
    protected $dados;


/* ================================== APIS =========================================== */
    
    public function APIlistar()
    {
        $this->dados = $this->classe::all();
        
        return response()->json($this->dados, 200);
    }


    public function APIinsert(Request $req)
    {
        $this->dados = $req->all();
        $this->classe::create($this->dados);

        return response()->json('Dados cadastrados com sucesso', 200);
    }

    public function APIbuscar($id)
    {
        try{
            $this->dados = $this->classe::find($id);

            if (is_null($this->dados)) {
                throw new \Exception('Dados não encontrados');
            }

            return response()->json($this->dados, 200);

        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }


    public function APIeditar(Request $req, $id)
    {
        try{
            $this->dados = $this->classe::find($id);

            if (is_null($this->dados)) {
                throw new \Exception ('Falha ao localizar dados');
            }

            $this->dados->update($req->all());
            return response()->json('Dados atualizados com sucesso', 200);

        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }


    public function APIdeletar($id)
    {
        try{
            $this->dados = $this->classe::find($id);

            if (is_null($this->dados)) {
                throw new \Exception ('Falha ao localizar dados');
            }

            $this->dados->delete();
            
            return response()->json('Dados excluidos com sucesso');

        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }
}
