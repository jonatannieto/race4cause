<?php
    require_once('vendor/autoload.php');
    
    $stripe = array(
        "secret_key"      => "sk_test_tTyL4fH2P7x2dRYHXjm66tBe",
        "publishable_key" => "pk_test_eECtzyNCYJofAgrmIu7QKchn"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>