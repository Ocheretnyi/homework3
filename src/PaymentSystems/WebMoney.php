<?php

namespace Vendor\homework\PaymentSystems;

class WebMoney extends PayPal implements PaymentSystemsInterface
{
    public function payment($HeldPayment = false)
    {
        if ($HeldPayment){
            parent::payment();
        }else{
            echo "Система платеж не провела";
        }
    }
}