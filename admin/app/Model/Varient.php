<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Varient extends Model
{
	//use SoftDeletes;
    
    protected $table 	   = "varient";
    protected $primaryKey  = "id";

    protected $fillable = [
		"product_id",
        "varient_name",
        "sku",
        "price",
        "offer_price",
		"min_quotation",
        "is_visible",
        "created_at",
        "updated_at",
    ];

}
