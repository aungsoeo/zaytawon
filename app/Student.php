<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = array(
    			'name',
    			'father_name',
    			'father_nrc',
    			'passed_school',
    			'roll_no',
    			'phone_no',    			
    			'gender',
    			'email',
    			'address'
    	);

    protected $table = 'student_registration_form';

    
}
