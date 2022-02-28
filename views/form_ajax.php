<?php
$product = 1950;
echo $product;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation_ydays</title>
    <!-- <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/secure.css"> -->
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
    <button id='btn'>Connect</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        var pricetag = <?php echo $product ?>;
        // console.log(pricetag);
        // var data = {
        //     "price": pricetag
        // };
        // JSON.stringify({
        //                 "price": pricetag
        //             })
        // var dataplus = JSON.stringify(data);
        // console.log(dataplus);
        // console.log(pricetag);
        $(document).ready(function() {
            $('#btn').click(function(e) {
                // e.preventDefault();
                $.get({
                    url: './test.php?product=' + pricetag,
                    type: 'GET',
                    dataType: "html",
                    success: function(data) {
                        // $("#message_recept").append(data);
                        window.open("test.php?product=" + pricetag)
                    }
                });

            });
        });
    </script>
</body>

</html>