<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class Experience extends Component
{
    public function __construct(
        public array $experience,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.experience');
    }
}
