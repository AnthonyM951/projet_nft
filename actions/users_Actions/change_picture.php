<?php
// session_start();
require('../actions/database.php');
// echo $_SESSION['ID_User'];
if (isset($_SESSION['ID_User'])) {
    if (isset($_FILES['avatar']) and !empty($_FILES['avatar']['name'])) {
        $MaxSize = 4000000;
        $Validextension = array('jpg', 'jpeg', 'gif', 'png');
        if ($_FILES['avatar']['size'] <= $MaxSize) {
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
            if (in_array($extensionUpload, $Validextension)) {
                // echo 'yes';
                $path = 'C:/xampp/htdocs/projet_nft/members/avatars/' . $_SESSION['ID_User'] . "." . $extensionUpload;
                // echo $path;
                $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
                // var_dump($result);
                if ($result) {
                    $final = $_SESSION['ID_User'] . "." . $extensionUpload;
                    // echo $final;
                    $updateavatar = $mysql->prepare('UPDATE users SET avatar = ? WHERE ID_User = ?');
                    $updateavatar->execute(array($final, $_SESSION['ID_User']));
                    $_SESSION['avatar'] = $final;
                    // echo $_FILES['avatar']['error'];
                    // 'avatar' => $_SESSION['ID_User'] . "." . $extensionUpload
                    // 'id' => $_SESSION['ID_User']
                    // ));
                    // header('Location: profile.php?id=' . $_SESSION['id']);

                    // header('Location: profile.php');
                } else {
                    $msg = "Error during profile picture import";
                }
            } else {
                $msg = "Your profile picture must be in format .jpg .jpeg .gif or .png";
            }
        } else {
            $msg = "Your profile picture must not exceed 2Mo";
        }
    }
}
