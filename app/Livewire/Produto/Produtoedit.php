<?php

namespace App\Livewire\Produto;

use App\Models\produtos;
use Hamcrest\Thingy;
use Livewire\Component;

class Produtoedit extends Component
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
    public $produtoID;

    public function mount($id){
        $produto = produtos::find($id);
        if($produto == null){
            session()->flash('erro', 'não encontrado');
            return redirect()->route('produto.index');
        }
        $this->produtoID = $produto->id;
        $this->categorias = $produto->categorias;
        $this->praso_v = $produto->praso_validade;
        $this->observacoes = $produto->observacoes;
        $this->cor = $produto->cor;
        $this-> nome = $produto->nome;
        $this->peso = $produto->peso_kg;
        $this-> valor = $produto->valor;
        $this-> qtd_atual = $produto->qtd_atual;
        $this-> qtd_min = $produto->qtd_min;
    }

    public function update(){
        $produto = produtos::find($this -> produtoID);

        if($produto == null){
            session()->flash('erro', 'produto não encontrado');
        }
        
        $produto->nome = $this->nome;
        $produto->valor = $this->valor;
        $produto->praso_validade = $this->praso_v;
        $produto->cor = $this->cor;
        $produto->peso_kg = $this->peso;
        $produto->observacoes = $this->observacoes;
        $produto->categorias = $this->categorias;
        $produto->qtd_atual = $this->qtd_atual;
        $produto->qtd_min = $this->qtd_min;

        $produto->save();

        session()->flash('success', 'produto atualizado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto.produtoedit');
    }
}
