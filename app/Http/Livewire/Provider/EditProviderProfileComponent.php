<?php

namespace App\Http\Livewire\Provider;

use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProviderProfileComponent extends Component
{
    use WithFileUploads;
    public $service_provider_id;
    public $image;
    public $newimage;
    public $about;
    public $city;
    public $service_locations;
    public $service_category_id;

    public function mount()
    {
        $provider = ServiceProvider::where('user_id', Auth::user()->id)->first();
        $this->service_provider_id = $provider->id;
        $this->image = $provider->image;
        $this->about = $provider->about;
        $this->city = $provider->city;
        $this->service_locations = $provider->service_locations;
        $this->service_category_id = $provider->service_category_id;
    }

    public function UpdateProfile()
    {
        $provider = ServiceProvider::where('user_id', Auth::user()->id)->first();
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' .$this->newimage->extension();
            $this->newimage->storeAs('providers', $imageName);
            $provider->image = $imageName;
        }
        $provider->about = $this->about;
        $provider->city = $this->city;
        $provider->service_locations = $this->service_locations;
        $provider->service_category_id = $this->service_category_id;
        $provider->save();
        session()->flash('message', 'Profile mis à jour avec succès !');
    }
    public function render()
    {
        $service_categories = ServiceCategory::all();
        return view('livewire.provider.edit-provider-profile-component', [
            'service_categories'=> $service_categories,
        ])->layout('layouts.provider');
    }
}
