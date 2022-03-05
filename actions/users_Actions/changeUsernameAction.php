<?php 
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
                $username="";
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
