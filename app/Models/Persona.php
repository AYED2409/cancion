<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    
    //no voy a usar marcas de tiempo
    public $timestamps = false;
    
    //elemento filable
    protected $fillable = ['dni','nombre','apellidos','telefono'];
}
