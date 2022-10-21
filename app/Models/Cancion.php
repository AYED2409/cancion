<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
     use HasFactory;
    protected $table = 'cancion';
    
    //no voy a usar marcas de tiempo
    public $timestamps = false;
    
    //elemento filable
    protected $fillable = ['titulo','interprete','autor','duracion','genero','album','orden','fechapublicacion'];
    
}
