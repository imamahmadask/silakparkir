<?php

namespace App\Livewire\Parkir\NonTunai;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Parkir Non Tunai')]
class NontunaiIndex extends Component
{
    public function render()
    {
        return view('livewire.parkir.non-tunai.nontunai-index');
    }
}
