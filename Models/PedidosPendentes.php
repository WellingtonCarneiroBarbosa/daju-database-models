<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidosPendentes extends Model
{
    use HasFactory;

    public $table = "db_pedidos_pendentes";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'cd_grupo',
        'cd_produto',
        'cd_barra',
        'ds_fornecedor',
        'ds_produto',
        'qt_pendente',
        'qt_pedidos'
    ];
}
