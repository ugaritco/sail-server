<?php

namespace App\Http;

use Heritage\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Heritage\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Heritage\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Heritage\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Heritage\Session\Middleware\StartSession::class,
            // \Heritage\Session\Middleware\AuthenticateSession::class,
            \Heritage\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Heritage\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Heritage\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Heritage\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Heritage\Http\Middleware\SetCacheHeaders::class,
        'can' => \Heritage\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Heritage\Auth\Middleware\RequirePassword::class,
        'signed' => \Heritage\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Heritage\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Heritage\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
