<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;
use Livewire\WithFileUploads;

class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public $featured;


    public function mount($category_id)
    {
        $service_category = ServiceCategory::find($category_id);
        $this->category_id = $service_category->id;
        $this->name =  $service_category->name;
        $this->slug = $service_category->slug;
        $this->image = $service_category->image;
        $this->featured = $service_category->featured;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->newimage) {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:jpeg,png',
            ]);
        }
    }

    public function updateServiceCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,png',
            ]);
        }

        $service_category = ServiceCategory::find($this->category_id);
        $service_category->name = $this->name;
        $service_category->slug = $this->slug;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('categories', $imageName);
            $service_category->image = $imageName;
        }
        $service_category->featured = $this->featured;
        $service_category->save();
        session()->flash('message', 'Catégorie mise à jour avec succès !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.admin');
    }
}
