<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public function __construct(public string $title,public $data)
    {
        // $this->text = "Ddd";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
