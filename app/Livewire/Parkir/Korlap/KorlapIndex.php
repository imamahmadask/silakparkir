<?php

namespace App\Livewire\Parkir\Korlap;

use App\Models\Korlap;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Korlap')]
class KorlapIndex extends Component
{
    public $search = '';

    #[On('refresh-korlap-list')]
    public function refresh() {}

    public function render()
    {
        $korlaps = Korlap::where('nama', 'like', '%' . $this->search . '%')->paginate(10);

        return view('livewire.parkir.korlap.korlap-index', [
            'korlaps' => $korlaps
        ]);
    }

    #[On('delete-korlap')]
    public function deleteKorlap($id)
    {
        $korlap = Korlap::find($id);
        $korlap->delete();

        $this->dispatch('refresh-korlap-list');
    }
}
