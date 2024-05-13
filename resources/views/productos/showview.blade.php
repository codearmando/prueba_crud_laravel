@extends('layouts.landing')

@section('title','Vista de tarea')

@section('content')

    <div class="container_producto">
        <div class="title_producto">
            <h3>Detalles del Producto</h3>
        </div>
        <form action="" class="form_details_product">
            <input type="text" readonly onmousedown="return false;" value="{{$id->id}}">
            <input type="text" readonly onmousedown="return false;" value="{{$id->nombre}}">
            <input type="text" readonly onmousedown="return false;" value="{{$id->descripcion}}">
            <input type="text" readonly onmousedown="return false;" value="{{$id->precio}}">
            <input type="datetime" readonly onmousedown="return false;" value="{{$id->created_at}}">
            <input type="datetime" readonly onmousedown="return false;" value="{{$id->updated_at}}">
        </form>
    </div>
@endsection