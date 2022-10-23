<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;

    public function deleteServiceCategory($id)
    {
        $service_category = ServiceCategory::find($id);
        if ($service_category->image) {
            unlink('images/categories'. '/' .$service_category->image);
        }
        $service_category->delete();
        session()->flash('message', 'Catégorie supprimée avec succès !');
    }

    public function render()
    {
        $s_categories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component', [
            's_categories' => $s_categories,
        ])->layout('layouts.admin');
    }
}
