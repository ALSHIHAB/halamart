<?php

namespace App\View\Components\Home;

use App\Models\Setting;
use Illuminate\View\Component;

class Slider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $slides = Setting::where('name', 'slider_images')->first();
        $slides = json_decode($slides->value);
        // foreach ($slides as $slide)
        //     dd($slide);
        return view('components.home.slider', compact('slides'));
    }
}