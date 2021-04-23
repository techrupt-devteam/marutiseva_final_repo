<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bulkproduct extends Model
{
    protected $table 	   = "bulk_product";
    protected $primaryKey  = "id";

    protected $fillable = [
		"product_id",
		"qty",	
		"no_of_cartons",	
		"discount",	
		"price",	
		"basic_price",	
		"offer_price",	
		"total_price",	
		"created_at",	
		"updated_at",	
    ];
}
