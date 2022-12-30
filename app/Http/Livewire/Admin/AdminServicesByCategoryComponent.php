<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicesByCategoryComponent extends Component
{
    use WithPagination;

    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function deleteService($service_id)
    {
        $service = Service::find($service_id);
        if ($service->image) {
            unlink('images/services'.'/'.$service->image);
        }
        if ($service->thumbnail) {
            unlink('images/services/thumbnails'.'/'.$service->thumbnail);
        }
        $service->delete();
        session()->flash('message', 'Service supprimé avec succès !');
    }

    public function render()
    {
        $category = ServiceCategory::where('slug', $this->category_slug)->first();
        $services = Service::where('service_category_id', $category->id)->paginate(10);
        return view('livewire.admin.admin-services-by-category-component', [
            'category' => $category,
            'services' => $services,
        ])->layout('layouts.admin');
    }
}
