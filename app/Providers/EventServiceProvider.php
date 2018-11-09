<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use App\Cat;
use App\Breed;
use Illuminate\Auth\Events\Registered;
use App\Observers\BreedObserver;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

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
        parent::boot();
        Breed::observe(new BreedObserver);

        // Breed::create(function($breed) {
        //     $breed->users()->create(['name' => 'cat-event-2']);
        // })
    }
}
