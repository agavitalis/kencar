<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->registerGates();
    }

    /**
     * Define gates
     */
    public function registerGates()
    {
        Gate::before(function (User $user) {
            if ($user->isAuthorizedForRoles('administrator')) {
                return true;
            }
        });

        Gate::define('moderate', function (User $user) {
            return $user->isAuthorizedForRoles(['moderator', 'administrator']);
        });

        Gate::define('access-users', function (User $user) {
            return $user->isAuthorizedForRoles('administrator');
        });

        Gate::define('access-vehicles', function (User $user) {
            return $user->isAuthorizedForRoles(['moderator', 'administrator']);
        });
    }
}
