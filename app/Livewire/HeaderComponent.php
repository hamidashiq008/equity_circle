<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class HeaderComponent extends Component
{
    public function triggerNavigateTo($destination, $routeName)
    {
        // Dispatching an event for navigation
        $this->dispatch('changeContent', $destination, $routeName);
    }

    public function render()
    {
        // Render the view only if it's not the 'search-job' route
        return Route::currentRouteName() !== 'search-job'
            ? view('livewire.header-component')  // Your dynamic header view
            : '';
    }
}
