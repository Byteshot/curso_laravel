<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del grupo {{$grupo->nombre}}</title>
</head>
<body>
    <center>
        <h1>Grupo: {{$grupo->nombre}}</h1>
        <table>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>email</th>
            </tr>
            @foreach ($grupo->alumnos as $alumno)
                <tr>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellido}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>{{$alumno->email}}</td>
                </tr>
            @endforeach
    </center>
</body>
</html>
