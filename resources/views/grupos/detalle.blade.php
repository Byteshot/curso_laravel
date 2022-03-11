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
        <table border="1">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>email</th>
                <th>Perros</th>
            </tr>
            @foreach ($grupo->alumnos as $alumno)
                <tr>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellido}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>
                        @foreach ($alumno->relacionPerros as $relacionPerro)
                            {{$relacionPerro->perro->nombre}} - Raza: {{$relacionPerro->perro->raza->nombre}}<br>
                            <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
    </center>
</body>
</html>
