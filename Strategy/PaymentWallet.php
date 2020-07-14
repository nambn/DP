<?php
require_once 'PaymentStrategy.php';

class PaymentWallet extends PaymentStrategy
{
    public function performPay()
    {
        echo 'Pay with money in wallet. Untrackable.' . PHP_EOL;
    }
}
