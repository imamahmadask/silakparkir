<?php

namespace App\Livewire\Parkir\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Parkir')]
class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.parkir.dashboard.dashboard-index');
    }
}
