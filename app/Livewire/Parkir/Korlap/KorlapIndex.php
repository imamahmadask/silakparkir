<?php

namespace App\Livewire\Parkir\Korlap;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Korlap')]
class KorlapIndex extends Component
{
    public function render()
    {
        return view('livewire.parkir.korlap.korlap-index');
    }
}
