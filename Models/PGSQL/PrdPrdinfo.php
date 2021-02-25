<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrdPrdinfo extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_prdinfo";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'cd_produto',
        'cd_grupoempresa',
        'cd_desconto',
        'in_servico',
        'qt_estoquereg',
        'in_prodacabado',
        'in_patrimonio',
        'in_inativo',
        'qt_estoquemin',
        'tp_lote',
        'tp_patrimonio',
        'in_prodpropria',
        'nr_diaressupri',
        'in_retimposto',
        'pr_descmax',
        'cd_operador',
        'nr_diaseguranca',
        'in_serial',
        'tp_produto',
        'tp_equipamento',
        'tp_servico',
        'tp_situacao',
        'dt_comercioini',
        'tp_terceiro',
        'qt_estoquemax',
        'tp_cor',
        'nr_parcelamax',
        'in_matprima',
        'tp_serial',
        'tp_inspecao',
        'u_version',
        'in_matconsumo',
        'in_terceiro',
        'in_cofins',
        'in_equipamento',
        'in_fracionado',
        'qt_minvenda',
        'in_pis',
        'qt_maxvenda',
        'dt_comerciofim',
        'dt_cadastro'
    ];
}
