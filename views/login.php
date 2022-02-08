<!-- icons  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation_ydays</title>
    <link rel="stylesheet" href="../assets/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100;500&display=swap"
        rel="stylesheet"> -->
</head>
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> -->

<body>
    <header class="navbar">
        <div class="navbar__container">
            <div class="navbar__logo">
                <a href="index.php"><img src="../assets/images/logo.PNG" alt="logo_site"></a>
            </div>
            <!-- <input class="btn" type="submit" value="Create an Account"> -->
            <div class="navbar_connect">
                <input id="connect" value="SIGN IN">
                <!-- <button class="connect">REGISTER</button> -->
            </div>

        </div>
    </header>
    <div class=" flex-r container">
        <div class="flex-r login-wrapper">
            <div class="login-text">
                <!-- <div class="logo"> -->
                <!-- <span><i class="fab fa-speakap"></i></span>
                    <span>Coders</span> -->
                <!-- <img src="../assets/images/logo.PNG" alt="logo_site"> -->
                <!-- </div> -->
                <h1>Sign In</h1>
                <p>It's not long before you embark on this journey! </p>

                <form class="flex-c">
                    <div class="input-box">
                        <span class="label">E-mail</span>
                        <div class=" flex-r input">
                            <input type="text" placeholder="name@abc.com">
                            <i class="fas fa-at"></i>
                        </div>
                    </div>

                    <div class="input-box">
                        <span class="label">Password</span>
                        <div class="flex-r input">
                            <input type="password" placeholder="8+ (a, A, 1, #)">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>

                    <div class="check">
                        <input type="checkbox" name="" id="">
                        <span>I've read and agree with T&C</span>
                    </div>

                    <input class="btn" type="submit" value="Connect">
                    <span class="extra-line">
                        <span>Don't have an account?</span>
                        <a href="signin.php">Sign Up</a>
                    </span>
                </form>

            </div>
        </div>
    </div>
    <footer>
        <div>
            <p>
                LEGAL MENTIONS
            </p>
        </div>
        <div>
            <p>&copy; GYNFT</p>
        </div>
        <div>
            <p>
                CONTACT
            </p>
        </div>

    </footer>
</body>


</html>