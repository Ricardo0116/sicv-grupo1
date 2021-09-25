<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'idproductos';
    protected $fillable = [
        'nombre',
        'gramos',
        'precio',
        'idvendores',
    ];
    public function nombry(){
        return $this->belongsTo('App\Models\Persona', 'idvendores');
    }
}
