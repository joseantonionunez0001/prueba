<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/ver-pedidos" method="GET">
        <label for="usuarios">Usuarios</label>

        <select name="" id="usuarios">
        <option value="1">Javi</option>
        @foreach ($users as $u)
            <option value="{{$u->id}}">{{$u->name}}</option>
        @endforeach
        </select>
        <input type="submit" value="Ver pedidos">
    </form>

</body>
</html>