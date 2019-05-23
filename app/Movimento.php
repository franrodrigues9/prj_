<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    protected $fillable = [
        'data', 'hora_descolagem', 'hora_aterragem', 'num_diario', 'num_servico', 'natureza', 'num_aterragens'
        , 'num_descolagens', 'num_pessoas', 'conta_horas_inicio', 'conta_horas_fim', 'tempo_voo'
        , 'preco_voo', 'modo_pagamento', 'num_recibo', 'observacoes', 'confirmado', 'tipo_instrucao',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function aeronave()
    {
        return $this->hasOne('App\Aeronave');
    }

    public function piloto()
    {
        return $this->hasOne('App\User');
    }

    public function aerodromo_partida()
    {
        return $this->hasOne('App\Aerodromo');
    }

    public function aerodromo_chegada()
    {
        return $this->hasOne('App\Aerodromo');
    }

    public function tipo_licenca_piloto()
    {
        return $this->hasOne('App\TipoLicenca');
    }









}
