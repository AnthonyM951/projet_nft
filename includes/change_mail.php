<?php
// include('../actions/users_Actions/changeMailAction.php');
if (isset($_SESSION['ID_User'])) { ?>

    <form method="post" id="mailform" style="display: none;">
        <div class="form_container">
            <h4>New email:</h4>
            <input type="email" class="msg input" id="form" name="mail" value="<?php
                                                                                if (isset($mail)) {
                                                                                    echo $mail;
                                                                                }
                                                                                ?>">
            <!-- <input type="text" class="msg" id="message"> -->

            <input class="btn" type="submit" id="form" name="submit_mail" value="SEND">
            <?php if (isset($errorMsg_Mail)) {
                echo "<font color=red>" . $errorMsg_Mail . "</font>";
            } ?>
            <?php if (isset($error_Msg_emptymail)) {
                echo "<font color=red>" . $error_Msg_emptymail . "</font>";
            } ?>
        </div>
    </form>

<?php   } ?>