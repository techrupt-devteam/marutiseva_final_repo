<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	
    protected $table 	   = "product_cat";
    protected $primaryKey  = "id";

    protected $fillable = [
    	"car",
    	"menu_image",
    	"car_image",
    	"price",
    	"offer_price",
    	"link",
		"created_at",
		"updated_at",
    ];
    
  
}
