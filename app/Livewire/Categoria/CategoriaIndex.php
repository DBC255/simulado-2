<?php

namespace App\Livewire\Categoria;

use App\Models\categorias;
use App\Models\produtos;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public function delete($id){
        $categoria = categorias::find($id);
        if($categoria != null){
            $categoria->delete();
            session()->flash('success', 'excluido');
        };
    }

    public function render()
    {
        $categoria = categorias::all();
        return view('livewire.categoria.categoria-index', compact('categoria'));
    }
}
