<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $service_categories = ServiceCategory::inRandomOrder()->take(18)->get();
        return view('livewire.home-component', [
            'service_categories' => $service_categories,
        ])->layout('layouts.base');
    }
}
