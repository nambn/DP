<?php
require_once 'PaymentStrategy.php';

class PaymentMomo extends PaymentStrategy
{
    public function performPay()
    {
        echo 'Pay with Momo using QR scan. UwU.' . PHP_EOL;
    }
}
