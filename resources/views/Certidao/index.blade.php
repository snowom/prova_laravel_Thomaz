@extends('includes.pagina_mae')

@section('titulo','Todos os Produtos')

@section('conteudo')

{{-- {{ dd($dados)}} --}}

    <div class="container">
        <div class="container text-center mt-4">
            <h3>Todas as Certidões<h3>
        </div>

        @if (!@empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif

        <div class="row mt-4">

            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('viewCertidao') }}">
                    Adicionar
                </a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">Nome Tabeliao</th>
                        <th class="text-center" scope="col">Tipo Certidao</th>
                        <th class="text-center" scope="col">Envolvido 1</th>
                        <th class="text-center" scope="col">Envolvido 2</th>
                        <th class="text-center" scope='col'>Data</th>
                        <th class='text-center' scope="col" style="width: 100px">Ações</th>
                    </tr>
                </thead>

                @foreach($dados as $dado)
                    <tr>
                        <td class="text-center"> {{ $dado->id }} </td>
                        <td class="text-center"> {{ $dado->id_tabeliao }} </td>
                        <td class="text-center"> {{ $dado->tipo_certidao }} </td>
                        <td class="text-center"> {{ $dado->nome_envolvido_1 }} </td>
                        <td class="text-center"> {{ $dado->nome_envolvido_2 }} </td>
                        <td class="text-center"> {{ $dado->data_certidao }} </td>



                        <td class='text-center'>
                            <div class="row">
                                <div class="col-12">
                                <a class="btn btn-primary btn-block" href="{{ route('buscarCertidao', $dado->id)}}"style="color: white">Editar</a>
                                </div>
                            
                                <div class="col-12 mt-2">
                                    <form action="{{ route('deletarContrato', $dado->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-block" style="color: white">Deletar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection