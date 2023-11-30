<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Incidente;
use App\Models\Miembro;
use App\Models\Comunidad;
use App\Models\PrestacionServicio;
use App\Models\Servicio;
use App\Models\Establecimiento;

class IncidentesController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $incidentes = Incidente::select('*')
                                ->get();

        return view('incidentes.index')->with('incidentes', $incidentes);
    }
}
