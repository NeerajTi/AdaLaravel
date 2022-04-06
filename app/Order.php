<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'orderId', 'first_name', 'last_name','email','address','address2','zipcode','country','state','total'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function orderitems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
