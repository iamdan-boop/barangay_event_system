<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\CitizenController;

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

Route::group(['middleware' => 'auth'], function () {
//    Captain
    Route::group(['middleware' => 'captain', 'prefix' => 'captain'], function () {


        Route::get('/home', [\App\Http\Controllers\CaptainController::class, 'index'])->name('captain.index');
        Route::post('/logout', \App\Http\Controllers\LogoutController::class)->name('logout');

        Route::post('/add-event', [\App\Http\Controllers\CaptainController::class, 'addEvent'])->name('add-event');
        Route::post('/edit-event', [\App\Http\Controllers\CaptainController::class, 'editEvent'])->name('edit-event');
        Route::get('/tax-payments', [\App\Http\Controllers\TaxPaymentsController::class, 'index'])->name('tax-payments.index');
        Route::get('/certificate-payments', [\App\Http\Controllers\CertificatePaymentController::class, 'index'])->name('certificate-payment.index');

        Route::get('/incidents', [\App\Http\Controllers\IncidentController::class, 'index'])->name('incident.index');
        Route::post('/incidents', [\App\Http\Controllers\IncidentController::class, 'store'])->name('incident.store');
        Route::put('/incidents/update', [\App\Http\Controllers\IncidentController::class, 'update'])->name('incident.update');


        Route::prefix('/citizens')->group(function () {
            Route::get('/', [CitizenController::class, 'index'])->name('citizen.index');
            Route::post('/', [CitizenController::class, 'store'])->name('citizen.store');
            Route::put('/update', [CitizenController::class, 'update'])->name('citizen.update');
            Route::put('/archive/{citizen}', [CitizenController::class, 'archiveCitizen'])->name('citizen.archive');
            Route::put('/unarchive', [CitizenController::class, 'unarchivedCitizen'])->name('unarchived-citizen');

            // Certificates
            Route::post('/certificate', [CitizenController::class, 'storeCitizenCertificate'])->name('store-citizen-certificate');

            Route::get('/business-clearance', [\App\Http\Controllers\BusinessClearanceController::class, 'index'])->name('business-clearance.index');
            Route::post('/business-clearance', [\App\Http\Controllers\BusinessClearanceController::class, 'store'])->name('store-business-permit');


            Route::get('/cessation-business', [\App\Http\Controllers\CessationBusinessController::class, 'index'])->name('cessation-business.index');
            Route::post('/cessation-business', [\App\Http\Controllers\CessationBusinessController::class, 'store'])->name('business-cessation.store');

            // Reports Individual
            Route::get('/reports-individual', [\App\Http\Controllers\ReportsIndividualController::class, 'index'])->name('reports-individual.index');
        });
    });
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
});


