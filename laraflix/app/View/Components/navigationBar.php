<?php

namespace App\View\Components;

use Closure;
use App\Models\Profile;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class navigationBar extends Component
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
        return view('components.navigation-bar', ['profile' => Profile::find(session()->get('profile'))]);
    }
}
