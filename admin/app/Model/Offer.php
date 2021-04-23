<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table 	   = "offer_banner";
    protected $primaryKey  = "id";

    protected $fillable = [
		"offer_banner_image"
    ];
}
