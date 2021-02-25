<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FisNF extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "fis_nf";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'nr_fatura',
        'dt_fatura',
        'cd_grupoempresa',
        'dt_impressao',
        'cd_empfat',
        'vl_icms',
        'vl_totalnota',
        'tp_origememissao',
        'dt_transacaoori',
        'nr_pre',
        'nr_transacaoori',
        'tp_operacao',
        'cd_operacao',
        'cd_serie',
        'vl_baseicmssubs',
        'vl_frete',
        'nr_impressao',
        'in_frete',
        'vl_desconto',
        'qt_faturado',
        'tp_situacao',
        'cd_modelonf',
        'tp_moddctofiscal',
        'vl_ipi',
        'cd_condpgto',
        'vl_seguro',
        'pr_desconto',
        'vl_icmssubst',
        'u_version',
        'cd_compvend',
        'cd_usuimpressao',
        'cd_pessoa',
        'dt_saidaentrada',
        'cd_empresaori',
        'vl_baseicms',
        'cd_operador',
        'hr_saida',
        'nr_nf',
        'dt_emissao',
        'vl_despacessor',
        'vl_totalproduto',
        'dt_cadastro',
    ];
}



