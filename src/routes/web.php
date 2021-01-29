<?php
use Illuminate\Support\Facades\Route;
use ApplySystem\TermosAceite\Http\Controllers\TermoAceiteController;

Route::group(['middleware' => ['web','auth']], function(){
    Route::get('termo/verify', [TermoAceiteController::class, 'verify'])->name('termo.verify');
    Route::get('termo/aceite', [TermoAceiteController::class, 'index'])->name('termo.aceite');
    Route::get('termo/create', [TermoAceiteController::class, 'create'])->name('termo.create');
    Route::post('termo/store', [TermoAceiteController::class, 'store'])->name('termo.store');
    Route::post('termo/aceite/{id}', [TermoAceiteController::class, 'termsAccepted'])->name('termo.accepted');
});

