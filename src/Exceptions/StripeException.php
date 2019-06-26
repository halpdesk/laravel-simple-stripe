<?php

namespace Halpdesk\LaravelSimpleStripe\Exceptions;

use Exception;
use Halpdesk\LaravelSimpleStripe\Contracts\Exception as LaravelSimpleStripeExceptionContract;

class StripeException extends Exception implements LaravelSimpleStripeExceptionContract {

}
