<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    public  $text;
    public  $style;

    /**
     * Create a new component instance.
     * Property can be null
     */
    public function __construct($text = null, $style = null)
    {
        $this->text = $text;
        $this->style = $style;
    }

    /**
     * Get the views / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
