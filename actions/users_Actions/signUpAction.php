<?php
session_start();
require('../actions/database.php');
include('../actions/Utilities.php');
//after submiting
if (isset($_POST['submit'])) {
    //verify if all the data is filled in
    if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['mail'])) {

        //getting all user data
        $username = htmlspecialchars($_POST['username']); //Username
        $mail = htmlspecialchars($_POST['mail']); //User's mail
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //user password encrypted
        $password_verif = htmlspecialchars($_POST['password']); //password that will be passed as parameter because the real password is being encrypted
        $password_confirm = htmlspecialchars($_POST['confirm_Password']); //password confirmation

        //verify if user exists in the database

        $req_Username_Exists = User_exists($username, "Username");
        $req_Mail_Exists = User_exists($mail, "Mail");

        if (
            $req_Username_Exists->rowCount() == 0 && $req_Mail_Exists->rowCount() == 0
            && final_Verification($username, "Username", 2, 20) == "true"
            && final_Verification($password_verif, "mot de passe", 8, 25) == "true"
            && $password_verif == $password_confirm
        ) {
            //inserting user data
            $req_Add_User = $mysql->prepare('INSERT INTO users(Username,Passwd,Mail) VALUES(?, ?, ?)');
            $req_Add_User->execute(array($username, $password, $mail));
            $getInfosOfThisUser = $mysql->prepare('SELECT ID_User,Username,Mail from users WHERE username = ? AND mail = ?');
            $getInfosOfThisUser->execute(array($username, $mail));
            $userInfos = $getInfosOfThisUser->fetch();


            //user authentification
            $_SESSION['auth'] = true;
            $_SESSION['ID_User'] = $userInfos['ID_User'];
            $_SESSION['Username'] = $userInfos['Username'];
            $_SESSION['Passwd'] = $userInfos['Passwd'];
            $_SESSION['Mail'] = $userInfos['Mail'];

            //after all's done we head back to home page
            header('Location: index.php');
        } else { //there is an error

            //getting the error messages to display
            if ($req_Username_Exists->rowCount() > 0) {
                $errorMsg_Username = " Username $username already exists !!";
            } else if (final_Verification($username, "Username", 2, 20) != "true") {
                $errorMsg_Username = final_Verification($username, "Username", 2, 20);
            }
            if (final_Verification($password_verif, "password", 8, 25) != "true") {
                $error_Passwd = final_Verification($password_verif, "password", 8, 25);
            } else if ($password_verif != $password_confirm) {
                $error_Passwd = "Confirm your password !!";
            }
            if ($req_Mail_Exists->rowCount() > 0) {
                $errorMsg_Mail = " $mail already exists";
            }
        }
    } else { //data not filled 
        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $password_verif = htmlspecialchars($_POST['password']);
        $error_Msg = "Please fill in all the information";
    }
}
