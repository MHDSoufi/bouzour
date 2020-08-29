<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public function promo()
    {
        return $this->hasMany('App\Model\Promo');
    }
}
