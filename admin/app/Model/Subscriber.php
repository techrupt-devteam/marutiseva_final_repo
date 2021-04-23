<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
	use SoftDeletes;
	
    protected $table 	   = "subscriber";
    protected $primaryKey  = "id";

    protected $fillable = [
		"email",
    ];
}
