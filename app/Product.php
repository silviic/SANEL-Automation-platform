<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function product() 
    {
        return $this->belongsTo('App\Order');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    
    public function vat()
    {
        return $this->belongsTo('App\Vat');
    }
    
}
