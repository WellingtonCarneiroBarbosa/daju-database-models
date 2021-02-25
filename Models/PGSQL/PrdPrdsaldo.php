<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrdPrdsaldo extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_prdsaldo";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'cd_saldo',
        'dt_saldo',
        'cd_produto',
        'u_version',
        'cd_grupoempresa',
        'qt_saldo',
        'cd_operador',
        'dt_cadastro'
    ];
}
