<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MassbookingController;
use App\Http\Controllers\DonationController;

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\StripePaymentController;



// use Illuminate\Support\Facades\Route;
  

// use App\Http\Controllers\Auth\ForgotPasswordController;



// use App\Http\Controllers\Auth\ForgotPasswordController;
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



  
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::group(['middleware' => ['Auth']], function () { 
    // Route::('login',  [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::post('login', [ForgotPasswordController::class, 'index'])->name('login');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


    
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/massbooking', [App\Http\Controllers\HomeController::class, 'massbooking'])->name('/');
  

Route::resource('banner', 'App\Http\Controllers\BannerController');

Route::get('/massbooking', [App\Http\Controllers\HomeController::class, 'massbooking'])->name('backend.include.massbooking');

Route::get('/donation', [App\Http\Controllers\HomeController::class, 'donation'])->name('backend.include.donation');
Route::get('/donor', [App\Http\Controllers\HomeController::class, 'donor'])->name('backend.include.donor');

Route::get('/week', [App\Http\Controllers\HomeController::class, 'week'])->name('backend.include.weeklydonate');
Route::get('/month', [App\Http\Controllers\HomeController::class, 'month'])->name('backend.include.monthlydonate');
Route::get('/year', [App\Http\Controllers\HomeController::class, 'year'])->name('backend.include.annualdonate');




Route::get('/massdatefilter', [App\Http\Controllers\HomeController::class, 'massdatefilter'])->name('massdatefilter');


Route::post('/restriction', [App\Http\Controllers\HomeController::class, 'restriction'])->name('restriction');

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');


Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('backend.include.payment');



Auth::routes();
Auth::routes();
Route::get('/subpage', [App\Http\Controllers\HomeController::class,'massbooking'])->name('subpage');


Route::post('/', [App\Http\Controllers\MassbookingController::class, 'mailsend'])->name('mailsend');



Route::get('/newform', [App\Http\Controllers\HomeController::class, 'newform'])->name('backend.include.newform');

// Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/newform', [App\Http\Controllers\HomeController::class, 'HomeController'])->name('newform.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/send/email', [App\Http\Controllers\MailController::class, 'mail']);

// Route::get('send', 'App\Http\Controllers\mailController@sendEmail');

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');