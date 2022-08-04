<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('list_categories', function (User $user) {
            return $user->checkPermissionAccess('list_categories');
        });
        Gate::define('add_categories', function (User $user) {
            return $user->checkPermissionAccess('add_categories');
        });
        Gate::define('delete_categories', function (User $user) {
            return $user->checkPermissionAccess('delete_categories');
        });
    }
}
