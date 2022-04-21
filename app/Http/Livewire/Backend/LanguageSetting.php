<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class LanguageSetting extends Component
{
    // public $locate;

    // public function mount()
    // {
    //     $this->locate = config('app.locale');
    // }

    public function changeLanguage($key)
    {
        // dd($key);
        // config(['app.locale' => $key]);
        app()->setLocale($key);
        // App::getLocale();
        // App::setLocale($key);
        // App::setLocale($key);
        Artisan::call('config:clear');
        return redirect()->back();
        // $this->emit('localeChanged', $this->state['locale']);
    }

    public function render()
    {
        return view('livewire.backend.language-setting');
    }
}
