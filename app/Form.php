<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = array(
    			'name',
    			'father_name',
    			'nrc',
    			'phone_no', 
                'address',
                'organization',   			
    			'gender',
    			'monastery_name',
                'is_party',
                'education'

    	);

    protected $table = 'registration_form';

    
}
