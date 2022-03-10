<center>
    <h1>{{$raza->nombre}}</h1>
    <h3>{{$raza->descripcion}}</h3>
    <hr><hr>
    <h2 >Perros</h2>
    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Raza</th>
        </tr>
        @foreach($raza->perros as $perro)
            <tr>
                <td>{{$perro->id}}</td>
                <td>{{$perro->nombre}}</td>
                <td>{{$perro->descripcion}}</td>
                <td>{{$perro->raza->nombre}}</td>
            </tr>
        @endforeach
</center>
