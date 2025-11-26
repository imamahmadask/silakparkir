<?php

namespace App\Livewire\Main;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Utama')]
class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.main.dashboard-index');
    }
}
