<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupos</title>
</head>
<body>
    <center>
        <h1>Grupos</h1>
        <table>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Código</th>
                <th>No. Alumnos</th>
            </tr>
            @foreach ($grupos as $grupo)
                <tr>
                    <td><a href="{{route('grupo.detalle',$grupo->codigo)}}">{{$grupo->id}}</a></td>
                    <td>{{$grupo->nombre}}</td>
                    <td>{{$grupo->descripcion}}</td>
                    <td><a href="{{route('grupo.detalle',$grupo->codigo)}}">{{$grupo->codigo}}</a></td>
                    <td>{{$grupo->alumnos->count()}}</td>
                </tr>
            @endforeach
    </center>
</body>
</html>
