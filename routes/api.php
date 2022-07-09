<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MassBookingController;
Use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\DonationController;


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
// Route::group(['middleware' => 'auth'], function (Request $request) {
// //     return $request->user();
// // });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});



// Route::get('insert','StudInsertController@insertform');
// create
Route::post('/create-mass-booking', [MassBookingController::class,'createMassBook']);


// view
Route::get("/mass-booking", [MassBookingController::class, 'massbookListing']);

// http://139.162.8.46:6069/api/create/intention
// particular



Route::get("/mass-booking/{id}", [MassBookingController::class, 'massbookDetail']);

Route::delete("/mass-booking/{id}", [MassBookingController::class, 'massbookDelete']);

// Route::get("/mass-booking/", [MassBookingController::class, 'massbookDetail']);



Route::get('/get-restriction', [MassBookingController::class, 'getRestriction'])->name('getRestriction'); 

// Route::post('create-mass-booking', [MassbookingController::class, 'mailsend'])->name('mailsend');


Route::post('/createdonation', [DonationController::class, 'createDonation']);
Route::get("/donation", [DonationController::class, 'donationListing']);
Route::get('/editdonation/{id}', [DonationController::class, 'donationDetail']);
Route::delete('/deletedonation/{id}', [DonationController::class, 'donationDelete']);


