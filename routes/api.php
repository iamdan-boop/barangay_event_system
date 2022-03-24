<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {

    $data = \App\Models\CessationBusiness::first();
    $pdf = Barryvdh\DomPDF\Facade\Pdf::loadView('certificate.cessation_business', [
        'business_name' => $data->business,
        'address' => $data->owner_address,
        'business_owner' => $data->business_owner,
        'owner_address' => $data->owner_address,
        'purpose' => $data->purpose,
        'created_at' => $data->created_at,
        'captain' => \App\Models\User::role('captain')->first()->first_name,
    ]);
    return $pdf->stream('document.pdf');
});

//Route::get('/tax-payment', function () {
//    $data = \App\Models\CessationBusiness::first();
//    $pdf = Barryvdh\DomPDF\Facade\Pdf::loadView('certificate.tax_payment', [
//        'business_name' => $data->business,
//        'address' => $data->owner_address,
//        'business_owner' => $data->business_owner,
//        'owner_address' => $data->owner_address,
//        'purpose' => $data->purpose,
//        'created_at' => $data->created_at,
//        'captain' => \App\Models\User::role('captain')->first()->first_name,
//    ]);
//    return $pdf->stream('document.pdf');
//});
