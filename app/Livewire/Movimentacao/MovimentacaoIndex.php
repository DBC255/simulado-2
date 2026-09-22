<?php

namespace App\Livewire\Movimentacao;

use App\Models\movimentacao;
use Livewire\Component;

class MovimentacaoIndex extends Component
{
    public function delete($id){
        $movimentacao = movimentacao::find($id);
        if($movimentacao != null){
        $movimentacao->delete();
        session()->flash('success', 'excluido');
        }
    }

    public function render()
    {
        $movimentacoes = movimentacao::all();
        return view('livewire.movimentacao.movimentacao-index', compact('movimentacoes'));
    }
}
