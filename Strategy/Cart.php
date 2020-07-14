<?php

class Cart
{
    private ?PaymentStrategy $paymentMethod = null;

    public function pay()
    {
        if ($this->paymentMethod) {
            $this->paymentMethod->performPay();
        } else {
            echo 'You have not set up payment method for the cart' . PHP_EOL;
        }
    }

    public function setPaymentMethod(PaymentStrategy $p)
    {
        $this->paymentMethod = $p;
    }
}
