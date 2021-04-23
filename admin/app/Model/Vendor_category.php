<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor_category extends Model
{
	use SoftDeletes;
    
    protected $table 	   = "vendor_category";
    protected $primaryKey  = "id";

    protected $fillable = [
		"vendor_category",
		"type",
    ];

    public function _vendor_category_details()
    {
        return $this->hasMany('App\Model\Vendor_category_details', 'vendor_category_id', 'id')->orderBy('id','ASC');
    }
}
