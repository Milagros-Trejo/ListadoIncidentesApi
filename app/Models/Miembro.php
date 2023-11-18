<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incidente;

class Miembro extends Model
{
    use HasFactory;
    protected $table = 'miembro';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'nicknameMiembro'
    ];

    protected $guarded = [
        
    ];

    public function incidentesAbiertos(){
        return $this->hasMany(Incidente::class, 'miembro_id', 'id');
    }
}
