@extends('layouts.landing')
@section('title','Registrar')

@section('content')
{{-- enviar la informacion al nombre de ruta definida --}}
    <div class="container_producto">
        <div class="title_producto">
            <h3>Registrar Producto</h3>
        </div>
        <form class="form_registro" action="{{route('productos.register')}}" method="post">
            @csrf 
            <input type="text" name="nombre" placeholder="Nombre del producto" class="@error('nombre') inputerror @enderror">
            @error('nombre') {{-- indicamos el nombre del campo --}}
                {{-- indicamos el mensaje de error  --}}
                <p style="color:red;">{{$message}}</p>
            @enderror
            <br>
            <input type="text" name="descripcion" placeholder="descripcion del producto">
            @error('descripcion') {{-- indicamos el nombre del campo --}}
                {{-- indicamos el mensaje de error  --}}
                <p style="color:red;">{{$message}}</p>
            @enderror
            <br>
            <input type="number" name="precio" placeholder="precio del producto">
            @error('precio') {{-- indicamos el nombre del campo --}}
                {{-- indicamos el mensaje de error  --}}
                <p style="color:red;">{{$message}}</p>
            @enderror
            <br><br>
            <input type="submit" value="Registrar">
        </form>
    </div>
@endsection