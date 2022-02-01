<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
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

        //Post Auther Check
        Gate::define('isPostAuth',fn ($user,$post) => $user->id === $post->user_id);


        //Comment Auther Check
        Gate::define('isCommentAuth',fn ($user,$comment) => $user->id === $comment->user_id);


    }
}