<?php

namespace App\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrdProduto extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_produto";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_produto',
        'ds_produto',
        'cd_cst',
        'cd_tipi',
        'cd_nbm',
        'u_version',
        'cd_operador',
        'qt_peso',
        'ds_imagem',
        'cd_especie',
        'dt_cadastro'
    ];
}
