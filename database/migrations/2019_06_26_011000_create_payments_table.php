<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Halpdesk\LaravelSimpleStripe\Contracts\Payment;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Instantiate to get table info
        $payment = app(Payment::class);

        Schema::create($payment->getTable(), function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('payment_id')->nullable();

            // Timestamps
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $payment = app(Payment::class);
        Schema::dropIfExists($payment->getTable());
    }
}
