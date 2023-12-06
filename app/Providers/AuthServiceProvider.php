<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\BbPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Models\Bb' => 'App\Policies\BbPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

    }

}
