<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comunidad;
use App\Models\Miembro;
use App\Models\PrestacionServicio;

class Incidente extends Model
{
    use HasFactory;
    protected $table = 'incidente';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'fechaIncidente',
        'horaDeApertura',
        'horaDeCierre',
        'observaciones',
        'comunidad_id',
        'miembro_id',
        'prestacionservicio_id'
    ];

    protected $guarded = [
        
    ];

    // NO VA PORQUE SOLO MOSTRAMOS ACTIVOS
    //
    //public function miembroCierre(){
    //    return $this->belongsTo(Miembro::class);
    //}

    public function prestacionservicio(){
        return $this->belongsTo(PrestacionServicio::class);
    }
    public function comunidad(){
        return $this->belongsTo(Comunidad::class);
    }
    public function miembro(){
        return $this->belongsTo(Miembro::class);
    }
    
}
