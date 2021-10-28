<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deportes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_deporte',
    ];

    // MUCHOS A MUCHOS CON PIVOTE

    public function personas() {
        return $this->belongsToMany(persona::class, deportes_Persona::class);
    }
}
