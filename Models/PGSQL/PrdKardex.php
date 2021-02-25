<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrdKardex extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_kardex";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'cd_saldo',
        'nr_sequencia',
        'cd_produto',
        'dt_movimento',
        'qt_movimentada',
        'cd_grupoempresa',
        'vl_unitario',
        'nr_lote',
        'in_estorno',
        'cd_empdctoorigem',
        'nr_itemlote',
        'nr_item',
        'u_version',
        'nr_dctoorigem',
        'tp_dctoorigem',
        'cd_operacao',
        'cd_historico',
        'tp_valor',
        'cd_valor',
        'cd_operador',
        'dt_dctoorigem',
        'cd_componente',
        'cd_emplote',
        'dt_cadastro',
    ];
}
