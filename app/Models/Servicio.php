<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicio';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [
        
    ];

    public function prestacionesServicio(){
        return $this->hasMany(PrestacionServicio::class, 'servicioprestado_id', 'id');
    }
}
