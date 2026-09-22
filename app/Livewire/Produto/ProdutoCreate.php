<?php

namespace App\Livewire\Produto;

use App\Models\produtos;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $praso_v;
    public $valor;
    public $observacoes;
    public $categorias;
    public $cor;
    public $peso;
    public $qtd_atual;
    public $qtd_min;

    public function save(){
        produtos::create([
        'nome' => $this->nome,
        'praso_validade' => $this->praso_v,
        'valor' => $this->valor,
        'cor' => $this->cor,
        'peso_kg' => $this->peso,
        'observacoes' => $this->observacoes,
        'categorias' => $this->categorias,
        'qtd_min' => $this->qtd_min,
        'qtd_atual' => $this->qtd_atual
        ]);
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
