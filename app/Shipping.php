<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public function item()
    {
    	return $this->hasMany('App\Item');
    }
}
