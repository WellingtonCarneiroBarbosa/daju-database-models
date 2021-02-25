<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PrdProdutoFornec extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_produtofornec";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable=[
        'cd_produto',
        'cd_fornecedor',
        'u_version',
        'cd_operador',
        'cd_original',
        'pr_markup',
        'in_padrao',
        'dt_cadastro',
    ];
}


