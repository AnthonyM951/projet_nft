<?php  if (isset($_POST['submit_password'])) {

        if (!empty($_POST['actual_Password']) and !empty($_POST['password']) and !empty($_POST['confirm_Password'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //user password encrypted
            $password_verif = htmlspecialchars($_POST['password']); //password that will be passed as parameter because the real password is being encrypted
            $actual_Password = htmlspecialchars($_POST['actual_Password']); //password that will be passed as parameter because the real password is being encrypted
            $password_confirm = htmlspecialchars($_POST['confirm_Password']); //password confirmation
            if (password_verify($actual_Password, $user['Passwd']) and final_Verification($password_verif, "mot de passe", 8, 25) == "true" and $password_verif == $password_confirm) {

                    // $test_include = $_SESSION['Passwd'];
                    // echo $test_include;
                    $insertmdp = $mysql->prepare("UPDATE users SET Passwd = ? WHERE ID_User = ?");
                    $insertmdp->execute(array($password, $_SESSION['ID_User']));
                    // echo $password;
            } else if (!password_verify($actual_Password, $user['Passwd'])){
                $error_Passwd = "Verify your actual password !!";
            }else if (final_Verification($password_verif, "password", 8, 25) != "true") {
                $error_Passwd = final_Verification($password_verif, "password", 8, 25);
            }
            else if ($password_verif != $password_confirm) {
                $error_Passwd = "Confirm your password !!";
                // echo 'yes';
            } 
        } else {
            // echo 'yes';
            $error_Msg_password = "Please fill in all the information";
        }
        // echo 'yes';
    }
?>