<?php

use App\Models\User;
use App\Jobs\SendMail;
use App\Events\UserWasBannned;
use Illuminate\Support\Facades\Route;
use App\Notifications\MailNotification;
use Illuminate\Foundation\Bus\DispatchesJobs;

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

// Route::get('/', ['middleware' => 'subscribed', function () {
//     event(new UserWasBannned(new App\Models\User()));
//     return view('welcome');
// }]);




Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    $user = User::first();
    Auth::login($user);
    return redirect('/');
});

Route::get('/send', function () {
    dispatch(new SendMail(auth()->user()));
    dd('email sent!');
});

Route::get('/test', function () {
    echo 'yey';
})->middleware('subscribed:yearly', 'sample');
