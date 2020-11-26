<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Yahp\Services\ModuleService;
use Route;

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
            if(Route::currentRouteName() != 'login')
            {
                // LEMBRE-SE
                // ALTERAR NO MIDDLWARE -> CheckPermission
                
                $admin_perm = [1,2,3,4,5];
                $user_perm = [1,5];
                $else_perm = [];
    
                if(auth()->user()->role == 1)
                {
                    $modulos = $this->moduleService->renderByPermission($admin_perm);
                } elseif (auth()->user()->role == 2)
                {
                    $modulos = $this->moduleService->renderByPermission($user_perm);
                } else {
                    $modulos = $this->moduleService->renderByPermission($else_perm);
                }
                
                $view->with('modules', $modulos);
            }
        });

    }
}
