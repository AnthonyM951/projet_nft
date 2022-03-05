<?php
session_start();
require('../actions/database.php');
include('../actions/Utilities.php');

if (isset($_SESSION['ID_User'])) {
    // if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['mail'])) {
    //getting all user data

    //verify if user exists in the database
    //inserting user data
    $requser = $mysql->prepare("SELECT * FROM users WHERE ID_User = ?");
    $requser->execute(array($_SESSION['ID_User']));
    $user = $requser->fetch();
    // var_dump($user);

    //a faire pour demain: separer les if et mettre a la bonne place les variables.

    // $error_Msg_emptymail = "";
//start mail
     //end mail
    //change password
     //end password

    // }
}
