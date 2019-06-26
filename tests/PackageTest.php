<?php

namespace Halpdesk\LaravelSimpleStripe\Tests;

use Halpdesk\LaravelSimpleStripe\Facades\StripeServiceFacade;
use Halpdesk\LaravelSimpleStripe\StripeService;
use Halpdesk\LaravelSimpleStripe\Contracts\Payment as PaymentContract;
use Halpdesk\LaravelSimpleStripe\Models\Payment;

class PackageTest extends TestCase
{

    public function setUp() : void
    {
        parent::setUp();
    }

    /**
     * @group package-test
     */
    public function testStripeServiceFacade()
    {
        $stripeService = get_class(new StripeService);
        $stripeServiceFacadeRoot = get_class(StripeServiceFacade::getFacadeRoot());
        $this->assertEquals($stripeService, $stripeServiceFacadeRoot);
    }

    /**
     * @group package-test
     */
    public function testConcreteBindingResolutions()
    {
        $payment = get_class(new Payment);
        $paymentConreteResolved = get_class(app(PaymentContract::class));
        $this->assertEquals($payment, $paymentConreteResolved);
    }

    /**
     * @group package-test
     */
    public function testDatabaseMigrationsWithFactories()
    {
        factory(Payment::class)->create();

        $this->assertDatabaseHas('payments', [
            'id' => 1
        ]);
    }


}
