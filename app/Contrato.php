<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tabeliao;

class Contrato extends Model
{

    protected $fillable = [
        'id_tabeliao', 'tipo_contrato', 'nome_envolvido_1', 'nome_envolvido_2',
        'data_contrato', 'valor'
    ];

    public function tabeliao()
    {
        return $this->hasOne(Tabeliao::class);
    }
}
