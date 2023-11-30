<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Establecimiento;

class Entidad extends Model
{
    use HasFactory;
    protected $table = 'entidad';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];

    protected $guarded = [
        
    ];
    
    public function establecimientos(){
        return $this->hasMany(Establecimiento::class, 'entidad_id', 'id');
    }
    
}
