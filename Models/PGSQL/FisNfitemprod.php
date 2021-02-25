<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FisNfitemprod extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "fis_nfitemprod";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'cd_produto',
        'nr_item',
        'nr_fatura',
        'dt_fatura',
        'vl_unitdesc',
        'qt_faturado',
        'cd_empfat',
        'vl_totalliquido',
        'cd_grupoempresa',
        'vl_unitbruto',
        'vl_unitliquido',
        'u_version',
        'cd_compvend',
        'cd_promocao',
        'vl_totalbruto',
        'cd_operador',
        'vl_totaldesc',
        'dt_cadastro'
    ];
}
