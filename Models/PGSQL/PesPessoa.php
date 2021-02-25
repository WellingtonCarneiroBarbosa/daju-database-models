<?php

namespace App\Models\PGSQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesPessoa extends Model
{
    use HasFactory;

    protected $connection = 'base_vcenter';

    public $table = "pes_pessoa";

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'cd_pessoa',
        'nr_endcom',
        'in_inativo',
        'nr_seqemail',
        'nr_endcob',
        'cd_empresacad',
        'nm_pessoa',
        'dt_inclusao',
        'u_version',
        'cd_coligador',
        'in_contribuinte',
        'nr_seqend',
        'in_privado',
        'nr_endres',
        'cd_operadorcad',
        'nr_endent',
        'cd_operador',
        'ds_homepage',
        'tp_pessoa',
        'nr_seqfone',
        'nr_cpfcnpj',
        'nr_endcor',
        'dt_cadastro'
    ];
}
