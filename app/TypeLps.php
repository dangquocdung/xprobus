<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeLps extends Model
{
    public function lps()
    {

        return $this->hasMany('App\Lps', 'type_id');
    }
}
