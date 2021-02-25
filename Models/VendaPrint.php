<?php

namespace Daju\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Produtos que estão em promoção e para resgatar a promoção,
 * você precisa de um print da promoção.
 */
class VendaPrint extends Model
{
    use HasFactory;

    public $table = "db_precificacao_venda_print";

    public $timestamps = false;

    protected $fillable = [
        'cd_produto',
        'dt_transacao',
        'nr_transacao',
        'qt_venda',
        'vl_total_venda',
        'cd_cupom',
        'cd_barracupom'
    ];
}
