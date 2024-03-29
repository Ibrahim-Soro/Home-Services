<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditSlideComponent extends Component
{
    use WithFileUploads;

    public $slide_id;
    public $title;
    public $image;
    public $status;
    public $newimage;

    public function mount($slide_id)
    {
        $slide = Slider::find($slide_id);
        $this->slide_id = $slide->id;
        $this->title = $slide->title;
        $this->image = $slide->image;
        $this->status = $slide->status;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($this->newimage)
        {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }
    }

    public function updateSlide()
    {
        $this->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        if ($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }

        $slide = Slider::find($this->slide_id);
        $slide->title = $this->title;
        if ($this->newimage) {
            unlink('images/slide'.'/'.$slide->image);
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('slide', $imageName);
            $slide->image = $imageName;
        }

        $slide->status = $this->status;
        $slide->save();
        session()->flash('message', 'Slide modifié avec succès !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-slide-component')->layout('layouts.admin');
    }
}
