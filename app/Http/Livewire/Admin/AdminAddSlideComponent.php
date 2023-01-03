<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddSlideComponent extends Component
{
    use WithFileUploads;

    public $title;

    public $image;

    public $status=0;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);
    }

    public function addNewSlide()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);

        $slide = new Slider();
        $slide->title = $this->title;

        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('slide', $imageName);
        $slide->image = $imageName;

        $slide->status = $this->status;

        $slide->save();
        session()->flash('message', 'Slide ajouté avec succès !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-slide-component')->layout('layouts.admin');
    }
}
