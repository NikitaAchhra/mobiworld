<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

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
        Schema::defaultStringLength(191);
        Blade::directive('admin', function () {
            $isAuth = false;

            // check if the user authenticated is teacher
            if (auth()->user() && auth()->user()->is_admin == 1) {

                $isAuth = true;
            }

            return "<?php if ($isAuth) { ?>";
        });

        Blade::directive('endadmin', function () {
            return "<?php } ?>";
        });
    }
}
