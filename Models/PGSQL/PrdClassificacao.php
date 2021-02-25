<?php

namespace Daju\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PrdClassificacao extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "prd_classificacao";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable=[
        'cd_tipoclas',
        'cd_classificacao',
        'u_version',
        'ds_classificacao',
        'cd_operador'
    ];
}
