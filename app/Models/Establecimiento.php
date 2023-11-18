<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimiento';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];

    protected $guarded = [
        
    ];
    
    public function prestacionesServicio(){
        return $this->hasMany(PrestacionServicio::class, 'establecimiento_id', 'id');
    }
    
}
