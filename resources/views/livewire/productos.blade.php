<x-slot name="header">
    <h1 class="text-gray-900">CRUD Con Laravel 8 y Liveeire </h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">

            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 rounded text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if($modal)
                @include('livewire.crear')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-red-600 text-white">
                        <th class="px-4 py-2 w-2/12">ID</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                        <th class="px-4 py-2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2 text-center w-2/12">{{$producto->id}}</td>
                        <td class="border px-4 py-2">{{$producto->descripcion}}</td>
                        <td class="border text-center px-4 py-2">{{$producto->cantidad}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$producto->id}})" class="bg-blue-500 hover:bg-blue-600 rounded text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="eliminar({{$producto->id}})" class="bg-red-500 hover:bg-red-600 rounded text-white font-bold py-2 px-4">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>