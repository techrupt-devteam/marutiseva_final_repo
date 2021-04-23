<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quoterequestattempt extends Model
{
	
    protected $table 	   = "quotation_request_attempt";
    protected $primaryKey  = "id";

    protected $fillable = [
		"quotation_request_id",
		"product_price",
		"subtotal",
		"discount",
		"sgst_amount",
		"cgst_amount",
		"grandtotal",
		"qty",
		"quote_expiry_date",
		"quote_send_date",
		"created_at",
		"updated_by",
    ];
}
