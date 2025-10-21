<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/audit-logs', [LogController::class, 'audit'])->name('audit-logs.index');
    Route::get('/admin/security-logs', [LogController::class, 'security'])->name('security-logs.index');
    Route::get('/admin/security-logs/archive/{archiveFilename}', [LogController::class, 'archiveShow'])->name('security-logs.archive');
    Route::post('/admin/security-logs/archive-now', [LogController::class, 'archiveNow'])->name('security-logs.archive-now');
    Route::get('/admin/security-logs/download/{archiveFilename}', [LogController::class, 'downloadArchive'])->name('security-logs.download');


});

require __DIR__.'/settings.php';
