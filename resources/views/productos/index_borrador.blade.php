<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>estas en index de notas </h1>
    <br>
    @if (strlen($id) === 0 || $id === '' ||  $id === null)
        <p>Hola estas en la vista pero no hay parametro</p>
        
            
        @else
            
        <p>el valor de la ruta es : {{ $id }}</p>
    @endif

    
    
</body>
</html>