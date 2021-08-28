<?php

namespace App\Http\Livewire\Vender;

use Livewire\Component;

class VenderDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.vender.vender-dashboard-component')->layout('layouts.base');
    }
}
