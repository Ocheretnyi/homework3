<?php

namespace Vendor\homework\PaymentSystems;

class PayPal implements PaymentSystemsInterface
{
    public function payment()
    {
            echo "Система платеж успешно провела!!!";
    }
}