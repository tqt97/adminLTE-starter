<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class PageSetting extends Component
{
    public $state = [];
    // public $title;

    public function mount()
    {
        $this->state = config('adminlte');
        // $this->title = config('adminlte.title');

    }

    public function updatedStateTitle()
    {
        config(['adminlte.title' => $this->state['title']]);

        $fp = fopen(base_path() . '/config/adminlte' . '.php', 'w');

        fwrite($fp, '<?php return ' . var_export(config('adminlte'), true) . ';');

        fclose($fp);

        Artisan::call('config:clear');
        $this->emit('titleChanged', $this->state['title']);
    }

    public function render()
    {
        return view('livewire.backend.page-setting');
    }
}
