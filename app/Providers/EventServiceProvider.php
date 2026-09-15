<?php

namespace App\Providers;

use Heritage\Auth\Events\Registered;
use Heritage\Auth\Listeners\SendEmailVerificationNotification;
use Heritage\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Heritage\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
