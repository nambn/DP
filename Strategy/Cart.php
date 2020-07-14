<?php

class Cart
{
    private PaymentStrategy $paymentMethod;

    public function pay()
    {
        $this->paymentMethod->performPay();
    }

    public function setPaymentMethod(PaymentStrategy $p){
        $this->paymentMethod = $p;
    }
}
