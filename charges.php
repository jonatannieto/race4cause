<html>
 <head>
  <title>Stripe Test</title>
 </head>
 <body>
 <?php
 echo '<p>Start payment</p>';
 require_once('vendor/autoload.php');
 // Set your secret key: remember to change this to your live secret key in production
 // See your keys here: https://dashboard.stripe.com/account/apikeys
 \stripe\Stripe::setApiKey($stripe['sk_test_tTyL4fH2P7x2dRYHXjm66tBe']);
 echo '<p>Api key setted</p>';
 // Get the credit card details submitted by the form
 $token = $_POST['stripeToken'];
 // Create a charge: this will charge the user's card
 try {
     echo '<p>Creating charge</p>';
     $charge = \stripe\Charge::create(array(
         "amount" => 2000,
         "currency" => "eur",
         "source" => $token,
         "description" => "2 widgets"
     ));
     echo '<p>Succesful</p>';
 } catch(\stripe\Error\Card $e) {
   // The card has been declined
   echo '<p>Payment declined</p>';
 }
 ?>
 </body>
</html>