<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pedido extends Authenticatable
{
    use HasFactory, Notifiable;

    public function lineasPedido() {
        return $this->hasMany(LineaPedido::class, 'idPedido', 'id');
    }
}
