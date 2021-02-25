<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrdCodigobarra extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_codigobarra";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_barraprd',
        'cd_empresa',
        'nr_op',
        'dt_inclusao',
        'u_version',
        'in_padrao',
        'cd_pedidocmp',
        'cd_operadorinc',
        'nr_ciclo',
        'tp_barra',
        'nr_sequencia',
        'cd_empresacmp',
        'cd_operador',
        'cd_produto',
        'qt_embalagem',
        'ds_identificador',
        'dt_cadastro'
    ];
}
