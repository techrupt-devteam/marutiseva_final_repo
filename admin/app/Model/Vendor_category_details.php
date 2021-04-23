<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendor_category_details extends Model
{
	
    protected $table 	   = "vendor_category_details";
    protected $primaryKey  = "id";

    protected $fillable = [
		"vendor_category_id",
		"category_id",
		"subcategory_id",
		"discount_parcent",
    ];

    public function category_details()
    {
        return $this->hasOne('App\Model\Category', 'id', 'category_id');
    }

    public function subcategory_details()
    {
        return $this->hasOne('App\Model\Subcategory', 'id', 'subcategory_id');
    }

}
