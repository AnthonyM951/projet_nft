<?php
session_start();
include('../includes/navbar.php');
include('../actions/database.php');
$price = htmlspecialchars($_GET['price']);
$productName = "GYNFT COLLECTION" . ' ' . strtoupper($price);

$productPrice = 0;

if ($price == "basic") {
    $productPrice = 1950;
} else if ($price == "standard") {
    $productPrice = 3200;
} else if ($price == "premium") {
    $productPrice = 7500;
} else {

    $message = "Uncorrect price value!!!";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation_ydays</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/secure.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Stripe JavaScript library -->
    <!-- <script src="https://js.stripe.com/v3/"></script> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100;500&display=swap"
        rel="stylesheet"> -->
</head>

<body>

    <main>
        <div class="container">
            <?php if (!isset($message)) { ?>
                <div class="recipe">
                    <div class="recipe_title">
                        <h2><?php echo $productName ?></h2>
                    </div>
                    <hr>

                    <div class="recipe_desc">
                        <div class="recipe_picture">
                            <div class="picture_container"><img src="../assets/images/profile_pic.jpg" alt=""></div>

                        </div>
                        <div>
                            <h3>$<?php echo $productPrice ?></h3>
                            <h6><?php echo $productName ?></h6>
                        </div>

                    </div>
                    <hr>
                    <div class="recipe_total">
                        <h2>TOTAL TO PAY</h2>
                        <h2>$<?php echo $productPrice; ?></h2>

                    </div>

                    <button id="btn">Checkout</button>
                    <!-- <button id="test">Checkout</button> -->

                    <!-- Payment button -->

                    <!-- <form action="payment.php" method="post">
                        <input type="hidden" name="price" id="price" value="<?php echo $productPrice ?>" />


                        <input type="submit" value="Proceed to checkout">
                    </form> -->


                </div>
            <?php } else {
                echo $message;
            }
            ?>

        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        var pricetag = <?php echo $productPrice ?>;
        console.log(pricetag);
        var data = {
            "price": pricetag
        };
        // JSON.stringify({
        //                 "price": pricetag
        //             })
        var dataplus = JSON.stringify(data);
        // console.log(dataplus);
        // console.log(pricetag);
        $(document).ready(function() {
            $('#btn').click(function(e) {
                // e.preventDefault();
                $.get({
                    url: './checkout.php?product=' + pricetag,
                    type: 'GET',
                    dataType: "html",
                    success: function(data) {
                        // $("#message_recept").append(data);
                        window.open("checkout.php?product=" + pricetag)
                    }
                });
            });
        })
    </script>
    <script src="https://js.stripe.com/v3/"></script>

    <!-- <script src="js/scripts.js"></script> -->
    <script>
        const stripe = Stripe("pk_test_51KVmAzJUkguCXOlsBFAvLERhhaSRHKQQw0ExUor4NY1auCNMLFn5kvZiF0HXfV7Y46VLF54ZuORWlMHkyGuxDpCJ00DFuJVCcX")
        const btn = document.querySelector('#btn')
        btn.addEventListener('click', () => {
            fetch('checkout.php?product=' + <?php echo $productPrice ?>, {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        // 'Content-Type': 'text/html; charset=utf-8'
                    },
                    body: JSON.stringify({})
                }).then(res => res.json())
                .then(payload => {
                    stripe.redirectToCheckout({
                        sessionId: payload.id
                    })
                })
        })
    </script>
</body>


<html>