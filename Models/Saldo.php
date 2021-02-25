<?php

namespace Daju\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    public $table = "db_saldo";
    protected $fillable = [
        'cd_produto',
        'cd_barra',
        'LJ_01',
        'LJ_02',
        'LJ_03',
        'LJ_04',
        'LJ_05',
        'LJ_06',
        'LJ_07',
        'LJ_08',
        'LJ_09',
        'LJ_10'
    ];
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
}
