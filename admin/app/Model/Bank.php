<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table 	   = "bank_details";
    protected $primaryKey  = "id";

    protected $fillable = [
		"branch_name",
		"ifsc_code",	
		"account_no",	
		"bank_name",	
		"account_holder",	
    ];
}
