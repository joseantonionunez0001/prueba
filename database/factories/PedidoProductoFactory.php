<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Pedido;
use App\Models\PedidoProducto;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class PedidoProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'pedido_id' => Pedido::all()->random()->id,
        'producto_id' => Producto::all()->random()->id,
        'cantidad' => random_int(1,10),
        ];

    
    }
    
    public function producto(){
        return $this->belongsTo(PedidoProducto::class, 'producto_id', 'id');
    }
}
