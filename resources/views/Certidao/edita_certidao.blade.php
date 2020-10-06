@extends('includes.pagina_mae')

@section('titulo','Cadastrar Tipo Produto')

@section('conteudo')


<form action="{{route('editarCertidao', $dados->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="container mt-3">
        
        <div class="row">
    
            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Tipo Certidao</label>
                    <input class='form-control' type="text" name="tipo_certidao"
                    value='{{$dados->tipo_certidao}}'>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Envolvido 1</label>
                    <input class='form-control' type="text" name="nome_envolvido_1"
                    value='{{$dados->nome_envolvido_1}}'>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Envolvido 2</label>
                    <input class='form-control' type="text" name="nome_envolvido_2"
                    value='{{$dados->nome_envolvido_2}}'>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="descricao">Data</label>
                    <input type='date' class='form-control' name="data_certidao"
                    value='{{$dados->data_certidao}}'>
                </div>
            </div>

            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label>Tabeliões</label>
                    <select class="form-control" name='id_tipo'>
                        <option value='NULL'>Selecionar</option>

                        @foreach ($tabelioes as $tabeliao)
                            @if ($dados->id_tabeliao == $tabeliao->id)
                                <option value={{$tabeliao->id}} selected>{{$tabeliao->nome}}</option>
                            @else
                                <option value={{$tabeliao->id}}>{{$tabeliao->nome}}</option>
                            @endif
                        @endforeach

                      </select>
                </div>
            </div>

            

        </div>


        <button type="submit"  class="btn btn-success" style="color: #fff">Salvar</button>
    </div>
</form>

@endsection