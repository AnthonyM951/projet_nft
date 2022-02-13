<?php
session_start();
include('../database.php');
// echo 'ok';
if (isset($_SESSION['ID_User'])) {
    $mess = htmlspecialchars(trim($_GET['message']));
    // echo $mess;

    if (isset($mess) && !empty($mess)) {
        $Id_other_user = $_GET['id'];
        // echo '****' . $Id_other_user;
        $verif = "SELECT ID_User FROM users WHERE ID_User = ?";
        $verif_user = $mysql->prepare($verif);
        $verif_user->execute(array($_SESSION['ID_User']));
        $verif_user = $verif_user->fetch();
        if (isset($verif_user['ID_User'])) {
            $date_message = date('Y-m-d H:i:s');
            $sql = "INSERT INTO chat_db (id_user, message, date_message,id_receiver) VALUES (?, ?, ?,?)";
            $stmt = $mysql->prepare($sql);
            $stmt->execute(array($_SESSION['ID_User'], $mess, $date_message, $Id_other_user));
            // echo 'ok';
            $lastID = "SELECT id FROM chat_db WHERE id_user = ? ORDER BY date_message DESC LIMIT 1";
            $lastID = $mysql->prepare($lastID);
            $lastID->execute(array($_SESSION['ID_User']));
            $lastID = $lastID->fetch();

            $date_message = date_create($date_message);
            $date_message = date_format($date_message, 'd M Y à H:i:s');
            // 
?>
            <div style="float: right;width: auto; max-width: 80%; margin-right: 26px;position: relative;padding: 7px 20px;color: #fff;background: #0B93F6;border-radius: 5px;margin-bottom: 15px; clear: both"><span id="<?= $lastID['id'] ?>"><?= nl2br($mess) ?></span>
                <div style="font-size: 10px; text-align: right; margin-top: 10px">Par <?= $_SESSION['Username'] ?>, le <?= $date_message ?></div>
            </div>

            <script>
                document.getElementById('msg').scrollTop = document.getElementById('msg').scrollHeight;
            </script><?php

                    }
                }
            }
                        ?>