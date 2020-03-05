@extends('layouts.admin.app_adm')

@section('content')

<div class='container'>

    <div class="card">

        <div class="card-panel teal lighten-2"><h3 class="white-text center-align">Novo Produto</h3></div>

        @if ($errors->any())

        <ul class='alert alert-warning'>

            @foreach($errors->all() as $error)
            <li>{{$error}}</li>

            @endforeach
        </ul>

        @endif

        <!--inicio----------------------------------------- -->

                   
            <form action="{{ route('produtos.update',$produto->id) }}" method="post" enctype="multipart/form-data">
            
            @csrf
		<input type="hidden" name="_method" value="put">
            <!--<form class="col s12">-->
            <div class="row">
                <div class="input-field col s6">

                    {!! Form::text('titulo', $produto->titulo, ['class' => 'validate']) !!}  
                    {!! Form::label('titulo', 'Titulo') !!}   

                </div>

                <div class="input-field col s6">

                    {!! Form::text('tamanho', $produto->tamanho, ['class' => 'validate']) !!}  
                    {!! Form::label('tamanho', 'Tamanho (cm)') !!}  

                </div>
            </div>

            <div class="row">

                <div class="file-field input-field col m6 s12">
                    <div class="btn">
                        <span>Imagem</span>
                        <input type="file" name="imagem">
                    </div>
                    <div class="file-path-wrapper">
                        <input type="text" class="file-path validade">
                    </div>		
                </div>
                <div class="col m6 s12">
                    @if(isset($produto->imagem))
                    <img width="120" src="{{asset($produto->imagem) }}">
                    @endif
                </div>

            </div>

            <div class="row">
                <div class="input-field col s6">

                    {!! Form::text('preco', $produto->preco, ['class' => 'validate']) !!}  
                    {!! Form::label('preco', 'Preço (R$)') !!}  

                </div>

                <div class="input-field col s6">

                    {!! Form::text('cor', $produto->cor, ['class' => 'validate']) !!}  
                    {!! Form::label('cor', 'Cor') !!}  

                </div>

            </div>

            <div class="row">
                <div class="input-field col s6">

                    {!! Form::label('descricao', 'Descrição') !!}    
                    {!! Form::textarea('descricao', $produto->descricao, ['class' => 'materialize-textarea', 'validate']) !!}    


                </div>
                <div class="input-field col s6">

                    {!! Form::label('especificacao', 'Especificaçao') !!}    
                    {!! Form::textarea('especificacao', $produto->especificacao, ['class' => 'materialize-textarea', 'validate']) !!}    


                </div>
            </div>
            
             <div class='row'>

                    <div class="input-field col s12">
                        <select name="publicar">
                            <option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
                            <option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
                        </select>
                        <label>Publicar?</label>
                    </div>

                </div>


            <div class="row">
                <div class="col s12">

                    <div class="input-field inline">

                        {{ FORM::button('<i class="material-icons right" aria-hidden="true">send</i>Atualizar Produto',['class'=>'btn waves-effect waves-light','type'=>'submit','id'=>'id-button']) }}

                    </div>
                </div>
            </div>
            </form>
           

        </div>

        <!--fim -------------------------------------------- -->
    </div>




@endsection

