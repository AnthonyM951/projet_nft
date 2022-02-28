<?php

use Stripe\Terminal\Location;

if (isset($_POST['price']) && !empty($_POST['price'])) {
    // Nous appelons l'autoloader pour avoir accès à Stripe
    require_once('vendor/autoload.php');
    $price = (float)$_POST['price'];

    // Nous instancions Stripe en indiquand la clé privée, pour prouver que nous sommes bien à l'origine de cette demande
    \Stripe\Stripe::setApiKey('sk_test_51KVmAzJUkguCXOlsgYmSPDDtQTa3H0lyT5QpZsVBvumk0CAH2OU5Vij5HWsZ7jX0qONZn4yhraDtYwFb5ENgfXm5007nTHEYIe');

    // Nous créons l'intention de paiement et stockons la réponse dans la variable $intent
    $intent = \Stripe\PaymentIntent::create([
        'amount' => $price * 100, // Le prix doit être transmis en centimes
        'currency' => 'usd',
    ]);
} else {
    header('Location: /index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

</head>

<body>
    <form method="post">

        <div id="errors"></div>
        <input id="cardholder-name" type="text" placeholder="Cardholder name">
        <div id="card-element">
        </div>
        <div id="card-errors" role="alert"></div>
        <button id="card-button" type="button" data-secret="<?= $intent['client_secret']  ?>">Validate Payment</button>
    </form>

    <script src="https://js.stripe.com/v3/"></script>
    <!-- <script type="text/javascript" src="script/payment.js"></script> -->
    <script src="js/scripts.js"></script>
</body>

</html>