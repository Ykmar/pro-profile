<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class Skill extends Component
{
    public function __construct(
        public string $icon,
        public string $skill,
        public string $background,
        public string $border
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.skill');
    }
}
