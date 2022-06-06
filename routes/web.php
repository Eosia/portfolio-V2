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
Route::get('/', [HomeController::class, 'index'])->name('home');
//route de la page des skills
Route::get('/skills', [SkillController::class, 'index'])->name('skills');
//route de la page portfolio
Route::get('/portfolio', [SiteController::class, 'index'])->name('portfolio');
// route de la page contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
