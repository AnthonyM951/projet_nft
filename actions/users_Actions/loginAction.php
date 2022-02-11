<?php 
require ('../actions/database.php');
if (isset($_POST['submit'])){
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $userdata = htmlspecialchars($_POST['username']); //Email or Username
        $password = htmlspecialchars($_POST['password']); //password

        //verify if user exists
        $req_User_Exists = $mysql->prepare("SELECT * FROM users WHERE Mail= ? OR Username= ? ");
        $req_User_Exists->execute(array($userdata, $userdata));
        //if user exists we verify if the password is correct
        if ($req_User_Exists->rowCount() > 0) {
            $userInfos = $req_User_Exists->fetch();
            if (password_verify($password, $userInfos['Passwd'])) {

                //user authentification
                $_SESSION['auth'] = true;
                $_SESSION['ID_User'] = $userInfos['ID_User'];
                $_SESSION['Username'] = $userInfos['Username'];
                $_SESSION['Passwd'] = $userInfos['Passwd'];
                $_SESSION['Mail'] = $userInfos['Mail'];
                header('Location: index.php');
            } else { //wrong password
                $error_Msg = "verify your information";
            }
        } else { //user dosen't exist
            $error_Msg = "verify your information";
        }
    }else{
        $userdata = htmlspecialchars($_POST['username']); //Email or Username
        $password = htmlspecialchars($_POST['password']); 
        $error_Msg= "Please fill the form";
    }
}