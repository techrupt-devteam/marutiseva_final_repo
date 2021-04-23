<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	
    protected $table 	   = "address";
    protected $primaryKey  = "id";

    protected $fillable = [
		"user_id",
		"address",
		"state",
		"city",
		"pincode",
		"created_at",
		"updated_at",
    ];
}
