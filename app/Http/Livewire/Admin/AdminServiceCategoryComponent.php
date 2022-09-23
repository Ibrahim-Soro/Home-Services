<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $s_categories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component', [
            's_categories' => $s_categories,
        ])->layout('layouts.admin');
    }
}
