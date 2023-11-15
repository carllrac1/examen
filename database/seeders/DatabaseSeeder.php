<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $json = file_get_contents(public_path('products.json'));

        $productos = json_decode($json, true);
        
        foreach ($productos['products'] as $key => $producto) {
            $productoModel = \App\Models\Producto::factory()->create([
                'description' => $producto['description'],
                'price' => $producto['price'],
                'discount_percentage' => $producto['discountPercentage'],
                'rating' => $producto['rating'],
                'stock' => $producto['stock'],
                'brand' => $producto['brand'],
                'category' => $producto['category'],
                'thumbnail' => $producto['thumbnail'],
                'title' => $producto['title'],
            ]);

            foreach ($producto['images'] as $imagen) {
                \App\Models\ProductosImagen::factory()->create([
                    'producto_id' => $productoModel->id,
                    'url' => $imagen,
                ]);
            }
        }
    }
}
