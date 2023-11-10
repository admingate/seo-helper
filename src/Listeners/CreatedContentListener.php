<?php

namespace Admingate\SeoHelper\Listeners;

use Admingate\Base\Events\CreatedContentEvent;
use Exception;
use SeoHelper;

class CreatedContentListener
{
    public function handle(CreatedContentEvent $event): void
    {
        try {
            SeoHelper::saveMetaData($event->screen, $event->request, $event->data);
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
