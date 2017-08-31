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

use DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser;
use DataInsight\DataSystem\EventModel\Attribute;
use DataInsight\DataSystem\EventModel\AttributeType;
use DataInsight\DataSystem\EventModel\EventType;

$factory->define(DataInsight\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(AttributeType::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'label' => $faker->word,
        'description' => $faker->sentence,
        'extra' => '{}'
    ];
});

$factory->define(EventType::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'label' => $faker->word,
        'description' => $faker->sentence,
        'extra' => '{}'
    ];
});

$factory->define(TargetUser::class, function(Faker\Generator $faker) {
    return [
        'distinct_id' => $faker->uuid,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'name' => $faker->name,
        'birth_year' => $faker->year,
        'gender' => $faker->boolean,
        'user_type' => 'web',
        'is_member' => array_random([0, 1]),
        'province' => '湖北',
        'city' => array_random(['武汉', '宜昌']),
        'signup_time' => $faker->dateTimeThisYear(),
        'register_channel' => array_random(['ohmate', 'medsci'])
    ];
});

$factory->define(\DataInsight\DataSystem\EventModel\Event::class, function(Faker\Generator $faker) {
    return [
        'target_user_id' => random_int(1, 10),
        'type_id' => 1,
        'description' => $faker->sentence,
        'extra' => '{}',
        'created_at' => $faker->dateTimeThisMonth()
    ];
});

$factory->define(Attribute::class, function(Faker\Generator $faker) {
    return [
        'description' => '',
        'extra' => '{}'
    ];
});

$factory->state(Attribute::class, 'ip', function(Faker\Generator $faker) {
    return [
        'type_id' => 1,
        'value' => $faker->ipv4,
    ];
});

$factory->state(Attribute::class, 'agent', function(Faker\Generator $faker) {
    return [
        'type_id' => 2,
        'value' => $faker->userAgent,
    ];
});

$factory->state(Attribute::class, 'element_id', function(Faker\Generator $faker) {
    return [
        'type_id' => 3,
        'value' => 'anchor_' . random_int(1, 10),
    ];
});
