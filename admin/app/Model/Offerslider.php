<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Offerslider extends Model
{
    protected $table 	   = "offerslider";
    protected $primaryKey  = "slider_id";
    protected $fillable = [
		"slider_name",
		"link",
		"slider_img",
		"order_no"
	];

}
