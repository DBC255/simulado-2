<?php

namespace App\Livewire\Movimentacao;

use App\Models\movimentacao;
use App\Models\produtos;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $produtos;
    public $idProdutoSelecionado;
    public $tipo = 'saida';
    public $quantidade_movimentada;
    public $data_movimentacao;
    public $alertaEstoqueBaixo;
    protected $rules =[
        'quantidade_movimentada' => 'required',
        'data_movimentacao' => 'required',
        'produtos' => 'required',
    ];

    public function mount(){
        $this->produtos = produtos::orderBy('nome')->get();
        $this->data_movimentacao = now()->format('Y-m-d');
    }

    public function store(){
        $produto = produtos::find($this->idProdutoSelecionado);

        if($produto->qtd_atual < $this->quantidade_movimentada && $this->tipo == 'saida'){
            $this->addError('quantidade_movimentada', 'Quantidade em estoque insuficiente');
            return;
        }
        // Atualizar estuque
        if($this-> tipo == "entrada"){
           // outra opção: $produto->qtd_estoque += $this->quantidade_movientada;
            $produto->increment('qtd_atual', $this->quantidade_movimentada);
        }
        else{
            // outra opção: $produto->decrement('qtd_estoque', $this->quantidade_movimentada);
            $produto->qtd_atual -= $this->quantidade_movimentada;
        };

        //Resgistrar movimentação
        movimentacao::create([
            'quantidade' => $this->quantidade_movimentada,
            'data_movimentacao' => $this->data_movimentacao,
            'tipo' => $this->tipo,
            'produto_id' => $this->idProdutoSelecionado,
            'user_id' => 1
        ]);

        $produto->update();
        // verificar estoque baixo
        $produto->refresh;
        if($produto->qtd_atual < $produto->qtd_min){
            $this->alertaEstoqueBaixo = "Alerta: estoque baixo para {$produto->nome}. Quantidade atual
        {$produto->qtd_atual}";
        }else{
            $this->alertaEstoqueBaixo = "";
        }

        session()->flash('message', 'Movimentação registrada com sucesso!');
        $this->reset(['quantidade_movimentada', 'tipo']);
        $this->produtos = produtos::orderBy('nome')->get();

    }
    public function render()
    {
        return view('livewire.movimentacao.movimentacao-create');
    }
}
