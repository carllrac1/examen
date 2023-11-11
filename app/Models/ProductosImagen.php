<?php

namespace App\Models;

use Database\Factories\ProductosImagenFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosImagen extends Model
{
    use HasFactory;
    protected $table = 'productos_imagenes';
    protected $factory = ProductosImagenFactory::class;

    protected $fillable = [
        'producto_id',
        'url'
    ];

    protected static function newFactory()
    {
        return ProductosImagenFactory::new();
    }

    public function productos()
    {
        return $this->belongsTo(Producto::class);
    }
}
