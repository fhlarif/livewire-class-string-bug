<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class PatientLivewire extends Component
{
    #[Url(as: 'pt', history: true)]
    public string $patientSearch = '';

    public function render()
    {
        return view('livewire.patient-livewire');
    }
}
