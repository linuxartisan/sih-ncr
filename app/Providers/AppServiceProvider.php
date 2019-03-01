<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
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
        /*
         * Get the current path
         */
        $current_path = request()->path();
        View::share('current_path', $current_path);


        // @TODO remove this for performance reasons
        DB::listen(function($query){
            Log::info(
                $query->sql,
                $query->bindings,
                $query->time
            );
        });
    }
}
