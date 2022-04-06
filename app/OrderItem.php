<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OrderItem extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 'price', 'quantity','image'
    ];
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
