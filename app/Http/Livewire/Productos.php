<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    //TODO:Definimos variables para el componente
    public $productos;

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }
}
