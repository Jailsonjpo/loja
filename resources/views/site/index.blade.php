@extends('layouts.site.app')

@section('content')

<div class="section">


    <br />
    <br />

    <div class="divider"></div>

    <div class="row white">

        @foreach($produtos as $produto)

        <div class="col s12 m2 l2">
            <div class="card z-depth-5">
                <div class="card-image">
                    <img class="materialboxed" data-caption="{{$produto->descricao}}" src="{{asset($produto->imagem)}}">
                    <span class="card-title red-text">R$ {{ number_format($produto->preco,2,",",".") }}</span>
                    </div>
                <div class="card-content">
                    <p>{{$produto->descricao}}</p>
                </div>
                <div class="card-action">
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>

</div>

@endsection