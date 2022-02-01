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
        $this->limpiar();
    }
    
    public function limpiar() {
        $this->descripcion = "";
        $this->cantidad = "";
        $this->id_producto = "";
    }
    
    public function guardar(){

        /* if($this->id_producto == null){
            $newProducto = new Producto();
            $newProducto->descripcion = $this->descripcion;
            $newProducto->cantidad = $this->cantidad;
            $newProducto->save();
            $this->cerrarModal();
        }else{
            $producto = Producto::findOrFail($this->id_producto);
            $producto->descripcion = $this->descripcion;
            $producto->cantidad = $this->cantidad;
            $producto->save();
            $this->cerrarModal();
        } */

        Producto::updateOrCreate(['id'=>$this->id_producto],['descripcion' => $this->descripcion, 'cantidad' => $this->cantidad]);
        session()->flash('mensage', $this->id_producto ? '!Usuarios Actualizado con Exitosa':'Usuario Creado Correctamente');
        $this->cerrarModal();
    }
    
    public function editar($id) {
        $producto = Producto::findOrFail($id);
        $this->abrirModal();
        $this->id_producto = $producto->id;
        $this->descripcion = $producto->descripcion;
        $this->cantidad = $producto->cantidad;

    }

    public function eliminar($id) {
        $producto = Producto::findOrFail($id)->delete();
        session()->flash('mensage','Mensaje Eliminado Correctamenet');
    }

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

}
