<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $table = 'ordendecompras';
    protected $fillable =[
        'estadoE',
        'cantidad',
        'tipo',
        'nombre',
        'estadoP',
        'proveedor',
        'precio',
        'total'
    ];
    public $timestamps = false;
}
