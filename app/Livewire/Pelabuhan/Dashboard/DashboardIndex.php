<?php

namespace App\Livewire\Pelabuhan\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Pelabuhan')]
class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.pelabuhan.dashboard.dashboard-index');
    }
}
