<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $fillable = ['desc_pergunta', 'resposta1', 'resposta2', 'resposta3', 'resposta4'];
    protected $guarded = ['id'];
    protected $table = 'deepspace.perguntas';
}
