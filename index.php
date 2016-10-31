<?php

require __DIR__ .'/vendor/autoload.php';

$payPal = new \Vendor\homework\PaymentSystems\PayPal();
$webMoney = new \Vendor\homework\PaymentSystems\WebMoney();
$yandexMoney = new \Vendor\homework\PaymentSystems\YandexMoney();

$paymentSystem = new \Vendor\homework\PaymentService\paymentService();


$paymentSystem->payment($payPal);
echo "<br>";
$paymentSystem->payment($webMoney);
echo "<br>";
$paymentSystem->payment($yandexMoney);

