<?php

use App\Http\Controllers\GeothermalCompetitionController;
use App\Http\Controllers\ORDCompetitionController;
use App\Http\Controllers\PaperPosterController;
use App\Http\Controllers\PODCompetitionController;
use App\Http\Controllers\SimresCompetitionController;
use App\Http\Controllers\SmartCompetitionController;
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
    Route::view('/awarding-night', 'events.event-awarding')->name('awarding-night');
    Route::view('/grand-opening', 'events.event-opening')->name('grand-opening');
    Route::view('/virtual-company-visit', 'events.event-vcc')->name('vcc');
    Route::view('/pascal', 'events.event-pascal')->name('pascal');
    Route::view('/ogip-cup', 'events.event-ogip_cup')->name('ogip-cup');
    Route::view('/petroleum-insight', 'events.event-pi')->name('petroleum-insight');
    Route::view('/video-of-ogip', 'events.event-voc')->name('voc');
    Route::view('/video-of-ogip/registration', 'registration.registration-voc')->name('voc.registration');
    Route::post('/video-of-ogip/registration', [VOCController::class, 'store'])->name('voc.registration');
});

Route::prefix('competition')->name('competition.')->group(function () {
    Route::view('oil-rig-design', 'competitions.competition-ord')->name('oil-rig-design');
    Route::view('oil-rig-design/registration', 'registration.registration-ord')->name('oil-rig-design.registration');
    Route::post('oil-rig-design/registration', [ORDCompetitionController::class, 'store'])->name('oil-rig-design.registration');
    Route::view('geothermal-case-study', 'competitions.competition-geothermal')->name('geothermal');
    Route::view('geothermal-case-study/registration', 'registration.registration-gcs')->name('geothermal.registration');
    Route::post('geothermal-case-study/registration', [GeothermalCompetitionController::class, 'store'])->name('geothermal.registration');
    Route::view('plan-of-development', 'competitions.competition-pod')->name('plan-of-development');
    Route::view('plan-of-development/registration', 'registration.registration-pod')->name('plan-of-development.registration');
    Route::post('plan-of-development/registration', [PODCompetitionController::class, 'store'])->name('plan-of-development.registration');
    Route::view('paper-poster', 'competitions.competition-ppc')->name('paper-poster');
    Route::view('paper-poster/registration', 'registration.registration-ppc')->name('paper-poster.registration');
    Route::post('paper-poster/registration', [PaperPosterController::class, 'store'])->name('paper-poster.registration');
    Route::view('smart-competition', 'competitions.competition-smart')->name('smart-competition');
    Route::view('smart-competition/registration', 'registration.registration-smart')->name('smart-competition.registration');
    Route::post('smart-competition/registration', [SmartCompetitionController::class, 'store'])->name('smart-competition.registration');
    Route::view('reservoir-simulation', 'competitions.competition-reservoir')->name('reservoir-simulation');
    Route::view('reservoir-simulation/registration', 'registration.registration-simres')->name('reservoir-simulation.register');
    Route::post('reservoir-simulation/registration', [SimresCompetitionController::class, 'store'])->name('reservoir-simulation.register');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

