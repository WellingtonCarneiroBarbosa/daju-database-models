<?php

namespace App\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PrdProdutoClas extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_produtoclas";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable=[
        'cd_tipoclas',
        'cd_produto',
        'cd_classificacao',
        'cd_operador',
        'dt_cadastro',
    ];
}
