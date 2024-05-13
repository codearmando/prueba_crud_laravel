@extends('layouts.landing')

@section('title','Modificar')


@section('content')
{{-- como todo formulario solamente trabaja con metodo post y get , especificamos estrictamente con que metodo trabajara
    este fromulario mediante la directiva @method --}}
    <div class="container_producto">
        <div class="title_producto">
            <h3>Modificar Producto</h3>
        </div>
        <form action="{{ route('productos.update', $idproducto->id )}}" method="POST">
            @method('PUT')  {{--  nos permite pasar los valores por put como se definio en la ruta --}}
            @csrf
    
            <input type="text" name="nombre" value="{{$idproducto->nombre}}" >
            @error('nombre') {{-- indicamos el nombre del campo --}}
                {{-- indicamos el mensaje de error  --}}
                <p style="color:red;">{{$message}}</p>
            @enderror
            <br>
            <input type="text" name="descripcion" value="{{$idproducto->descripcion}}">
            @error('descripcion') {{-- indicamos el nombre del campo --}}
                {{-- indicamos el mensaje de error  --}}
                <p style="color:red;">{{$message}}</p>
            @enderror
            <br>
            <input type="number" name="precio" value="{{$idproducto->precio}}">
            @error('precio') {{-- indicamos el nombre del campo --}}
                {{-- indicamos el mensaje de error  --}}
                <p style="color:red;">{{$message}}</p>
            @enderror
            <br><br>
            <input type="submit" value="Modificar">
        </form>
    </div>
@endsection