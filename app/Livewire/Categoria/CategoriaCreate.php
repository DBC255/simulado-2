<?php

namespace App\Livewire\Categoria;

use App\Models\categorias;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;
    public function save(){

        categorias::create([
            'nome' => $this->nome
        ]);
    }
    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}
