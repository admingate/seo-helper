<?php

namespace Admingate\SeoHelper\Facades;

use Admingate\SeoHelper\SeoHelper;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\SeoHelper\SeoHelper
 * @since 02/12/2015 14:08 PM
 */
class SeoHelperFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SeoHelper::class;
    }
}
