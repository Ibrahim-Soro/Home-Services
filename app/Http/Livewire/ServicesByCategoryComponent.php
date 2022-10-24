<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServicesByCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category_slug = ServiceCategory::where('slug', $this->category_slug)->first();
        return view('livewire.services-by-category-component', [
            'service_category' => $category_slug,
        ])->layout('layouts.base');
    }
}
