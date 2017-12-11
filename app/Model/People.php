<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    protected $table = 'people';

    protected $fillable = [
		    	'title',
				'place',
				'date',
				'c_name',
				'c_address',
				'phone',
				'position'
    ];

}
