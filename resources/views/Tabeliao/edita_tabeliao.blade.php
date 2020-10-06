@extends('includes.pagina_mae')

@section('titulo','Cadastrar Tipo Produto')

@section('conteudo')


<form action="{{route('editarTabeliao', $dados->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="container mt-3">
        
        <div class="row">
    
            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Nome</label>
                    <input class='form-control' type="text" name="nome"
                    value='{{$dados->nome}}'>
                </div>
            </div>

        </div>


        <button type="submit"  class="btn btn-success" style="color: #fff">Salvar</button>
    </div>
</form>

@endsection