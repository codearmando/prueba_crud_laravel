{{-- mensaje de la clase sesion, para poder acceder a los mensajes --}}
@if ($message= Session::get('success'))
    <div style="width:50%; margin:auto;border: 1px solid greeen;color:white;background:green">
        <p>{{$message}}</p>
    </div>
@endif
@if ($message= Session::get('destroy'))
    <div style="width:50%; margin:auto;border: 1px solid greeen;color:white;background:violet">
        <p>{{$message}}</p>
    </div>
@endif
<h1>

</h1>