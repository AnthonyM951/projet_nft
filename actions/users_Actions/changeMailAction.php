<?php if (isset($_POST['submit_mail'])) {
        $error_Msg_emptymail = "";
        if (!empty($_POST['mail'])) {
            $mail = htmlspecialchars($_POST['mail']); //User's mail
            $req_Mail_Exists = User_exists($mail, "Mail");
            if ($req_Mail_Exists->rowCount() == 0) {
                // $test_include = $_SESSION['Mail'];
                // echo $test_include;
                $mail_Session=$mail;
                $insertmail = $mysql->prepare("UPDATE users SET Mail = ? WHERE ID_User = ?");
                $insertmail->execute(array($mail, $_SESSION['ID_User']));
                $_SESSION['Mail'] = $mail_Session;
                $mail="";
            } else if ($req_Mail_Exists->rowCount() > 0) {
                $errorMsg_Mail = " $mail already exists";
                $mail = htmlspecialchars($_POST['mail']); //User's mail
            }
        } else {
            echo 'ok';
            $error_Msg_emptymail = "Please fill in all the information";
        }
    }
    ?>