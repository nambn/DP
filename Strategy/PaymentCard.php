<?php
require_once 'PaymentStrategy.php';

class PaymentCard extends PaymentStrategy
{
    public function performPay()
    {
        echo 'Pay with credit card. Meh.' . PHP_EOL;
    }
}
