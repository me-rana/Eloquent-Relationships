<?php

use App\Models\Shop;

use App\Models\User;
use App\Models\Product;
use App\Models\Student;
use App\Models\UserInfo;
use App\Models\eClassRoom;
use Illuminate\Support\Facades\Route;


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
    $students = Student::all();
    $classes = eClassRoom::with('getStudent')->get();
    return view('welcome',compact('students','classes'));
})->name('Home');

Route::get('/hasOne', function () {
    $users = User::all();
    $userinfos = UserInfo::all();
    return view('hasone',compact('users','userinfos'));
});

Route::get('/hasMany', function (){
    $shops = Shop::all();
    $products =  Product::all();
    return view('hasmany', ['shops' => $shops, 'products' => $products]);
})->name('Has Many to Has Many');
