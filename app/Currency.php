<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function item()
    {
    	return $this->hasMany('App\Item');
    }
}
