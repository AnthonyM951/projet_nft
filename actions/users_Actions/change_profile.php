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
    if (isset($_POST['submit_username'])) {
        $username = htmlspecialchars($_POST['username']); //Username
        $req_Username_Exists = User_exists($username, "Username");
        if (!empty($_POST['username'])) {
            if ($req_Username_Exists->rowCount() == 0 and final_Verification($username, "Username", 2, 20) == "true") {
                // $test_include = $_SESSION['Username'];
                // echo $test_include;

                $insertusername = $mysql->prepare("UPDATE users SET username = ? WHERE ID_User = ?");
                $insertusername->execute(array($username, $_SESSION['ID_User']));
                // var_dump($insertusername);
                $_SESSION['Username'] = $username;
            }
            //getting the error messages to display
            else if ($req_Username_Exists->rowCount() > 0) {
                $errorMsg_Username = " Username $username already exists !!";
            } else if (final_Verification($username, "Username", 2, 20) != "true") {
                $errorMsg_Username = final_Verification($username, "Username", 2, 20);
                $username = htmlspecialchars($_POST['username']);
            }
        } else {
            $error_Msg_emptyuser = "Please fill in all the information";
        }
    }
    // $error_Msg_emptymail = "";

    if (isset($_POST['submit_mail'])) {
        $error_Msg_emptymail = "";
        if (!empty($_POST['mail'])) {
            $mail = htmlspecialchars($_POST['mail']); //User's mail
            $req_Mail_Exists = User_exists($mail, "Mail");
            if ($req_Mail_Exists->rowCount() == 0) {
                // $test_include = $_SESSION['Mail'];
                // echo $test_include;

                $insertmail = $mysql->prepare("UPDATE users SET Mail = ? WHERE ID_User = ?");
                $insertmail->execute(array($mail, $_SESSION['ID_User']));
                $_SESSION['Mail'] = $mail;
            } else if ($req_Mail_Exists->rowCount() > 0) {
                $errorMsg_Mail = " $mail already exists";
                $mail = htmlspecialchars($_POST['mail']); //User's mail
            }
        } else {
            echo 'ok';
            $error_Msg_emptymail = "Please fill in all the information";
        }
    }
    if (isset($_POST['submit_password'])) {

        if (!empty($_POST['password']) and !empty($_POST['confirm_Password'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //user password encrypted
            $password_verif = htmlspecialchars($_POST['password']); //password that will be passed as parameter because the real password is being encrypted
            $password_confirm = htmlspecialchars($_POST['confirm_Password']); //password confirmation
            if (final_Verification($password_verif, "mot de passe", 8, 25) == "true" and final_Verification($password_confirm, "mot de passe", 8, 25) == "true" and $password_verif == $password_confirm) {

                if ($password_verif == $password_confirm) {
                    // $test_include = $_SESSION['Passwd'];
                    // echo $test_include;
                    $insertmdp = $mysql->prepare("UPDATE users SET Passwd = ? WHERE ID_User = ?");
                    $insertmdp->execute(array($password, $_SESSION['ID_User']));
                    echo $password;
                }
            } else if ($password_verif != $password_confirm) {
                $error_Passwd = "Confirm your password !!";
                // echo 'yes';
            } else if (final_Verification($password_verif, "password", 8, 25) != "true") {
                $error_Passwd = final_Verification($password_verif, "password", 8, 25);
            }
        } else {
            // echo 'yes';
            $error_Msg_password = "Please fill in all the information";
        }
        // echo 'yes';
    }

    // }
}
