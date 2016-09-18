<html>
 <head>
  <title>Stripe Test</title>
 </head>
 <body>
 <?php
 echo '<p>Start payment</p>';
 // Set your secret key: remember to change this to your live secret key in production
 // See your keys here: https://dashboard.stripe.com/account/apikeys
 \Stripe\Stripe::setApiKey("sk_test_tTyL4fH2P7x2dRYHXjm66tBe");
 echo '<p>Api key setted</p>';
 // Get the credit card details submitted by the form
 $token = $_POST['stripeToken'];
 // Create a charge: this will charge the user's card
 try {
     echo '<p>Creating charge</p>';
     $charge = \Stripe\Charge::create(array(
         "amount" => 2000,
         "currency" => "eur",
         "source" => $token,
         "description" => "2 widgets"
     ));
     echo '<p>Succesful</p>';
 } catch(\Stripe\Error\Card $e) {
   // The card has been declined
   echo '<p>Payment declined</p>';
 }
 ?>
 </body>
</html>