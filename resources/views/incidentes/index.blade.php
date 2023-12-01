@extends('incidentes.base')
@section('contenido')
<h1 class="mt-3" style="color: #581ee1">Listado de incidentes</h1>
<table>
    <div class="list-group">
    @foreach($incidentes as $current)
        <a class="list-group-item m-2">
            <div class="d-flex w-100 justify-content-between">
                <small style="color: #581ee1"><b>
                    @if($current->horaDeCierre)
                        CERRADO
                    @else
                        ACTIVO
                    @endif
                </b></small>
                <small>{{$current->comunidad->descripcion}}</small>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1" style="color: #581ee1">
                    {{$current->prestacionservicio->establecimiento->entidad->nombre}} {{$current->prestacionservicio->establecimiento->nombre}} - {{$current->prestacionservicio->servicioprestado->descripcion}}
                </h5>
            </div>
            <p class="mb-1">{{$current->observaciones}}</p>
            <div class="d-flex w-100 justify-content-between">
                <small>
                    Reportante: {{$current->miembro->nicknameMiembro}}
                </small>
                <small>
                    Desde {{date('d/m/Y h:m:s', strtotime($current->horaDeApertura))}} 
                    @isset($current->horaDeCierre)
                        hasta {{date('d/m/Y h:m:s', strtotime($current->horaDeCierre))}}
                    @endisset
                </small>
            </div>
        </a>
    @endforeach
    </div>
</table>
@endsection