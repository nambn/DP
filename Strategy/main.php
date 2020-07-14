<?php

require_once 'Cart.php';
require_once 'PaymentCard.php';
require_once 'PaymentWallet.php';
require_once 'PaymentMomo.php';

$cart = new Cart();
$cart->setPaymentMethod(new PaymentWallet());
$cart->pay();
$cart->setPaymentMethod(new PaymentMomo());
$cart->pay();