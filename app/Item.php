<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
      return $this->belongsTo('App\Category');
    }
    public function shipping()
    {
      return $this->belongsTo('App\Shipping');
    }
    public function currency()
    {
       return $this->belongsTo('App\Currency');
    } 
}
