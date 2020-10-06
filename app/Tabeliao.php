<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Certidao;
use Appp\Contrato;

class Tabeliao extends Model
{

    protected $fillable = [
        'nome'
    ];

    public function certidao()
    {
        return $this->hasMany(Certidao::class);
    }

    public function contrato()
    {
        return $this->hasMany(Contrato::class);
    }
}
