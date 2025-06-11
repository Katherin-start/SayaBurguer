<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio_promocional',
        'imagen_url',
        'activa',
    ];

    public function detalles()
    {
        return $this->hasMany(PromocionDetalle::class, 'promocion_id');
    }
}
