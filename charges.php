<html>
 <head>
  <title>Stripe Test</title>
 </head>
 <body>
 <?php
 echo '<p>Start payment</p>';
 // Set your secret key: remember to change this to your live secret key in production
 // See your keys here: https://dashboard.stripe.com/account/apikeys
 require_once('Stripe/lib/Stripe.php');
  echo '<p>1</p>';
 Stripe::setApiKey("sk_test_tTyL4fH2P7x2dRYHXjm66tBe");
 echo '<p>2</p>';
 // Get the credit card details submitted by the form
 $token = $_POST['stripeToken'];
 echo '<p>3</p>';
 // Create a charge: this will charge the user's card
 try {
   $charge = Stripe_Charge::create(array(
     "amount" => 2000, // Amount in cents
     "currency" => "eur",
     "source" => $token,
     "description" => "2 widgets"
     ));
     echo '<p>Succesful</p>';
 } catch(Stripe_CardError $e) {
   // The card has been declined
   echo '<p>Payment declined</p>';
 }
 ?>
 </body>
</html>