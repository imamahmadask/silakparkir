<?php

namespace App\Livewire\Parkir\Titik;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Titik Parkir')]
class TitikIndex extends Component
{
    public function render()
    {
        return view('livewire.parkir.titik.titik-index');
    }
}
