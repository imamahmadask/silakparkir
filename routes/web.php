<?php

use App\Livewire\Main\DashboardIndex as MainDashboardIndex;
use App\Livewire\Parkir\Dashboard\DashboardIndex as ParkirDashboardIndex;
use App\Livewire\Pelabuhan\Dashboard\DashboardIndex as PelabuhanDashboardIndex;
use App\Livewire\Terminal\Dashboard\DashboardIndex as TerminalDashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin/dashboard', MainDashboardIndex::class)->name('main.dashboard');

Route::get('/admin/parkir/dashboard', ParkirDashboardIndex::class)->name('parkir.dashboard');

Route::get('/admin/terminal/dashboard', TerminalDashboardIndex::class)->name('terminal.dashboard');

Route::get('/admin/pelabuhan/dashboard', PelabuhanDashboardIndex::class)->name('pelabuhan.dashboard');
