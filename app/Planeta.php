<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planeta extends Model
{
    protected $fillable = ['desc1', 'desc2', 'desc3', 'desc4', 'planeta'];
    protected $guarded = ['id'];
    protected $table = 'deepspace.planetas';
}
