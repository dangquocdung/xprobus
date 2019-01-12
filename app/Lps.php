<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lps extends Model
{
    //Relation to Users
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    //Relation to Users
    public function edituser()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

    //
    public function webmasterLps()
    {

        return $this->belongsTo('App\WebmasterLps', 'section_id');
    }

    public function typeLps()
    {

        return $this->belongsTo('App\TypeLps', 'type_id');
    }
    
}
