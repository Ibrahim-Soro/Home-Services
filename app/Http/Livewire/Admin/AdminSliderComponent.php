<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSliderComponent extends Component
{
    use WithPagination;

    public function deleteSlide($slide_id)
    {
        $slide = Slider::find($slide_id);
        unlink('images/slide'.'/'.$slide->image);
        $slide->delete();
        session()->flash('message', 'Slide supprimé avec succès !');
    }
    public function render()
    {
        $slides = Slider::orderByDesc('created_at')->paginate(10);
        return view('livewire.admin.admin-slider-component', [
            'slides' => $slides,
        ])->layout('layouts.admin');
    }
}
