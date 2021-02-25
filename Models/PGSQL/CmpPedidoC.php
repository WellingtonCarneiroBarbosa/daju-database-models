<?php

namespace App\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmpPedidoC extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "cmp_pedidoc";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'cd_pedido',
        'cd_grupoempresa',
        'vl_totalneg',
        'cd_transport',
        'cd_fornecedor',
        'dt_inclusao',
        'dt_ultentrega',
        'tp_formapgto',
        'nr_pedidofornec',
        'vl_total',
        'tp_formapgtopadrao',
        'cd_transredesp',
        'cd_comprador',
        'cd_condpgtopadrao',
        'tp_situacao',
        'dt_basepgto',
        'u_version',
        'dt_limentrega',
        'cd_condpgto',
        'cd_operacao',
        'pr_desconto',
        'cd_empestoque',
        'cd_operador',
        'dt_preventrega',
        'tp_frete',
        'dt_cadastro',
    ];
}





