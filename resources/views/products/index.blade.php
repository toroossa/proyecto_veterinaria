@extends('layouts.plantilla')

@section('title','index de productos')

@section('content')
    
    <table class="table table-striped-columns">
        <thead class="table-info ">
            <tr class="text-center mt-4">
                <th>Nombre </th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Detalle</th>
                <th>Opcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )           
            <tr class="text-center mt-4">
                <th>{{$product->nombre}}</th>
                <th>{{$product->precio}}</th>
                <th>{{$product->estado}}</th>
                <th>{{$product->detalle}}</th>
                <th>
                <a href="{{route('envios.create', $product)}}" class="btn btn-info  ">Comprar🛒</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>   
    <div>
        {{$products->links()}}
    </div>
@endsection