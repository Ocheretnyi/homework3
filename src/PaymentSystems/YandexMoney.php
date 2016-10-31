<?php

namespace Vendor\homework\PaymentSystems;

class YandexMoney extends PayPal implements PaymentSystemsInterface
{
    public function payment($HeldPayment = true)
    {
        if ($HeldPayment){
            parent::payment();
        }else{
            echo "Система платеж не провела";
        }
    }
}