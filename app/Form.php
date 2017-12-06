<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = array(
    		'degree',
            'f_name',
            'thatharnar_no',
            'birth_date',
            'age',
            'war_taw',
            'school_address',
            'phone',
            'email',
            'passed_date'

    	);

    protected $table = 'monk_registration_form';

    
}
