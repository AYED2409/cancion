<?php

namespace App\Models; //equivale a paquete

use Illuminate\Database\Eloquent\Factories\HasFactory; //equivalente a import
use Illuminate\Database\Eloquent\Model;

class Bike extends Model //clase que extiende model
{
    use HasFactory; //trait
    
    //tabla del modelo: bikes
    //protected $table = 'bike';
    
    //no voy a usar marcas de tiempo
    public $timestamps = false;
    
    //elemento filable
    protected $fillable = ['name'];
    
}
