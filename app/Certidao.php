<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tabeliao;

class Certidao extends Model
{
    
    protected $fillable = [
        'id_tabeliao', 'tipo_certidao', 'nome_envolvido_1', 'nome_envolvido_2',
        'data_certidao'
    ];

    public function tabeliao()
    {
        return $this->hasOne(Tabeliao::class);
    }
}
