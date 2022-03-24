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
        Route::get('/certificate-payments', [\App\Http\Controllers\CitizenCertificateController::class, 'index'])->name('certificate-payment.index');

        Route::get('/incidents', [\App\Http\Controllers\IncidentController::class, 'index'])->name('incident.index');
        Route::post('/incidents', [\App\Http\Controllers\IncidentController::class, 'store'])->name('incident.store');
        Route::put('/incidents/update', [\App\Http\Controllers\IncidentController::class, 'update'])->name('incident.update');


        Route::prefix('/citizens')->group(function () {
            Route::post('/citizen-picture', [CitizenController::class, 'saveCitizenPicture'])->name('save-citizen-picture');
            Route::get('/', [CitizenController::class, 'index'])->name('citizen.index');
            Route::post('/', [CitizenController::class, 'store'])->name('citizen.store');
            Route::put('/update', [CitizenController::class, 'update'])->name('citizen.update');
            Route::put('/archive/{citizen}', [CitizenController::class, 'archiveCitizen'])->name('citizen.archive');
            Route::put('/unarchive/{citizen}', [CitizenController::class, 'unarchivedCitizen'])->name('unarchived-citizen');


            Route::get('/individual/pdf/{citizenCertificate}', [\App\Http\Controllers\CitizenCertificateController::class, 'viewCitizenCertificatePDF'])->name('certificate-citizen');
            Route::post('/citizen/cedula', [CitizenController::class, 'storeCitizenCedula'])->name('citizen.cedula');

            // Certificates
            Route::post('/certificate', [CitizenController::class, 'storeCitizenCertificate'])->name('store-citizen-certificate');

            Route::get('/business-clearance', [\App\Http\Controllers\BusinessClearanceController::class, 'index'])->name('business-clearance.index');
            Route::post('/business-clearance', [\App\Http\Controllers\BusinessClearanceController::class, 'store'])->name('store-business-permit');
            Route::get('/business-clearance/pdf/{clearance}', [\App\Http\Controllers\BusinessClearanceController::class, 'businessClearancePDF'])->name('business-clearance.pdf');


            Route::get('/cessation-business/pdf/{cessation}', [\App\Http\Controllers\CessationBusinessController::class, 'viewCessationPDF'])->name('cessation-business.pdf');
            Route::get('/cessation-business', [\App\Http\Controllers\CessationBusinessController::class, 'index'])->name('cessation-business.index');
            Route::post('/cessation-business', [\App\Http\Controllers\CessationBusinessController::class, 'store'])->name('business-cessation.store');

            // Reports Individual
            Route::get('/reports-individual', [\App\Http\Controllers\ReportsIndividualController::class, 'index'])->name('reports-individual.index');
        });
    });


    Route::group(['prefix' => 'treasurer', 'as' => 'treasurer.'], function () {
        Route::post('/logout', function () {
            auth()->logout();
            return redirect()->route('login.index');
        })->name('logout');
        Route::get('/home', [\App\Http\Controllers\Treasurer\HomeController::class, 'index'])->name('home.index');

        Route::get('/tax-payments', [\App\Http\Controllers\Treasurer\TaxPaymentsController::class, 'index'])->name('tax-payments.index');
        Route::get('/certificate-payments', [\App\Http\Controllers\Treasurer\CertificatePaymentsController::class, 'index'])->name('certificate-payments.index');

        Route::get('/payment-fees', [\App\Http\Controllers\Treasurer\PaymentFeesController::class, 'index'])->name('fees-payment.index');
        Route::post('/payment-fees/tax-payment/', [\App\Http\Controllers\Treasurer\PaymentFeesController::class, 'storeTaxPayment'])->name('store-tax-payment');
        Route::post('/payment-fees/certificate-payment/', [\App\Http\Controllers\Treasurer\PaymentFeesController::class, 'storeCertificatePayment'])->name('store-certificate-payment');

        Route::get('/tax-payment/pdf/{taxPayment}', [\App\Http\Controllers\Treasurer\TaxPaymentsController::class, 'viewTaxPaymentPDF'])->name('tax-payment.pdf');
        Route::get('/certificate-payment/{certificatePayment}', [\App\Http\Controllers\Treasurer\CertificatePaymentsController::class, 'viewCertificatePaymentPDF'])->name('certificate-payment.pdf');
    });
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
});


