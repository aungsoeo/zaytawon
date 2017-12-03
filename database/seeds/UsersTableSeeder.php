<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Edited by HeinHtetAung for admin_user_middleware
    	DB::table('users')->insert([
	    	[
	            'name' => 'Admin',
	            'email' => 'admin@gmail.com',
	            'password' => bcrypt('admin'),
	            'role' => 1
	        ],
	        [
	            'name' => 'Customer',
	            'email' => 'customer@gmail.com',
	            'password' => bcrypt('customer'),
	            'role' => 0
	        ]
	    ]);
    }
}
