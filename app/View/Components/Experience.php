<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class Experience extends Component
{
    public function __construct(
        public string $experience,
        public string $time,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.experience');
    }
}
