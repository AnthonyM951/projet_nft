<?php
require './vendor/autoload.php';

// header('Content-Type', 'application/json');

// $json = json_decode($_POST['price']);
// $jsoned = json_decode(file_get_contents("php://input"), true);
if (isset($_GET['product'])) {
    $price = htmlspecialchars($_GET['product']);
}

// var_dump($jsoned);
// $price = $json->price;
// var_dump($json);
// $price_def = $price_prout['price'];
$stripe = new Stripe\StripeClient("sk_test_51KVmAzJUkguCXOlsgYmSPDDtQTa3H0lyT5QpZsVBvumk0CAH2OU5Vij5HWsZ7jX0qONZn4yhraDtYwFb5ENgfXm5007nTHEYIe");
$session = $stripe->checkout->sessions->create([
    "success_url" => "http://localhost:80/projet_nft/views/success.html",
    "cancel_url" => "http://localhost:80/projet_nft/views/cancel.html",
    "payment_method_types" => ['card', 'alipay', 'bancontact', 'sepa_debit'],
    "mode" => 'payment',
    "line_items" => [
        [
            "price_data" => [
                "currency" => "eur",
                "product_data" => [
                    "name" => "BASIC GYNFT PACK",
                    "description" => "GYNFT COLLECTION BASIC PACK"
                ],
                "unit_amount" => $price * 100
            ],
            "quantity" => 1
        ],


    ]
]);

echo json_encode($session);
// $json = $_POST['type'];
// var_dump($json);
