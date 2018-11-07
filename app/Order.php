<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{   
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    
    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
    
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    
    public function suppliers()
    {
        return $this->hasMany('App\Supplier');
    }
    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    
    public function vats()
    {
        return $this->hasMany('App\Vat');
    }
    
}
