<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produto;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class ProdutosController extends Controller {

    public function index() {

        $produtos = Produto::all();

        return view('admin.index', ['produtos' => $produtos]);
    }

    public function create() {

        return view('admin.create');
    }

    public function store(ProdutoRequest $request) {

        $dados = $request->all();

        $registro = new Produto();
        $registro->titulo = $dados['titulo'];
        $registro->tamanho = $dados['tamanho'];
        $registro->preco = $dados['preco'];
        $registro->cor = $dados['cor'];
        $registro->descricao = $dados['descricao'];

//        $registro->especificacao= $dados['especificacao'];
        $registro->visualizacoes = 0;
        $registro->publicar = $dados['publicar'];

        if (isset($dados['mapa']) && trim($dados['mapa']) != "") {
            $registro->mapa = trim($dados['mapa']);
        } else {
            $registro->mapa = null;
        }

        $file = $request->file('imagem');

        if ($file) {
            $rand = rand(11111, 99999);
            $diretorio = "img/produtos/".Str::slug($dados['titulo'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_" . $rand . "." . $ext;
            $file->move($diretorio, $nomeArquivo);
            $registro->imagem = $diretorio . '/' . $nomeArquivo;
        }

        $registro->save();

        return redirect()->route('produtos');
    }

    public function destroy($id) {

        Produto::find($id)->delete();

        return redirect()->route('produtos');
    }

    public function edit($id) {

        $produto = Produto::find($id);

        return view('admin.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, $id) {

//        $produto = Produto::find($id)->update($request->all());
        
        $registro = Produto::find($id);
        
               
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->tamanho = $dados['tamanho'];
        $registro->preco = $dados['preco'];
        $registro->cor = $dados['cor'];
        $registro->descricao = $dados['descricao'];

//        $registro->especificacao= $dados['especificacao'];
        $registro->visualizacoes = 0;
        $registro->publicar = $dados['publicar'];

        if (isset($dados['mapa']) && trim($dados['mapa']) != "") {
            $registro->mapa = trim($dados['mapa']);
        } else {
            $registro->mapa = null;
        }

//        $registro->cidade_id= $dados['cidade_id'];
//        $registro->tipo_id= $dados['tipo_id'];

        $file = $request->file('imagem');


        if ($file) {
            $rand = rand(11111, 99999);
            $diretorio = "img/produtos/".Str::slug($dados['titulo'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_" . $rand . "." . $ext;
            $file->move($diretorio, $nomeArquivo);
            $registro->imagem = $diretorio . '/' . $nomeArquivo;
        }

        $registro ->update();

//        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('produtos');
    }

}
