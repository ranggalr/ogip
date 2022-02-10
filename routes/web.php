<?php

use App\Http\Controllers\Admin\CEOTalkController as AdminCEOTalkController;
use App\Http\Controllers\Admin\GeothermalCompetitionController as AdminGeothermalCompetitionController;
use App\Http\Controllers\Admin\ORDCompetitionController as AdminORDCompetitionController;
use App\Http\Controllers\Admin\PaperPosterController as AdminPaperPosterController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\PetroleumInsightController as AdminPetroleumInsightController;
use App\Http\Controllers\Admin\PODCompetitionController as AdminPODCompetitionController;
use App\Http\Controllers\Admin\SimresCompetitionController as AdminSimresCompetitionController;
use App\Http\Controllers\Admin\SmartCompetitionController as AdminSmartCompetitionController;
use App\Http\Controllers\Admin\VCCController as AdminVCCController;
use App\Http\Controllers\Admin\VOCController as AdminVOCController;
use App\Http\Controllers\CEOTalkController;
use App\Http\Controllers\GeothermalCompetitionController;
use App\Http\Controllers\ORDCompetitionController;
use App\Http\Controllers\PaperPosterController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PetroleumInsightController;
use App\Http\Controllers\PODCompetitionController;
use App\Http\Controllers\PPCSubmissionController;
use App\Http\Controllers\SimresCompetitionController;
use App\Http\Controllers\SmartCompetitionController;
use App\Http\Controllers\VCCController;
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

Route::view('/payment', 'payment')->name('payment');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

Route::prefix('event')->name('event.')->group(function () {
    Route::view('/ceo-talk', 'events.event-ceo')->name('ceo-talk');
    Route::view('/ceo-talk/registration', 'registration.registration-ceo')->name('ceo-talk.registration');
    Route::post('/ceo-talk/registration', [CEOTalkController::class, 'store'])->name('ceo-talk.registration');
    Route::view('/awarding-night', 'events.event-awarding')->name('awarding-night');
    Route::view('/grand-opening', 'events.event-opening')->name('grand-opening');
    Route::view('/virtual-company-visit', 'events.event-vcc')->name('vcc');
    Route::view('/virtual-company-visit/registration', 'registration.registration-vcc')->name('virtual-company-visit.registration');
    Route::post('/virtual-company-visit/registration', [VCCController::class, 'store'])->name('virtual-company-visit.registration');
    Route::view('/pascal', 'events.event-pascal')->name('pascal');
    Route::view('/ogip-cup', 'events.event-ogip_cup')->name('ogip-cup');
    Route::view('/petroleum-insight', 'events.event-pi')->name('petroleum-insight');
    Route::view('/petroleum-insight/registration', 'registration.registration-pi')->name('petroleum-insight.registration');
    Route::post('/petroleum-insight/registration', [PetroleumInsightController::class, 'store'])->name('petroleum-insight.registration');
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
    Route::view('paper-poster/submission', 'ppc-submission')->name('paper-poster.submission');
    Route::post('paper-poster/submission', [PPCSubmissionController::class, 'store'])->name('paper-poster.submission');
    Route::view('paper-poster/registration', 'registration.registration-ppc')->name('paper-poster.registration');
    Route::post('paper-poster/registration', [PaperPosterController::class, 'store'])->name('paper-poster.registration');
    Route::view('smart-competition', 'competitions.competition-smart')->name('smart-competition');
    Route::view('smart-competition/registration', 'registration.registration-smart')->name('smart-competition.registration');
    Route::post('smart-competition/registration', [SmartCompetitionController::class, 'store'])->name('smart-competition.registration');
    Route::view('reservoir-simulation', 'competitions.competition-reservoir')->name('reservoir-simulation');
    Route::view('reservoir-simulation/registration', 'registration.registration-simres')->name('reservoir-simulation.registration');
    Route::post('reservoir-simulation/registration', [SimresCompetitionController::class, 'store'])->name('reservoir-simulation.registration');
});

Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    Route::view('/','admin.dashboard')->name('dashboard');
    Route::get('/smart-competition', [AdminSmartCompetitionController::class, 'index'])->name('smart-competition');
    Route::get('/smart-competition/{smartCompetition}', [AdminSmartCompetitionController::class, 'show'])->name('smart-competition.view');
    Route::get('oil-rig-design', [AdminORDCompetitionController::class, 'index'])->name('oil-rig-design');
    Route::get('oil-rig-design/{ord}', [AdminORDCompetitionController::class, 'show'])->name('oil-rig-design.view');
    Route::get('geothermal', [AdminGeothermalCompetitionController::class, 'index'])->name('geothermal');
    Route::get('geothermal/{gcs}', [AdminGeothermalCompetitionController::class, 'show'])->name('geothermal.view');
    Route::get('ppc', [AdminPaperPosterController::class, 'index'])->name('ppc');
    Route::get('ppc/{ppc}', [AdminPaperPosterController::class, 'show'])->name('ppc.view');
    Route::get('pod', [AdminPODCompetitionController::class, 'index'])->name('pod');
    Route::get('pod/{pod}', [AdminPODCompetitionController::class, 'show'])->name('pod.view');
    Route::get('simres', [AdminSimresCompetitionController::class, 'index'])->name('simres');
    Route::get('simres/{simres}', [AdminSimresCompetitionController::class, 'show'])->name('simres.view');
    Route::get('voc', [AdminVOCController::class, 'index'])->name('voc');
    Route::get('voc/{voc}', [AdminVOCController::class, 'show'])->name('voc.view');
    Route::get('pi', [AdminPetroleumInsightController::class, 'index'])->name('pi');
    Route::get('pi/{pi}', [AdminPetroleumInsightController::class, 'show'])->name('pi.view');
    Route::get('ceo-talk', [AdminCEOTalkController::class, 'index'])->name('ceo-talk');
    Route::get('ceo-talk/{ceo}', [AdminCEOTalkController::class, 'show'])->name('ceo-talk.view');
    Route::get('vcc', [AdminVCCController::class, 'index'])->name('vcc');
    Route::get('vcc/{ceo}', [AdminVCCController::class, 'show'])->name('vcc.view');
    Route::get('payment', [AdminPaymentController::class, 'index'])->name('payment');
    Route::get('payment/download/{payment}', [AdminPaymentController::class, 'download'])->name('payment.download');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');/

require __DIR__.'/auth.php';

