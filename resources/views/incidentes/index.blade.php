<html>
<h1>Index</h1>
<table>
    @foreach($incidentes as $current)
    <tr>
        <td>{{$current->observaciones}}</td>
        <td>{{$current->miembro->nicknameMiembro}}</td>
        <td>{{$current->comunidad->descripcion}}</td>
        <td>{{$current->prestacionservicio->servicioprestado->descripcion}}</td>
        <td>{{$current->prestacionservicio->establecimiento->nombre}}</td>
    </tr>
    @endforeach
</table>
</html> 