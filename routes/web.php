<?php

use Illuminate\Support\Facades\Route;

use App\Models\eClassRoom;
use App\Models\Student;
use App\Models\User;
use App\Models\UserInfo;


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