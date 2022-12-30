<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $service_categories = ServiceCategory::inRandomOrder()->take(18)->get();
        $featured_service = Service::where('featured', 1)->inRandomOrder()->take(8)->get();
        $featured_services_categories = ServiceCategory::where('featured', 1)->take(8)->get();
        return view('livewire.home-component', [
            'service_categories' => $service_categories,
            'featured_service' => $featured_service,
            'featured_services_categories' => $featured_services_categories,
        ])->layout('layouts.base');
    }
}
