<?php

namespace App\Livewire;

use App\Livewire\Forms\PenyediaanForm;
use Livewire\Component;

class PenyediaanTable extends Component
{
    public PenyediaanForm $form;

    public function render()
    {
        return view('livewire.penyediaan-table');
    }
}
