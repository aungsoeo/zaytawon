<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = array(
    			'name',
    			'f_name',
                'm_name',
                'race',
                'reg',
                'address',
    			'birth_date',
    			'nrc',
    			'passed_date_school',
    			'is_attend',    			
    			'phone_no'
    	);

    protected $table = 'student_registration_form';

    
}
