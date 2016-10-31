<?php

namespace Vendor\homework\PaymentSystems;

interface PaymentSystemsInterface
{
    /**
     * реализует механизм оплаты
     * @return mixed
     */
    public function payment();
}