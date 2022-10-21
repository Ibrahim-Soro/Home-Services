<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:jpeg,png',
        ]);
    }

    public function createNewCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:jpeg,png',
        ]);

        $service_category = new ServiceCategory();
        $service_category->name = $this->name;
        $service_category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('categories', $imageName);
        $service_category->image = $imageName;
        $service_category->save();
        session()->flash('message', 'Catégorie ajoutée avec succès !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-service-category-component')->layout('layouts.admin');
    }
}
