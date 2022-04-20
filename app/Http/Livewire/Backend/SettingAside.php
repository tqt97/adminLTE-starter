<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
// use Illuminate\Support\Facades\Cache;

class SettingAside extends Component
{
    public $state = [];

    public function mount()
    {
        $sidebarSettings = config('aside');
        if ($sidebarSettings) {
            $this->state = $sidebarSettings;
        }
    }

    public function render()
    {
        return view('livewire.backend.setting-aside');
    }
}
