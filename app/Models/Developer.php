<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Developer extends Model
{
    protected $fillable = [
      'nome', 'sexo', 'idade', 'hobby', 'datanascimento',
    ];
}
