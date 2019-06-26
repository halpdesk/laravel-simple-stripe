<?php

namespace Halpdesk\LaravelSimpleStripe\Seeders;

use Illuminate\Database\Seeder;
use Halpdesk\LaravelSimpleStripe\Contracts\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Resolve payment class
        $payment = app(Payment::class);

        // Create payment
        $payment::create([
            'payment_id' => '1234'
        ]);
    }
}
