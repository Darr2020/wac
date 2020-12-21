<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InfluencerController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('panel', [InfluencerController::class, 'index'])->name('influencers.index');
    Route::get('mis-recursos', [InfluencerController::class, 'create'])->name('influencers.create');
    Route::post('store', [InfluencerController::class, 'store'])->name('influencers.store');
});

