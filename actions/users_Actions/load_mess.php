<?php session_start();

include('C:\xampp\htdocs\projet_nft\actions\database.php');

// $DB = new connexionDB();

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    // $see_tchat = $mysql->query(
    //     "SELECT t.*, u.pseudo 
    //    FROM chat_db t
    //    LEFT JOIN users u ON u.ID_User = t.id_user
    //    WHERE t.id > ?
    //    ORDER BY date_message",
    //     array($id)
    // );
    $Id_other_user = $_GET['idreceiver'];
    // echo $Id_other_user;
    $tchat = "SELECT t.*, u.Username 
    FROM chat_db t
    LEFT JOIN users u ON u.ID_User = t.id_user
    WHERE t.id > ?
    ORDER BY date_message";
    $see_tchat = $mysql->prepare($tchat);
    $see_tchat->execute(array($id));
    // $see_tchat = $see_tchat->fetch();

    $see_tchat = $see_tchat->fetchAll();
    // var_dump($see_tchat);
    if (count($see_tchat) > 0) {

        foreach ($see_tchat as $st) {

            $date_message = date_create($st['date_message']);
            $date_message = date_format($date_message, 'd M Y à H:i:s');

            if (isset($_SESSION['ID_User']) && $st['id_user'] == $_SESSION['ID_User'] && $Id_other_user == $st['id_receiver']) {
?>
                <div style="float: right;width: auto; max-width: 80%; margin-right: 26px;position: relative;padding: 7px 20px;color: #fff;background: #0B93F6;border-radius: 5px;margin-bottom: 15px; clear: both">

                    <span id="<?= $st['id'] ?>"><?= nl2br($st['message']) ?></span>

                    <div style="font-size: 10px; text-align: right; margin-top: 10px">Par <?= $st['Username'] ?>, le <?= $date_message ?></div>
                </div>
            <?php } else if ($st['id_user'] == $Id_other_user && $st['id_receiver'] == $_SESSION['ID_User']) { ?>
                <div style="position: relative;padding: 7px 20px;background: #E5E5EA;border-radius: 5px;color: #000;float: left;width: auto; max-width: 80%; margin-left: 10px;margin-bottom: 15px; clear: both">

                    <span id="<?= $st['id'] ?>"><?= nl2br($st['message']) ?></span>

                    <div style="font-size: 10px; text-align: right; margin-top: 10px">Par <?= $st['Username'] ?>, le <?= $date_message ?></div>
                </div>
        <?php         }
        }
        ?><script>
            document.getElementById('msg').scrollTop = document.getElementById('msg').scrollHeight;
        </script>
<?php
    }
}
?>