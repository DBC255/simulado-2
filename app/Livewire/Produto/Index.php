<?php

namespace App\Livewire\Produto;

use App\Models\produtos;
use Livewire\Component;

class Index extends Component
{
    public function delete($id){
        $produto = produtos::find($id);

    if($produto != null){
        $produto->delete();
        session()->flash('success', 'excluido');
    }
    }

    public function render()
    {
         $produtos = produtos::all();
        return view('livewire.produto.index', compact('produtos'));
    }
}
