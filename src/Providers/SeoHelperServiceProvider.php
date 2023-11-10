<?php

namespace Admingate\SeoHelper\Providers;

use Admingate\Base\Traits\LoadAndPublishDataTrait;
use Admingate\SeoHelper\Contracts\SeoHelperContract;
use Admingate\SeoHelper\Contracts\SeoMetaContract;
use Admingate\SeoHelper\Contracts\SeoOpenGraphContract;
use Admingate\SeoHelper\Contracts\SeoTwitterContract;
use Admingate\SeoHelper\SeoHelper;
use Admingate\SeoHelper\SeoMeta;
use Admingate\SeoHelper\SeoOpenGraph;
use Admingate\SeoHelper\SeoTwitter;
use Illuminate\Support\ServiceProvider;

/**
 * @since 02/12/2015 14:09 PM
 */
class SeoHelperServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->bind(SeoMetaContract::class, SeoMeta::class);
        $this->app->bind(SeoHelperContract::class, SeoHelper::class);
        $this->app->bind(SeoOpenGraphContract::class, SeoOpenGraph::class);
        $this->app->bind(SeoTwitterContract::class, SeoTwitter::class);

        $this->setNamespace('packages/seo-helper')
            ->loadHelpers();
    }

    public function boot(): void
    {
        $this
            ->loadAndPublishConfigurations(['general'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->publishAssets();

        $this->app->register(EventServiceProvider::class);
        $this->app->register(HookServiceProvider::class);
    }
}
