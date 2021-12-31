<x-slot name="header">
    <h1 class="text-gray-900">CRUD Con Laravel 8 y Liveeire </h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-red-600 text-white">
                        <th class="px-4 py-2 w-2/12">ID</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2 text-center w-2/12">{{$producto->id}}</td>
                        <td class="border px-4 py-2">{{$producto->descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>