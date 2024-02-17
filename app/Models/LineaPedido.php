<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LineaPedido extends Authenticatable
{
    use HasFactory, Notifiable;

    public function pedido() {
        return $this->belongsTo(Pedido::class, 'idPedido', 'id');
    }
}
