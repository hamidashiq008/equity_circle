<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $layout, $dir, $assets, $modalJs ,$isZuck ,$isSubheader,$bodyClass,$activelink;

    public function __construct($layout = '', $dir=false, $assets = [], $modalJs = false ,$activelink="",$isZuck=false ,$isSubheader=false,$bodyClass="")
    {
        $this->layout = $layout;
        $this->dir = $dir;
        $this->assets = $assets;
        $this->modalJs = $modalJs;
        $this->isZuck = $isZuck;
        $this->isSubheader = $isSubheader;
        $this->bodyClass = $bodyClass;
        $this->activelink = $activelink;

    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        switch($this->layout){

            case 'withoutrightsidebar':
                return view('layouts.withoutrightsidebar');
                break;
            case 'withoutleftsidebar':
                return view('layouts.withoutleftsidebar');
                    break;
            case 'chatlayout':
                return view('layouts.chatlayout');
                break;
            default:
                return view('layouts.dashboard');
            break;

        }
    }
}
