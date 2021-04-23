<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
	
    protected $table 	   = "order_details";
    protected $primaryKey  = "id";

    protected $fillable = [
		"order_id",
		"product_id",
        "varient_id",
        "bulk_id",
		"bulk_status",
		"qty",
		"gst_pecentage",
		"gst_amount",
		"price",
        "subtotal",
        "grand_total",
		"user_id",
		"order_place_date",
		"created_at",
		"updated_at",


    ];

    public function product_details()
    {
        return $this->hasOne('App\Model\Product', 'id', 'product_id');
    }

    public function varient_details()
    {
        return $this->hasOne('App\Model\Varient', 'id', 'varient_id');
    }

    public function bulk_details()
    {
        return $this->hasOne('App\Model\Bulkproduct', 'id', 'bulk_id');
    }
}
