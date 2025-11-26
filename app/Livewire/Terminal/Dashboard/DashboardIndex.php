<?php

namespace App\Livewire\Terminal\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Terminal')]
class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.terminal.dashboard.dashboard-index');
    }
}
