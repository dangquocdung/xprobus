<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebmasterLps extends Model
{
    //
    public function lps()
    {

        return $this->hasMany('App\Lps', 'section_id');
    }
}
