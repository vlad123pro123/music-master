<?php

namespace App\View\Components;

use App\Models\Artist;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\Component;

class Catalog extends Component
{
    /**
     * @var string
     */
    private string $all = 'all';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog');
    }
}
