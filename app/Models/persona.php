<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos'
    ];


    //UNO A UNO
    
    public function area()
    {
        return $this->hasOne(area::class);
    }


    // UNO A MUCHOS

    public function comments()
    {
        return $this->hasMany(tareas::class);
    }


    // MUCHOS A MUCHOS CON PIVOTE

    public function deporte() {
        return $this->belongsToMany(deportes::class, deportes_Persona::class);
    }
}
