<html>
<h1>Index</h1>
<table>
    <tr>
        <td>Hola</td>
    </tr>
    @foreach($listaIncidentes as $current)
    <tr>
        <td>{{$current['observaciones']}}</td>
    </tr>
    @endforeach
</table>
</html> 