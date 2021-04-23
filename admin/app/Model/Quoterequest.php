<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quoterequest extends Model
{
	
    protected $table 	   = "quotation_request";
    protected $primaryKey  = "id";

    protected $fillable = [
		"user_id",
		"product_id",
		"qty",
		"request_date",
        "expected_delivery",
		"varient_id",
        "payment_mode",
        "reject_attempt",
		"expiry_date",
		"status",
		"created_at",
		"updated_at",
    ];

    public function user_details()
    {
        return $this->hasOne('App\Model\User', 'id', 'user_id');
    }

    public function product_details()
    {
        return $this->hasOne('App\Model\Product', 'id', 'product_id');
    }

    public function attempt_details()
    {
        return $this->hasOne('App\Model\Quoterequestattempt', 'quotation_request_id', 'id')->orderBy('quotation_request_attempt.id','DESC');
    }

    public function varient_details()
    {
        return $this->hasOne('App\Model\Varient', 'id', 'varient_id');
    }
}
