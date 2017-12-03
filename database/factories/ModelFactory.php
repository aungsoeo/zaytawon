<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'role'=>'0',
    ];
});

// open in terminal and run php artisan tinker and run
//->>factory(App\Model\Post::class,100)->create();

$factory->define(App\Model\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'main_category_id'=>$faker->numberBetween(1,10),
        'sub_category_id'=>$faker->numberBetween(1,20),
        'short_description'=>$faker->sentence(),
        'feature_photo' => 'http://loremflickr.com/400/300?random='.rand(1, 100),
        'detail_photo'=>'http://loremflickr.com/400/300?random='.rand(1, 100),
        'detail_description' => $faker->paragraph(2),
		'custom_field1'=>$faker->sentence(), 
		'custom_field2'=>$faker->sentence(), 
		'custom_field3'=>$faker->sentence(), 
		'custom_field4'=>$faker->sentence(), 
		'custom_field5'=>$faker->sentence(),
    ];
});

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'comment' =>$faker->sentence(),
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'father_name'=>$faker->name,
        'father_nrc'=>'9/PaMaNa(N)123456',
        'email' => $faker->unique()->safeEmail,
        'address' =>$faker->address,
        'phone_no' => $faker->phoneNumber,
        'gender' => 'male',
        'passed_school'=>$faker->name,
        'roll_no'=>$faker->numberBetween(1,100),
    ];
});