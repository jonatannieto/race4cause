<?php
    require_once('config.php');
    
    $token  = $_POST['stripeToken'];
    
    $customer = \Stripe\Customer::create(array(
        'email' => $customer->email,
        'source'  => $token
    ));
    
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => 5000,
        'currency' => 'eur'
    ));
    
    echo '<h1>Successfully charged $50.00!</h1>';
?>