<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class NexaSlider extends Model
{
    protected $table 	   = "nexa_slider";
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
