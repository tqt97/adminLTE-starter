<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class SettingAside extends Component
{
    public $state = [];

    public function mount()
    {
        $sidebarSettings = config('adminlte.aside');
        if ($sidebarSettings) {
            $this->state = $sidebarSettings;
        }
        $this->state['dark-mode'] = config('adminlte.dark-mode');
        $this->state['layout-navbar-fixed'] = config('adminlte.layout-navbar-fixed');
    }
    public function toggleSingleSetting($key)
    {
        toggleSettings('adminlte', $key, 'adminlte');
    }
    public function toggleAsideSetting($key)
    {
        toggleSettings('adminlte.aside', $key, 'adminlte');
    }

    public function render()
    {
        return view('livewire.backend.setting-aside');
    }
}
