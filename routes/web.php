<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/user/roles',[

    'middleware'=>'role',function(){


    return 'Middleware';

    }



]);

Route::get('/role',function (){

    $user = Auth::user();

//    return $user->roles->name;

    if($user->isAdmin()){
        echo 'This is an administrator';
    }



});
