<?php

namespace Vendor\homework\PaymentService;

use Vendor\homework\PaymentSystems\PaymentSystemsInterface;

class paymentService
{
    public function payment(PaymentSystemsInterface $paymentSystem)
    {
        $paymentSystem->payment();
    }
}