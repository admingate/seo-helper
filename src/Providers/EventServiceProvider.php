<?php

namespace Admingate\SeoHelper\Providers;

use Admingate\Base\Events\CreatedContentEvent;
use Admingate\Base\Events\DeletedContentEvent;
use Admingate\Base\Events\UpdatedContentEvent;
use Admingate\SeoHelper\Listeners\CreatedContentListener;
use Admingate\SeoHelper\Listeners\DeletedContentListener;
use Admingate\SeoHelper\Listeners\UpdatedContentListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UpdatedContentEvent::class => [
            UpdatedContentListener::class,
        ],
        CreatedContentEvent::class => [
            CreatedContentListener::class,
        ],
        DeletedContentEvent::class => [
            DeletedContentListener::class,
        ],
    ];
}
