@extends('incidentes.base')
@section('contenido')
<h1 style="color: #581ee1">Listado de incidentes activos</h1>
<table>
    @foreach($incidentes as $current)
    <div class="list-group">
        <a class="list-group-item m-2">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1" style="color: #581ee1">
                    {{$current->prestacionservicio->establecimiento->nombre}} - {{$current->prestacionservicio->servicioprestado->descripcion}}
                </h5>
                <small>{{$current->comunidad->descripcion}}</small>
            </div>
            <p class="mb-1">{{$current->observaciones}}</p>
            <small>Reportante: {{$current->miembro->nicknameMiembro}}</small>
        </a>
    </div>
    @endforeach
</table>
@endsection