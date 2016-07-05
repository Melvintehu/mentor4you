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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Candidate::class, function (Faker\Generator $faker) {

	$choices = [
		'mentor',
		'jongere'
	];

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'telephone_number' => $faker->e164PhoneNumber(false),
        'email_address' => $faker->email(),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'message' => $faker->sentence(50),
        'choices' => $choices[rand(0,1)],
    ];
});


$factory->define(App\Mentor::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'description' => $faker->sentence(50),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});



$factory->define(App\News::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(20),
        'body' => $faker->sentence(50),
        'author' => $faker->firstName . ' ' . $faker->lastName ,
        'publish_date' => $faker->date($format = 'Y-m-d', $min = 'now'),
        'occurence_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});



$factory->define(App\Partner::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company(20),
        'description' => $faker->sentence(50),  
        'date_started' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});


$factory->define(App\TeamMember::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'description' => $faker->sentence(50),
        'role' => $faker->jobTitle(),
    ];
});


$factory->define(App\Youth::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'description' => $faker->sentence(50),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});