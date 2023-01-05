<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeLocationComponent extends Component
{
    public $neighborhood;
    public $city;
    public $common;
    public $country;

    public function ChangeLocation()
    {
        session()->put('neighborhood', $this->neighborhood);
        session()->put('city', $this->city);
        session()->put('common', $this->common);
        session()->put('country', $this->country);
        session()->flash('message', 'Adresse ajoutée avec succès !');
        $this->emitTo('location-component', 'refreshComponent');
    }

    public function render()
    {
        return view('livewire.change-location-component')->layout('layouts.base');
    }
}
