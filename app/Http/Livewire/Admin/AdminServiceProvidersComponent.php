<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\Component;

class AdminServiceProvidersComponent extends Component
{
    public function render()
    {
        $providers = ServiceProvider::orderByDesc('created_at')->paginate(12);
        return view('livewire.admin.admin-service-providers-component', [
            'providers' => $providers,
        ])->layout('layouts.admin');
    }
}
