<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimentacaoImposto extends Model
{
    use HasFactory;

    public $table = "tb_movimentacao_imposto";

    protected $primaryKey = "id_movimentacao_imposto";

    protected $fillable = [
        'cd_produto',
        'qt_movimentada',
        'vl_unitario',
        'dt_cadastro',
        'aliquota_icms',
        'valor_icms',
        'valor_total_icms',
        'aliquota_ipi',
        'valor_ipi',
        'valor_total_ipi',
        'aliquota_pis',
        'valor_pis',
        'valor_total_pis',
        'aliquota_cofins',
        'valor_cofins',
        'valor_total_cofins',
        'aliquota_mva',
        'valor_mva',
        'valor_total_mva',
        'nr_nf',
        'tipo_frete'
    ];
}
