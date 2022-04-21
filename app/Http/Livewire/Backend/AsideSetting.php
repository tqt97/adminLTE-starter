<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class AsideSetting extends Component
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
        $this->state['layout-footer-fixed'] = config('adminlte.layout-footer-fixed');
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
        return view('livewire.backend.aside-setting');
    }
}
