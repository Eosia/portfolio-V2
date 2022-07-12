<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Client\Request;
use Spatie\Honeypot\ProtectAgainstSpam;
// import controllers
use App\Http\Controllers\{
    HomeController,
    SkillController,
    SiteController,
    ContactController
};

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

//routes GET ---------------------------------------------------------->

//routes POST --------------------------------------------------------->
//route de la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('throttle:home');
//route de la page des skills
Route::get('/skills', [SkillController::class, 'index'])->name('skills')->middleware('throttle:skills');
//route de la page portfolio
Route::get('/portfolio', [SiteController::class, 'index'])->name('portfolio')->middleware('throttle:portfolio');

//routes captcha
Route::post('my-captcha', [ContactController::class, 'CaptchaPost'])->name('myCaptcha.post');
Route::get('refresh_captcha', [ContactController::class, 'refreshCaptcha'])->name('refresh_captcha');

// route de la page contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('throttle:contact');
// route d'envoi du mail
Route::post('/send-message', [ContactController::class, 'send'])->name('contact.send')->middleware(ProtectAgainstSpam::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Redirections
Route::permanentRedirect('/.env', 'https://www.netshield.pw');
Route::permanentRedirect('/admin', 'https://www.netshield.pw');
Route::permanentRedirect('/wp-admin', 'https://www.netshield.pw');
Route::permanentRedirect('/wp-admin.php', 'https://www.netshield.pw');
Route::permanentRedirect('/wp-login', 'https://www.netshield.pw');
Route::permanentRedirect('/wp-login.php', 'https://www.netshield.pw');
Route::permanentRedirect('/user', 'https://www.netshield.pw');








