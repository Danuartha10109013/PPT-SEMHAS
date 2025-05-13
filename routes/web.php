<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('welcome');

Route::prefix('bab1')->group(function () {
    Route::get('/', [DashboardController::class, 'bab1'])->name('bab1');
    Route::get('/latar-belakang', [DashboardController::class, 'latar'])->name('bab1.latarbelakang');
    Route::get('/rumusan-masalah', [DashboardController::class, 'rumusan'])->name('bab1.rumusuanmasalah');
    Route::get('/tujuan-penelitian', [DashboardController::class, 'tujuan'])->name('bab1.tujuanpenelitian');
    Route::get('/batasan-masalah', [DashboardController::class, 'batasan'])->name('bab1.batasanmasalah');
    Route::get('/sistematika-penulisan', [DashboardController::class, 'sistematika'])->name('bab1.sistematikapenulisan');

});

Route::prefix('bab2')->group(function () {
    Route::get('/', [DashboardController::class, 'bab2'])->name('bab2');
    Route::get('/pengembangan', [DashboardController::class, 'pengembangan'])->name('bab2.pengembangan');
    Route::get('/mccall', [DashboardController::class, 'mccall'])->name('bab2.mccall');
    Route::get('/penelitian', [DashboardController::class, 'penelitian'])->name('bab2.penelitian');

});

Route::prefix('bab3')->group(function () {
    Route::get('/', [DashboardController::class, 'bab3'])->name('bab3');
    Route::get('/evaluasi', [DashboardController::class, 'evaluasi'])->name('bab3.evaluasi');
    Route::get('/metodologi', [DashboardController::class, 'metodologi'])->name('bab3.metodologi');

});

Route::prefix('bab4')->group(function () {
    Route::get('/', [DashboardController::class, 'bab4'])->name('bab4');
    Route::get('/mccalls', [DashboardController::class, 'mccalls'])->name('bab4.mccalls');
    Route::get('/backlog', [DashboardController::class, 'backlog'])->name('bab4.backlog');
    Route::get('/planning', [DashboardController::class, 'planning'])->name('bab4.planning');
    Route::get('/uc', [DashboardController::class, 'uc'])->name('bab4.uc');
    Route::get('/act', [DashboardController::class, 'act'])->name('bab4.act');
    Route::get('/seq', [DashboardController::class, 'seq'])->name('bab4.seq');
    Route::get('/class', [DashboardController::class, 'class'])->name('bab4.class');
    Route::get('/erd', [DashboardController::class, 'erd'])->name('bab4.erd');
    Route::get('/kamus', [DashboardController::class, 'kamus'])->name('bab4.kamus');
    Route::get('/pam', [DashboardController::class, 'pam'])->name('bab4.pam');


});

Route::prefix('bab5')->group(function () {
    Route::get('/', [DashboardController::class, 'bab5'])->name('bab5');
    Route::get('/imccalls', [DashboardController::class, 'imccalls'])->name('bab5.imccalls');
    Route::get('/sistem', [DashboardController::class, 'sistem'])->name('bab5.sistem');
    Route::get('/sprint', [DashboardController::class, 'sprint'])->name('bab5.sprint');
    Route::get('/blackbox', [DashboardController::class, 'blackbox'])->name('bab5.blackbox');
    Route::get('/uat', [DashboardController::class, 'uat'])->name('bab5.uat');
});

Route::prefix('bab6')->group(function () {
    Route::get('/', [DashboardController::class, 'bab6'])->name('bab6');
    Route::get('/kesimpulan', [DashboardController::class, 'kesimpulan'])->name('bab6.kesimpulan');
    Route::get('/saran', [DashboardController::class, 'saran'])->name('bab6.saran');

});