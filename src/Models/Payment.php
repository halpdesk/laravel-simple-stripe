<?php

namespace Halpdesk\LaravelSimpleStripe\Models;

use Illuminate\Database\Eloquent\Model;
use Halpdesk\LaravelSimpleStripe\Contracts\Payment as PaymentContract;

class Payment extends Model implements PaymentContract
{
    protected $table = 'payments';
    protected $fillable = [
        'payment_id',
    ];
}
