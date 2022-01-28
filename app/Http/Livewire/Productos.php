<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    //TODO:Definimos variables para el componente
    public $productos, $descripcion, $cantidad, $id_producto;
    public $modal = false;
 
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
    
    public function guardar(){
        $newProducto = new Producto();
        $newProducto->descripcion = $this->descripcion;
        $newProducto->cantidad = $this->cantidad;
        $newProducto->save();
        $this->limpiar();
        $this->cerrarModal();
        $this->productos = Producto::all();
    }
    
    public function editar() {}

    public function eliminar() {}

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

}
