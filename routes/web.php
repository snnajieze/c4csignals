<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Helpers\FortifyRedirect;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewslettersController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/how-to-use', function () {
    return view('pages.how-to-use');
})->name('how-to-use');

Route::get('/how-to-use-crypto-signals', function () {
    return view('pages.how-to-use-crypto-signals');
})->name('how-to-use-crypto-signals');

Route::get('/how-to-use-forex-signals', function () {
    return view('pages.how-to-use-forex-signals');
})->name('how-to-use-forex-signals');


// For payments
// Route::get('/payment-response', function () {
//     return view('pages.payment-response');
// })->name('payment-response');

Route::get('/checkout/nowpayments/{subscription_id}', [SubscriptionController::class, 'checkout'])
    ->name('nowpayment.checkout');

Route::post('/nowpayment/callback', [SubscriptionController::class, 'callback'])
    ->name('nowpayment.callback');

Route::get('/nowpayment/success/{subscription}', [SubscriptionController::class, 'success'])
    ->name('nowpayment.success');

Route::get('/nowpayment/cancel/{subscription}', [SubscriptionController::class, 'cancel'])
    ->name('nowpayment.cancel');

    Route::get('fortify-redirect', [FortifyRedirect::class, '__invoke'])
    ->name('fortify-redirect');

    // Route::get('fortify-redirect', [SubscriptionController::class, 'invoke'])
    // ->name('fortify-redirect');

Route::get('/payment-initialize-error', function(){
    return view('payments/payment-initialize-error');
});



Route::post('/subscribe', [NewslettersController::class, 'store'])->name('newsletter.subscribe');




Route::get('/policy', [PagesController::class, 'show'])->name('policy')->defaults('page', 'policy');
Route::get('/terms', [PagesController::class, 'show'])->name('terms')->defaults('page', 'terms');
Route::get('/risk-disclosure', [PagesController::class, 'show'])->name('risk')->defaults('page', 'risk');
// Route::get('/{page}', [PagesController::class, 'show'])->whereIn('page', ['policy', 'terms', 'risk-disclosure']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Debug route to list all users
Route::get('/debug/users', function () {
    return \App\Models\User::all();
});

