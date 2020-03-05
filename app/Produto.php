<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    
    protected $fillable = ['titulo', 'tamanho', 'file', 'preco', 'mapa', 'cor', 'descricao', 'especificacao', 'visualizacoes', 'publicar'];
    
    public function avaliacoes() {
        
        return $this->hasMany('App\AvaliacaoProduto');
        
    }
    
    public function tags() {
        
        return $this->belongsToMany('App\Tag');
        
    }
}
