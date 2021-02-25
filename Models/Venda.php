<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public $table = "db_venda";
    protected $fillable = [
        'id',
        'cd_empresa',
        'dt_transacao',
        'hr_saida',
        'cd_produto',
        'custo',
        'vl_liquido', 'qt_venda',
        'vl_total_venda',
        'cd_operacao',
        'nr_nf',
        'nr_transacao',
        'nr_item',
        'cd_promocao',
        'cd_vendedor',
        'cd_chave'
    ];
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
}
