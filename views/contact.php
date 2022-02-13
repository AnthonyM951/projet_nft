<?php
session_start();
// require('../actions/users_Actions/signUpAction.php');
require('../actions/users_Actions/loginAction.php');
var_dump($_SESSION['ID_User']);
if (isset($_SESSION['ID_User'])) {
    // echo "ok";
    $requser = $mysql->prepare("SELECT * FROM users WHERE ID_User = ?");
    $requser->execute(array($_SESSION['ID_User']));
    $user = $requser->fetch();
} else {
    echo "ERROR";
}
$Id_other_user = $_GET['id'];
$see_tchat = $mysql->prepare("SELECT t.*, u.Username 
FROM chat_db t
LEFT JOIN users u ON u.ID_User = t.id_user
WHERE (t.id_user = ? AND t.id_receiver =?) OR (t.id_user = ? AND t.id_receiver =?)
ORDER BY date_message
LIMIT 100");
$see_tchat->execute(array($_SESSION['ID_User'], $Id_other_user, $Id_other_user, $_SESSION['ID_User']));

$see_tchat = $see_tchat->fetchAll();
// var_dump($see_tchat);
// var_dump($stmt);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation_ydays</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href=">css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/contact.css">
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
                <!-- <input id="connect" value="SIGN IN"> -->
                <button class="btn"><a href="signUp.php">SIGN UP</a> </button>
                <!-- <button class="connect">REGISTER</button> -->
            </div>

        </div>
    </header>


    <main>

        <div class="container">
            <div class="chatbox_container">
                <div class="chatbox_title">
                    <h1>CHATBOX de <?php if (isset($_SESSION['ID_User'])) {
                                        echo $_SESSION['Username'];
                                    } ?></h1>
                </div>
                <div class="chatbox_display" id="msg"><?php
                                                        foreach ($see_tchat as $st) {

                                                            $date_message = date_create($st['date_message']);
                                                            $date_message = date_format($date_message, 'd M Y à H:i:s');

                                                            if (isset($_SESSION['ID_User']) && $st['id_user'] == $_SESSION['ID_User']) {
                                                        ?><div class="chatbox_msg">

                                <span id="<?= $st['id'] ?>"><?= nl2br($st['message']) ?></span>

                                <div style="font-size: 10px; text-align: right; margin-top: 10px">Par <?= $st['Username'] ?>, le <?= $date_message ?></div>
                            </div><?php
                                                            } else if ($st['id_user'] == $Id_other_user) {
                                    ?><div style="position: relative;padding: 7px 20px;background: #E5E5EA;border-radius: 5px;color: #000;float: left;width: auto; max-width: 80%; margin-left: 10px;margin-bottom: 15px; clear: both">

                                <span id="<?= $st['id'] ?>"><?= nl2br($st['message']) ?></span>

                                <div style="font-size: 10px; text-align: right; margin-top: 10px">Par <?= $st['Username'] ?>, le <?= $date_message ?></div>
                            </div><?php
                                                            }
                                                        }
                                    ?><div id="message_recept"></div>
                </div>
                <div class=" chatbox_input">
                    <form method="post">
                        <input type="text" class="msg" id="message">

                        <input class="btn" type="submit" id="envoi" value="SEND">
                    </form>
                </div>



            </div>
        </div>

        <a href="logout.php">LOGOUT</a>
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
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var isopen = false;



        document.getElementById('msg').scrollTop = document.getElementById('msg').scrollHeight;

        $(document).ready(function() {
            $('#envoi').click(function(e) {
                e.preventDefault();
                var msg = encodeURIComponent($('#message').val());
                msg = msg.trim();
                $('#message').val(null);
                var link = window.location.href;
                var idIndex = link.indexOf("?id=");
                var id = link.slice(idIndex + 4);
                console.log(link);
                console.log(idIndex);
                console.log(id);
                // alert(msg);
                if (msg != "") {
                    // alert(msg);
                    // $.get("../actions/users_Actions/get_message.php?message=" + msg, {
                    //     message1: msg
                    // }, function(data) {
                    //     alert(data);
                    // });
                    $.get({
                        url: '../actions/users_Actions/get_message.php?message=' + msg + '&id=' + id,
                        type: 'GET',
                        dataType: "html",
                        success: function(data) {
                            $("#message_recept").append(data);
                        }
                    });
                    // $get({
                    //     url: '../actions/users_Actions/get_message.php?id=' + id,
                    //     type: 'GET',
                    //     dataType: "html",
                    //     success: function(data) {
                    //         $("#message_recept").append(data);
                    //     }
                    // });
                }
            })
        });
        // $('#envoi').click(function(e) {
        //     e.preventDefault();

        //     var message = encodeURIComponent($('#message').val());

        //     message = message.trim();

        //     $('#message').val(null);

        //     if (message != "") {
        //         $.ajax({
        //             url: '../actions/users_Actions/send_mess.php?message=' + message,
        //             type: 'GET',
        //             dataType: "html",
        //             success: function(data) {
        //                 $("#message_recept").append(data);
        //             }
        //         });
        //     }
        // });

        setInterval("load_mess()", 1000);

        function load_mess() {

            var lastID = $('#msg span:last').attr('id');
            var link = window.location.href;
            var idIndex = link.indexOf("?id=");
            var id = link.slice(idIndex + 4);
            // console.log(id);
            if (lastID > 0) {
                $.ajax({
                    url: '../actions/users_Actions/load_mess.php?id=' + lastID + '&idreceiver=' + id,
                    type: 'GET',
                    dataType: "html",
                    success: function(data) {
                        $("#message_recept").append(data);
                    },
                    error: function() {
                        //alert("Oops une erreur est survenue lors du chargement du message !");
                    }
                });
            }
        };

        $(document).one('focus.autoExpand', 'textarea.autoExpand', function() {
            var savedValue = this.value;
            this.value = '';
            this.baseScrollHeight = this.scrollHeight;
            this.value = savedValue;

        }).on('input.autoExpand', 'textarea.autoExpand', function() {
            var minRows = this.getAttribute('data-min-rows') | 0,
                rows;
            this.rows = minRows;
            rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 20);
            this.rows = minRows + rows;
        });
    </script>
</body>


</html>