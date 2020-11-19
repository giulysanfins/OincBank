<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Yahp\Services\ModuleService;

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
    public function boot(ModuleService $moduleService)
    {
        $this->moduleService = $moduleService;

        view()->composer('layouts.app', function ($view) 
        {
            $view->with('modules', $this->moduleService->renderList());
        });

    }
}
