<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descontos extends Model
{
    use HasFactory;

    public $table = "db_precificacao_descontos";

    public $timestamps = false;

    protected $fillable = [
        'cd_empresa',
        'nr_transacao',
        'nr_item',
        'dt_transacao',
        'hr_cadtra',
        'cd_produto',
        'vl_total_bruto',
        'vl_total_liquido',
        'vl_desconto',
        'ds_desconto'
    ];

    public static function getDtTransacao(string $date, string $operator=">=") {
        return static::where('dt_transacao', $operator, $date);
    }
}
