<?php

use App\Http\Controllers\VOCController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');


Route::prefix('event')->name('event.')->group(function () {
    Route::view('/ceo-talk', 'events.event-ceo')->name('ceo-talk');
    Route::view('/virtual-company-visit', 'events.event-vcc')->name('vcc');
    Route::view('/pascal', 'events.event-pascal')->name('pascal');
    Route::view('/ogip-cup', 'events.event-ogip_cup')->name('ogip-cup');
    Route::view('/petroleum-insight', 'events.event-pi')->name('petroleum-insight');
    Route::view('/video-of-ogip', 'events.event-voc')->name('voc');
    Route::view('/video-of-ogip/registration', 'registration-voc')->name('voc.registration');
    Route::post('/video-of-ogip/registration', [VOCController::class, 'store'])->name('voc.registration');
});

Route::prefix('competition')->name('competition.')->group(function () {
    Route::view('oil-rig-design', 'competitions.competition-ord')->name('oil-rig-design');
    Route::view('geothermal-case-study', 'competitions.competition-geothermal')->name('geothermal');
    Route::view('plan-of-development', 'competitions.competition-pod')->name('plan-of-development');
    Route::view('paper-poster', 'competitions.competition-ppc')->name('paper-poster');
    Route::view('smart-competition', 'competitions.competition-smart')->name('smart-competition');
    Route::view('reservoir-simulation', 'competitions.competition-reservoir')->name('reservoir-simulation');
});
Route::view('/registration', 'registration')->name('registration');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

