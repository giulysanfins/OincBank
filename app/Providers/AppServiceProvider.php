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
            $route = Route::currentRouteName();
            if($route != 'login' && $route != 'register' && $route != 'password.request' && $route != 'password.email' && $route != 'password.update' && $route != 'password.reset')
            {
                // LEMBRE-SE
                // ALTERAR NO MIDDLWARE -> CheckPermission
                
                $admin_perm = [1,2,3,4,5,6,7];
                $user_perm = [1,5,6];
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
