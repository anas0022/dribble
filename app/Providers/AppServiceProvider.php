<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('specialcharactore', function ($attribute, $value, $parameters, $validator) {
            // Define your validation logic here
            return preg_match('/[^\w\s]/', $value); // Example: Check if value contains special characters
        });
    }
}
