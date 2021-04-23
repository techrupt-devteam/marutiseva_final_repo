<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Korestransaction extends Model
{
    protected $table 	   = "custome_transaction";
    protected $primaryKey  = "id";

    protected $fillable = [
		"user_id",
		"order_id",	
		"amount",	
		"payment_method",	
		"check_number",	
		"bank_name",	
		"cheque_image",	
		"neft_utr",	
		"date",	
		"status",	
    ];

    public function user_details()
    {
        return $this->hasOne('App\Model\User', 'id', 'user_id');
    }
}
