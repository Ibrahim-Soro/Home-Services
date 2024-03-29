<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $service_categories = ServiceCategory::inRandomOrder()->take(18)->get();
        $featured_service = Service::where('featured', 1)->inRandomOrder()->take(8)->get();
        $featured_services_categories = ServiceCategory::where('featured', 1)->take(8)->get();
        $service_category_id = ServiceCategory::whereIn('slug', ['electricite', 'refrigerateur', 'television', 'climatisation', 'pressing', 'geyser'])->get()->pluck('id');
        $all_services = Service::whereIn('service_category_id', $service_category_id)->inRandomOrder()->take(8)->get();
        $slides = Slider::where('status',1)->get();
        return view('livewire.home-component', [
            'service_categories' => $service_categories,
            'featured_service' => $featured_service,
            'featured_services_categories' => $featured_services_categories,
            'all_services' => $all_services,
            'slides' => $slides,
        ])->layout('layouts.base');
    }
}
