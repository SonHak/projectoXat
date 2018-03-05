<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    //

    public function usuario()
    {
        return $this->belongsTo('App\User','id_user');
    }
}
