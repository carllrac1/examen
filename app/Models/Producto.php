<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount_percentage',
        'raiting',
        'stock',
        'brand',
        'category',
        'thumbnail'
    ];

    public function imagenes()
    {
        return $this->hasMany(ProductosImagen::class);
    }
}
