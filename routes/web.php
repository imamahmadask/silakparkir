<?php

use App\Livewire\Main\DashboardIndex as MainDashboardIndex;
use App\Livewire\Parkir\Dashboard\DashboardIndex as ParkirDashboardIndex;
use App\Livewire\Parkir\Jukir\JukirIndex;
use App\Livewire\Parkir\Korlap\KorlapIndex;
use App\Livewire\Parkir\NonTunai\NontunaiIndex as ParkirNonTunaiIndex;
use App\Livewire\Parkir\Titik\TitikIndex;
use App\Livewire\Pelabuhan\Dashboard\DashboardIndex as PelabuhanDashboardIndex;
use App\Livewire\Terminal\Dashboard\DashboardIndex as TerminalDashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/dashboard', MainDashboardIndex::class)->name('main.dashboard');

    // Parkir
    Route::get('/admin/parkir/dashboard', ParkirDashboardIndex::class)->name('parkir.dashboard');
    Route::get('/admin/parkir/titik', TitikIndex::class)->name('parkir.titik.index');
    Route::get('/admin/parkir/jukir', JukirIndex::class)->name('parkir.jukir.index');
    Route::get('/admin/parkir/nontunai', ParkirNonTunaiIndex::class)->name('parkir.nontunai.index');
    Route::get('/admin/parkir/korlap', KorlapIndex::class)->name('parkir.korlap.index');

    Route::get('/admin/terminal/dashboard', TerminalDashboardIndex::class)->name('terminal.dashboard');

    Route::get('/admin/pelabuhan/dashboard', PelabuhanDashboardIndex::class)->name('pelabuhan.dashboard');
});
