<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\Auth\LoginController;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('logout', [LoginController::class, 'logout']);

    Route::get('panel', [InfluencerController::class, 'index'])->name('influencers.index');
    Route::get('mis-recursos', [InfluencerController::class, 'create'])->name('influencers.create');
    Route::post('store', [InfluencerController::class, 'store'])->name('influencers.store');
    Route::post('delete/{id}', [InfluencerController::class, 'destroy'])->name('influencers.selete');
});

