<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class BannerComponent extends Component
{
    public $view = 'livewire.banner-component'; // Default view that loads initially
    public $routeName = 'equity-circle'; // Current route name
    
    // Listen for the 'changeContent' event, which triggers the loadView method
    protected $listeners = ['changeContent' => 'loadView'];

    public function mount($routeName)
    {
        // $this->view = $view;
        $this->routeName = $routeName;
    }


    // Method to update the current view based on the event payload
    public function loadView($viewName,$routeName)

    {
        $this->routeName = $routeName; // Update the current route name
        if ($viewName == 'dashboards.equitycircle') {
            $this->view = 'livewire.banner-component'; // Set the view to render
        } else {
            $this->view = ''; // Set to empty if condition doesn't match
        }
    }    

    public function render()
    {
        // Only render if the view is not empty
        if ($this->view != '') {
            return $this->routeName == 'equity-circle'
            ? view($this->view)
            : view('livewire.placeholder');
        }

        // Optionally render a placeholder or an empty div if view is empty
        return view('livewire.placeholder'); // You can create an empty placeholder view
    }
}
