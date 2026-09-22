<?php

namespace App\Livewire\Categoria;

use App\Models\categorias;
use Livewire\Component;

class CategoriaEdit extends Component
{
    public $categoriaID;
    public $nome;
    public function mount($id){
        $categoria = categorias::find($id);
        if(!$categoria){
            session()->flash('erro', 'não encontrado');
        }
        $this->categoriaID = $categoria->id;
        $this->nome = $categoria->nome;

    }

    public function edit(){
     $categoria = categorias::find($this->categoriaID);
     if (!$categoria) {
        session()->flash('erro', 'não encontrado');
     }
     $categoria->nome = $this->nome;

     $categoria->save();
    }

    public function render()
    {
        return view('livewire.categoria.categoria-edit');
    }
}
