<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Auth::routes();
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/destination', 'UserController@destination')->name('destination');
    Route::get('/contact', 'UserController@contact')->name('contact');
    Route::get('/pricing', 'UserController@pricing')->name('pricing');
    Route::get('/travel/asia', 'TravelController@asia')->name('asia');
    Route::get('/travel/america', 'TravelController@america')->name('america');
    Route::get('/travel/canada', 'TravelController@canada')->name('canada');
    Route::get('/travel/europe', 'TravelController@europe')->name('europe');
});
Route::get('/register', 'RegistrationController@registrationForm')->name('registration.form');
Route::post('/register', 'RegistrationController@register')->name('registration.post');
Route::get('/user', 'HomeController@home')->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('login', [LoginController::class, 'verify'])->name('login.post');
