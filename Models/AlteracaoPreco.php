<?php

namespace Daju\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlteracaoPreco extends Model
{
    use HasFactory;

    public $table = "db_precificacao_alteracao_preco";

    protected $fillable = [
        'cd_empresa',
        'dt_cadastro',
        'dt_movimento',
        'cd_produto',
        'vl_anterior',
        'vl_atualizado',
        'vl_promocao',
        'ds_usuario'
    ];
}
