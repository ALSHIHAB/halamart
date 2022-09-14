<?php

namespace App\Providers;

use App\Models\Setting;
use App\View\Components\CustomerLayout;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Blade::component('customer-layout', CustomerLayout::class);

        config([
            'global' => Setting::pluck('value', 'name')->all()
            //->keyBy('name') // key every setting by its name
            // ->transform(function ($setting) {
            //     return $setting->value; // return only the value
            // })
            //->toArray() // make it an array
        ]);
    }
}