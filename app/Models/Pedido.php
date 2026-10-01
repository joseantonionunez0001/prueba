<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = "pedidos";
    
    protected $primaryKey = 'id';

    protected $fillable=[
        'estado',
        'user_id'
    ];

    public function usuario(){
        return $this-> belongsTo(User::class, 'user_id', 'id');
    }

    public function productos(){
        return $this-> hasMany(Producto::class, 'pedido_id', 'id');
    }

    public function pedidos_productos(){
        return $this->hasMany(PedidoProducto::class, 'producto_id', 'id');
    }
}
