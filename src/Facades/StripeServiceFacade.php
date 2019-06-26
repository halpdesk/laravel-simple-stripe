<?php

namespace Halpdesk\LaravelSimpleStripe\Facades;


use Illuminate\Support\Facades\Facade;

class StripeServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LaravelSimpleStripeFacade';
    }
}
