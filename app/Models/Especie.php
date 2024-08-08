<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'periodo', 'descripcion'];

    // Relación con Atraccion
    public function atracciones()
    {
        return $this->hasMany(Atraccion::class, 'id_especie');
    }
}
