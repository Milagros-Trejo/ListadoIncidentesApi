<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incidente;
use App\Models\Servicio;
use App\Models\Establecimiento;

class PrestacionServicio extends Model
{
    use HasFactory;
    protected $table = 'prestacionservicio';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'establecimiento_id',
        'servicioprestado_id'
    ];

    protected $guarded = [
        
    ];

    public function incidentes(){
        return $this->hasMany(Incidente::class, 'prestacionservicio_id', 'id');
    }
    public function servicioprestado(){
        return $this->belongsTo(Servicio::class);
    }
    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }
    
    
}
