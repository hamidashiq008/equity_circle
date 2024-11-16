<?php
namespace App\Livewire;

use Livewire\Component;

use Route;

class MainContent extends Component
{
    public $view = 'dashboards.equitycircle'; // Default view that loads initially
    public $routeName = 'equity-circle';
    
        // Mount method to accept parameters
        public function mount($view, $routeName)
        {
            $this->view = $view;
            $this->routeName = $routeName;
        }

        
    // Listen for the 'changeContent' event, which triggers the loadView method
    protected $listeners = ['changeContent' => 'loadView'];

    // Method to update the current view based on the event payload
    public function loadView($viewName, $routeName)
    {
        \Log::info("Event caught: changeContent with viewName: $viewName and routeName: $routeName");
        $this->view = $viewName;
        $this->routeName = $routeName;
    }
    
    
    
    public function render()
    {
        // Check if $this->view is set
        $viewName = $this->view;
        
        // Check if $this->routeName is set correctly
        $routeName = $this->routeName;
    
        // Debugging: Log the values
        \Log::info('Rendering view: ' . $viewName);
        \Log::info('Generating route for: ' . $routeName);
    
        // Generate the route dynamically with the route name
        try {
            // Check if the route exists first
            if (Route::has($routeName)) {
                $route = route($routeName);
            } else {
                // Handle the case where the route doesn't exist
                \Log::error('Route does not exist: ' . $routeName);
                $route = null;  // Or set a fallback route
            }
        } catch (\Exception $e) {
            // Handle any unexpected errors
            \Log::error('Error generating route: ' . $e->getMessage());
            $route = null;  // Fallback route handling
        }
         // Dispatch the browser event to change the URL
        $this->dispatch('changeUrl', $route);
    
        // Return the view with dynamic data
        return view('livewire.main-content', [
            'view' => $viewName,
            'route' => $route
        ]);
    }
    
    
}

