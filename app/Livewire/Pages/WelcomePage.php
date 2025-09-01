<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class WelcomePage extends Component
{
    public string $name = '';

    public function render()
    {
        return view('livewire.pages.welcome-page')->layout('components.layouts.app');

    }
}
