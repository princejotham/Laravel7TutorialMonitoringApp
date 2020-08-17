<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Branch;
use App\Member;
use App\Teacher;
use App\LevelTest;
use App\ClassDetails;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('qwerty123'),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'branch' => $faker->company,
    ];
});

function autoIncrement()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}
$autoIncrement = autoIncrement();
$factory->define(Member::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    $english = $faker->name;
    $name = $faker->unique()->name;
    $username = explode(' ',trim($name));
    $userlowercase = strtolower($username[1] . $autoIncrement->current());
    $phone = $faker->phoneNumber;
    $password = bcrypt($userlowercase);
    $skypeid = 'sid' . $userlowercase;

    return [
        'branch_id' => rand(1, 5),
        'username' => $userlowercase,
        'password' => $password,
        'koreanname' => $english,
        'englishname' => $name,
        'email' => $faker->unique()->safeEmail,
        'phoneno' => $faker->phoneNumber,
        'skypeid' => $skypeid,
        'member_type' => $faker->randomElement(['Member', 'Non-Member']),
        'status' => $faker->randomElement(['In-Class', 'Finish-Class', 'Not In-Class']),
    ];
});

$factory->define(Teacher::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    $name = $faker->name;
    $username = explode(' ',trim($name));
    $userlowercase = strtolower($username[0] . $autoIncrement->current());
    $password = bcrypt($userlowercase);

    return [
        'username' => $userlowercase,
        'password' => $password,
        'name' => $name,
        'workinghours' => $faker->randomElement(['7am~12pm', '8am~1pm', '9am~2pm', '10am~3pm', '11am~5pm', '12am~6pm']),
        'position' => $faker->randomElement(['Manager', 'Leader', 'Tutor', 'Classification']),
        'gender' => $faker->randomElement(['Male', 'Female']),
        'status' => $faker->randomElement(['Approved', 'Not Approved']),
    ];
});

$factory->define(LevelTest::class, function (Faker $faker) {
    $applicationdate = $faker->dateTimeBetween($sd = "-2 month", $ed = "now", $tz = '+00:00');
    $scheduledate = $faker->dateTimeBetween($sd = "-1 month", $ed = "1 month", $tz = '+00:00');

    return [
        'member_id' => App\Member::inRandomOrder()->first()->id,
        'teacher_id' => App\Teacher::inRandomOrder()->first()->id,
        'applicationdate' => $applicationdate,
        'scheduledate' => $scheduledate,
        'processstatus' => $faker->randomElement(['Not in Process', 'Proceed', 'Absence']),
        'evaluation' => $faker->text($mx = 200),
    ];
});

$factory->define(ClassDetails::class, function (Faker $faker) {
    $startdate = $faker->dateTimeBetween($sd = "1 month", $ed = "now", $tz = '+00:00');
    $enddate = $faker->dateTimeBetween($sd = "1 month", $ed = "1 month", $tz = '+00:00');
    $remainingCount = $enddate->diff($startdate)->format("%a");
    return [
        'member_id' => App\Member::inRandomOrder()->first()->id,
        'teacher_id' => App\Teacher::inRandomOrder()->first()->id,
        'classtime' =>  $faker->randomElement(['7am~12pm', '8am~1pm', '9am~2pm', '10am~3pm', '11am~5pm', '12am~6pm']),
        'startdate' => $startdate,
        'enddate' => $enddate,
        'payment' => '57000',
        'classstatus' => $faker->randomElement(['In-Class', 'Finish-Class', 'Not In-Class']),
        'remainingcount' => $remainingCount,
    ];
});