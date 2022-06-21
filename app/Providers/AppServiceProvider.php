<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;

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
        $this->trainingList = DB::table('trainings')
            ->latest()
            ->get();

        view()->composer('app.trainingevents', function($view) {
            $view->with(['trainings' => $this->trainingList]);
        });
    }
}
