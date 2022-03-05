<?php
// session_start();
include('../actions/users_Actions/change_profile.php');
include('../actions/users_Actions/change_picture.php');
include('../actions/users_Actions/changeUsernameAction.php');
include('../actions/users_Actions/changeMailAction.php');
include('../actions/users_Actions/changePasswordAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation_ydays</title>
    <link rel="stylesheet" href="../assets/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100;500&display=swap" rel="stylesheet"> -->
</head>
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> -->

<body>
    <!-- <header class="navbar">
        <div class="navbar__container">
            <div class="navbar__logo">
                <a href="index.php"><img src="../assets/images/logo.PNG" alt="logo_site"></a>
            </div> -->
    <!-- <input class="btn" type="submit" value="Create an Account"> -->
    <!-- <div class="navbar_connect">
                <button class="btn"><a href="login.php">LOGIN</a> </button> -->
    <!-- <a href="login.php"> <input id="connect" value="LOGIN"></a> -->
    <!-- <button class="connect">REGISTER</button> -->
    <!-- </div>

        </div>
    </header> -->
    <?php include('../includes/navbar.php') ?>


    <main>
        <div class="profile_container">
            <div class="profile_display">
                <div class="profile_picture">

                    <?php if (!empty($_SESSION['avatar'])) { ?>
                        <img src="../members/avatars/<?php echo urlencode($_SESSION['avatar']); ?>" alt="" id="avatar_picture">

                    <?php  } else { ?>
                        <img src="../assets/images/profile_pic.jpg" alt="">
                    <?php   } ?>
                    <!-- <img src="../assets/images/profile_pic.jpg" alt=""> -->
                    <div class="i_cont">
                        <form method="post" id="pictureform" enctype="multipart/form-data">
                            <input type="file" name="avatar" id="avatar" value="&#xf002;" onchange="this.form.submit()">
                            <i class="fa fa-camera" id="file-select-button"></i>
                            <!-- <input type="submit" class="fa-input" value="&#xf030; Login" /> -->
                        </form>

                    </div>
                </div>
                <div class="profile_name">
                    <h4><?php echo $_SESSION['Username'] ?></h4>
                </div>
                <?php
                if (isset($msg)) {
                    echo $msg;
                }
                ?>
            </div>
            <div class="profile_desc">
                <div class="profile_username">
                    <div class="profile_p">
                        <p>USERNAME:</p>
                        <p><?php echo $_SESSION['Username'] ?></p>


                    </div>
                    <!-- <div></div> -->
                    <div class="i_mod_input">
                        <i id="username" class="fa-solid fa-pen-to-square"></i>
                    </div>
                   <?php include ('../includes/change_username.php'); ?>
                </div>
                <hr>
                <div class="profile_email">
                    <div class="profile_p">
                        <p>EMAIL:</p>
                        <p><?php echo $_SESSION['Mail'] ?></p>

                    </div>
                    <!-- <div></div> -->
                    <div class="i_mod_input">
                        <i id="email" class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <?php include ('../includes/change_mail.php');?>
                </div>
                <hr>
                <div class="profile_password">
                    <div class="profile_p">
                        <p>PASSWORD :</p>

                    </div>
                    <!-- <div></div> -->
                    <div class="i_mod_input">
                        <i id="password" class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <?php include ('../includes/change_password.php'); ?>
                </div>
                <hr>
            </div>
        </div>
    </main>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        $('#file-select-button').click(function() {
            $('.i_cont input').click();
        });
        var divAppearuser = false;
        var divAppearmail = false;
        var divAppearpass = false;
        let btnuser = document.getElementById("username");
        let divuser = document.getElementById("userform");
        btnuser.addEventListener("click", () => {
            if (divuser.style.display === "none" && !divAppearuser && !divAppearmail && !divAppearpass) {
                divuser.style.display = "block";
                divAppearuser = true;
            } else {
                divuser.style.display = "none";
                divAppearuser = false;
            }
        });
        // var avatarnbr = 
        // 
        // ;
        // var avatarlink = "../members/avatars/" + avatarnbr;
        // document.getElementById('avatar_picture').src = avatarlink;
        // console.log(avatarlink);
        let btnmail = document.getElementById("email");
        let divmail = document.getElementById("mailform");
        btnmail.addEventListener("click", () => {
            if (divmail.style.display === "none" && !divAppearuser && !divAppearmail && !divAppearpass) {
                divmail.style.display = "block";
                divAppearmail = true;
            } else {
                divmail.style.display = "none";
                divAppearmail = false;
            }
        });
        let btnpass = document.getElementById("password");
        let divpass = document.getElementById("passform");
        btnpass.addEventListener("click", () => {
            if (divpass.style.display === "none" && !divAppearuser && !divAppearmail && !divAppearpass) {
                divpass.style.display = "block";
                divAppearpass = true;
            } else {
                divpass.style.display = "none";
                divAppearpass = false;
            }
        });
        $(document).ready(function() {

            $('#username').click(function(e) {
                // alert("bonjour");
            })

        });
    </script>
</body>


</html>