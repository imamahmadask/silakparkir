<?php

namespace App\Livewire\Parkir\Titik;

use App\Models\Titik;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Titik Parkir')]
class TitikIndex extends Component
{
    #[On('refresh-titik')]
    public function refresh() {}

    public function render()
    {
        $titik = Titik::all();

        return view('livewire.parkir.titik.titik-index', [
            'titik' => $titik
        ]);
    }

    #[On('delete-titik')]
    public function deleteTitik($id)
    {
        $titik = Titik::find($id);
        $titik->delete();

        $this->dispatch('refresh-titik');
    }
}
