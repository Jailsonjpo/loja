@extends('layouts.admin.app_adm')

@section('content')

<div class='container'>
    <div class="card">

        <div class='row'>

            <div class="card-panel teal lighten-2"><h3 class="white-text center-align">Produtos</h3></div>

            <a href="{{route('produtos.create')}}" class="btn btn-default">Novo Produto</a>
            <br />
            <br />

            <table class='table table-striped table-bordered table-hover'>
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>  
                        <th>Preço</th>                          
                        <th>Tamanho (cm)</th>                          
                        <th>Editar</th>
                        <th>Excluir</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($produtos as $produto)

                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->titulo}}</td>               
                        <td>{{$produto->descricao}}</td>
                        <td><img width="100" src="{{asset($produto->imagem)}}"></td>
                        <td>{{$produto->preco}}</td>
                        <td>{{$produto->tamanho}}</td>
                        <td><a href="{{route('produtos.edit', ['id' => $produto->id])}}" class="btn blue">Editar</a></td>
                        <td><a href="{{route('produtos.destroy', ['id' => $produto->id])}}" class="btn red">Remover</a></td>



                    </tr>

                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>


@endsection
