@extends('layouts.landing')

@section('title','producto')


@section('content')
    <div class="titulo_dev">
        <h3>BIENVENIDO AL CRUD DE PRODUCTOS</h3>
        <i>Dev- Gabriel Rincón</i> -- <i><strong>Prueba de laravel</strong></i>
    </div>
    <table>
        <thead>
            <tr>
                <th>NOMBRE PRODUCTO</th>
                <th>DESCRIPCIÓN DEL PRODUCTO</th>
                <th>PRECIO DEL PRODUCTO</th>
                <th>VER DETALLES</th>
                <th>MODIFICAR PRODUCTO</th>
                <th>ELIMINAR PRODUCTO</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($producto as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td><a class="btn_detalles" href="{{ route('producto.viewshow',$producto->id) }}">Detalles del Producto</a></td>
                    <td><a class="btn_modificar" href="{{ route('productos.viewupdate',$producto->id) }}">Modificar Producto</a></td>
                    {{-- aqui le podemos pasar mas de un parametro incluyendo un array  --}}
                    {{-- <td><a href="{{route('producto.edit',['idnota'=> $idnota->id,'idnota'=> $idnota->fecha,...] )}}">Modificar</a></td> --}}
                    <td>
                        <form action="{{ route('productos.delete',$producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn_borrar" type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @empty
                    <p>No hay Productos</p>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @section('styles')
    <link rel="stylesheet" href="">
@endsection --}}