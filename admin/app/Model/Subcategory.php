<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
	use SoftDeletes;
    
    protected $table 	   = "subcategory";
    protected $primaryKey  = "id";

    protected $fillable = [
		"category_id",
		"subcategory_name",
        "subcategory_image"
    ];

    public function category_details()
    {
        return $this->hasOne('App\Model\Category', 'id', 'category_id');
    }
}
