<?php

namespace App\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PrdProdutoFornec extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_promocaoitemd";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable=[
        'cd_empresa',
        'cd_promocao',
        'cd_produto',
        'vl_anterior',
        'tp_situacao',
        'qt_vendida',
        'u_version',
        'cd_operador',
        'vl_promocao',
        'qt_promovida',
        'dt_cadastro',
    ];
}
