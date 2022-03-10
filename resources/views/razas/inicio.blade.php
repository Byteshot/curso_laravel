<center>
    <table>
        <tr>
            <th>
                #
            </th>
            <th>
                Nombre
            </th>
            <th>
                Descripcion
            </th>
            <th>
                No. Perros
            </th>
        </tr>
        @foreach ($razas as $raza)
        <tr>
            <td>
                {{$raza->id}}
            </td>
            <td>
                <a target="_blank" href="{{route('razas.detalle',$raza->id)}}">{{$raza->nombre}}</a>
            </td>
            <td>
                {{$raza->descripcion}}
            </td>
            <td>
                {{$raza->perros->count()}}
            </td>
        </tr>
        @endforeach

    </table>
</center>
