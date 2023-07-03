<?php

use Illuminate\Support\Facades\Route;
use Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faker', function () {
    $faker = Faker\Factory::create('ja_JP');
    $dummyData = [
        'name' => $faker->name,
        'password' => $faker->password,
        'country' => $faker->country,
        'prefecture' => $faker->prefecture,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'address' => $faker->address,
        'streetAddress' => $faker->streetAddress,
        'phoneNumber' => $faker->phoneNumber,
        'email' => $faker->email,
        'safeEmail' => $faker->safeEmail,   // (実在しないアドレスのため処理とかで使っても安心)
        'company' => $faker->company,
        'iso8601' => $faker->iso8601($max = 'now'),
        'dateTimeBetween' => $faker->dateTimeBetween($startDate = '-110 years', $endDate = 'now')->format('Y年m月d日'),
        'numberBetween' => $faker->numberBetween($min = 100, $max = 200),
        'title' => $faker->title,
        'realText' => $faker->realText($maxNbChars = 50, $indexSize = 2),
        'randomNumber' => $faker->randomNumber($nbDigits = 5),
        'randomFloat' => $faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 5),
        'randomElement' => $faker->randomElement($array = ['男性', '女性']),
        'lexify' => $faker->lexify($string = '??????'),
        'hexcolor' => $faker->hexcolor,
        'ipv4' => $faker->ipv4,
        'url' => $faker->url,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
        'userAgent' => $faker->userAgent,
        'creditCardType' => $faker->creditCardType,
        'creditCardNumber' => $faker->creditCardNumber,
        'creditCardExpirationDate' => $faker->creditCardExpirationDate,
        'isbn13' => $faker->isbn13,
        'isbn10' => $faker->isbn10
    ];
    echo "<pre>";
    var_dump($dummyData);
    echo "</pre>";
    exit();
});

Route::get('/faker/User', function () {
    // モデル生成のみ。データベースには保存しない。
    $user = User::factory()->make();
    echo "<pre>";
    var_dump($user->name);
    echo "</pre>";
    exit();
});