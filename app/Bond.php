<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bond extends Model
{
    //
	protected $fillable=[
        'customer_id',
        'bondtype',
        'description',
        'investedvalue',
        'percentage',

    ];

	 public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
