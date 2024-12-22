<?php

namespace App\View\Components\From;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        // Returning a string directly within Blade syntax
        return <<<'blade'
            <div>
                 Let all your things have their places; let each part of your business have its time. - Benjamin Franklin
            </div>
        blade;

    }
}
