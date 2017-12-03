<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('student_registration_form')->insert([
	    	[
	            'name' => 'mgmg',
	            'father_name' => 'U Mya',
	            'father_nrc' => '12/maapa(N)12345',
	            'passed_school'=>'Mandalay',
	            'roll_no' => '2',
	            'phone_no'=>'0912345678',
	            'gender'=>'male',
	            'email' => 'umya@gmail.com',
	            'address' => '',
	        ]

	    ]);
    }
}
