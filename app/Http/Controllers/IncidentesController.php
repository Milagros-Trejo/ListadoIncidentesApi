<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models;

class IncidentesController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $incidentes = DB::table('incidentes')->whereNull('horaDeCierre');
        return view('incidentes.index', ["listaIncidentes"=>$incidentes]);
    }
}
