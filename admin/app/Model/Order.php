<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	
    protected $table 	   = "order";
    protected $primaryKey  = "id";

    protected $fillable = [
		"user_id",
		"subtotal",
		"grandtotal",
		"discount",
		"expected_delivery",
        "payment_mode",
        "order_place_date",
        "payment_status",
        "address_id",
        "awb",
        "status",
		"cancel_reason",
		"created_at",
		"updated_at",
    ];

    public function user_details()
    {
        return $this->hasOne('App\Model\User', 'id', 'user_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\Model\Orderdetails', 'order_id','id');
    }

    public function address_details()
    {
        return $this->hasOne('App\Model\Address', 'id','address_id');
    }
}
