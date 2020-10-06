@extends('includes.pagina_mae')

@section('titulo','Cadastrar Tipo Produto')

@section('conteudo')


<form action="{{route('insertCertidao', $dados->id)}}" method="post">
    @csrf
    <div class="container mt-3">
        
        <div class="row">
    
            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Tipo Certidao</label>
                    <input class='form-control' type="text" name="tipo_certidao">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Envolvido 1</label>
                    <input class='form-control' type="text" name="nome_envolvido_1">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Envolvido 2</label>
                    <input class='form-control' type="text" name="nome_envolvido_2">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Data</label>
                    <input type='date' class='form-control' name="data_certidao">
                </div>
            </div>

        </div>


        <button type="submit"  class="btn btn-success" style="color: #fff">Salvar</button>
    </div>
</form>

@endsection