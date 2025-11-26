<?php

namespace App\Livewire\Parkir\Jukir;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Juru Parkir')]
class JukirIndex extends Component
{
    public function render()
    {
        return view('livewire.parkir.jukir.jukir-index');
    }
}
