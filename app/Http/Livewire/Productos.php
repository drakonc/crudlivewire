<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    //TODO:Definimos variables para el componente
    public $productos, $descripcion, $cantidad, $id_producto;
    public $modal = false;


    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

    public function crear() {
        $this->limpiar();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }

    public function cerrarModal() {
        $this->modal = false;
    }

    public function limpiar() {
        $this->descripcion = "";
        $this->cantidad = "";
        $this->id_producto = "";
    }


}
