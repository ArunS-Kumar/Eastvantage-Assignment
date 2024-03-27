<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;
use App\Repositories\UserRepository;
use App\Http\Controllers\UserController;
use App\Services\RoleService;
use App\Repositories\RoleRepository;
use App\Http\Controllers\RoleController;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUserBindings();
        $this->registerRoleBindings();   
    }

    private function registerUserBindings()
    {
        $this->app->bind(UserRepository::class, function ($app) {
            return new UserRepository(new User());
        });
        
        $this->app->bind(UserService::class, function ($app) {
            return new UserService($app->make(UserRepository::class));
        });

        $this->app->bind(UserController::class, function ($app) {
            return new UserController($app->make(UserService::class));
        });
    }

    private function registerRoleBindings()
    {
        $this->app->bind(RoleService::class, function ($app) {
            return new RoleService($app->make(RoleRepository::class));
        });

        $this->app->bind(RoleController::class, function ($app) {
            return new RoleController($app->make(RoleService::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
