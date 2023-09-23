<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies(); 

        Gate::define('isModer', function ($user) {
            return $user->role == "mod";
        });
    
        Gate::define('isUser', function ($user) {
            return $user->role == "user";
        });
    
        Gate::define('isGuest', function ($user) {
            return $user->role == "guest";
        });
    }
}
