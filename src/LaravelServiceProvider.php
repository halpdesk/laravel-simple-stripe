<?php

namespace Halpdesk\LaravelSimpleStripe;

use Illuminate\Support\ServiceProvider;
use Halpdesk\LaravelSimpleStripe\Contracts\Payment as PaymentContract;
use Halpdesk\LaravelSimpleStripe\StripeService;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__ . '/../config/stripe.php') => config_path('stripe.php'),
        ]);

        // Load database migrations
        $this->loadMigrationsFrom(realpath(__DIR__.'/../database/migrations/'));
    }

    public function register()
    {
        // To merge the configurations, use the mergeConfigFrom method within your service provider's register method
        $this->mergeConfigFrom(realpath(__DIR__ . '/../config/stripe.php'), 'stripe');

        // Model contracts
        $this->app->bind(PaymentContract::class, function () {
            return app(config('stripe.classes.payment'));
        });

        // Facades
        $this->app->bind('LaravelSimpleStripeFacade', function() {
            return app(StripeService::class);
        });

        // Singleton
        // $this->app->singleton(StripeService::class);
    }
}
