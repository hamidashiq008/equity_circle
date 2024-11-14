<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
class HeaderComponent extends Component
{
    public function triggerNavigateTo($destination,$routeName)
    {
        $this->dispatch('changeContent', $destination,$routeName);
    }
    public function render()
    {
        return Route::currentRouteName() != 'search-job'
            ? view('livewire.header-component')  // Your dynamic header view
            : '';
    }
}
