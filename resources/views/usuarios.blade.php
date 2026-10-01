<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>NOMBRES DE USUARIOS</h1>

    @foreach ($names as $nombre)
        <div>{{$nombre}}</div>
    @endforeach

</body>
</html>