<?php

namespace App\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PrdValor extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_valor";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_empresa',
        'cd_valor',
        'cd_produto',
        'tp_valor',
        'u_version',
        'cd_operador',
        'in_basemarkup',
        'cd_grupoempresa',
        'vl_produto',
        'dt_cadastro',
    ];
}
