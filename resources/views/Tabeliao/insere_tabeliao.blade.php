@extends('includes.pagina_mae')

@section('titulo','Cadastrar Tipo Produto')

@section('conteudo')


<form action="{{route('insertTabeliao')}}" method="post">
    @csrf
    <div class="container mt-3">
        
        <div class="row">
    
            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Nome</label>
                    <input class='form-control' type="text" name="nome">
                </div>
            </div>

        </div>


        <button type="submit"  class="btn btn-success" style="color: #fff">Salvar</button>
    </div>
</form>

@endsection