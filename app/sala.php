<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class sala extends Model
{
    use Notifiable;

    public $fillable = [
      'idSala','NombreSala',
    ];

    public function registros(){

        return $this->hasMany(Registro::class);
    }

}
