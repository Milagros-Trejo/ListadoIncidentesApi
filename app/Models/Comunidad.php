<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incidente;

class Comunidad extends Model
{
    use HasFactory;
    protected $table = 'comunidad';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [
        
    ];

    public function incidentes(){
        return $this->hasMany(Incidente::class, 'comunidad_id', 'id');
    }

}

