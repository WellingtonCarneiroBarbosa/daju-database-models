<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    public $table = "db_produtos_full";
    protected $fillable = [
        'cd_produto',
        'cd_barra',
        'ds_produto',
        'cd_fornecedor',
        'cd_grupo',
        'ds_grupo',
        'status_produto',
        'cd_departamento',
        'origem',
        'cd_promo',
        'ds_promo',
        'valor_promo',
        'dt_ini_promo',
        'dt_fim_promo',
        'ds_situacao',
        'preco_custo',
        'preco_venda'
    ];
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
}
