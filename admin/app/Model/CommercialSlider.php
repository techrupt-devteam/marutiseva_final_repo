<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class CommercialSlider extends Model
{
    protected $table 	   = "commercial_slider";
    protected $primaryKey  = "slider_id";
    protected $fillable = [
		"slider_name",
		"link",
		"slider_img",
		"slider_up_text",
		"slider_no",
		"slider_small_text",
		"order_no"
	];

}
