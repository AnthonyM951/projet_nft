<?php
// include('../actions/users_Actions/changePasswordAction.php');
if (isset($_SESSION['ID_User'])) { ?>

    <form method="post" id="passform" style="display: none;">
        <div class="form_container_pass">

            <h4>Actual Password : </h4>
            <input type="password" class="input" id="form" name="actual_Password" value="<?php if (isset($actual_Password)) {
                                                                                                echo $actual_Password;
                                                                                            } ?>">
            <h4>New password:</h4>
            <input type="password" class="input" id="form" name="password" value="<?php if (isset($password_verif)) {
                                                                                        echo $password_verif;
                                                                                    } ?>">


            <h4>Confirm new password:</h4>
            <input type="password" class="input" id="form" name="confirm_Password" value="<?php if (isset($password_confirm)) {
                                                                                                echo $password_confirm;
                                                                                            } ?>">
            <!-- <input type="text" class="msg" id="message"> -->

            <input class="btn" type="submit" name="submit_password" id="form_password" value="SEND">
            <?php if (isset($error_Passwd)) {
                echo "<font color=red>" . $error_Passwd . "</font>";
            } ?>
            <?php if (isset($error_Msg_password)) {
                echo "<font color=red>" . $error_Msg_password . "</font>";
            } ?>
        </div>
    </form>

<?php   } ?>