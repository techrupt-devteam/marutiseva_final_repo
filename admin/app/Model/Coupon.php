<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
	
    protected $table 	   = "coupon";
    protected $primaryKey  = "coupon_id";

    protected $fillable = [
		"coupon_name",
		"coupon_code",
		"discount",
		"start_date",
		"end_date",
		"coupon_type",
		"multiple_vendor",
		"category",
		"subcategory",
		"times_used",
		"status",
    ];

    public function category_details()
    {
        return $this->hasOne('App\Model\Category', 'id', 'category');
    }
    
    public function subcategory_details()
    {
        return $this->hasOne('App\Model\Subcategory', 'id', 'subcategory');
    }
}
