<?php

namespace ApplySystem\TermosAceite\Routes;

use ApplySystem\TermosAceite\Http\Controllers\TermoAceiteController;
use Illuminate\Routing\Route;

Route::group(['middleware' => ['web','auth']], function(){
    Route::get('termo/aceite', [TermoAceiteController::class, 'index'])->name('termo.aceite');
    Route::get('termo/create', [TermoAceiteController::class, 'create'])->name('termo.create');
    Route::post('termo/store', [TermoAceiteController::class, 'store'])->name('termo.store');

});

