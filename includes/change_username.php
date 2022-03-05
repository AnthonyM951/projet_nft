<?php
// include('../actions/users_Actions/changeUsernameAction.php');
if (isset($_SESSION['ID_User'])) { ?>
    <!-- <div id="userform" style="display: none;"> -->
    <form method="post" id="userform" style="display: none;">
        <div class="form_container">
            <h4>New Username:</h4>
            <input type="text" class="msg input" id="form" name="username" value="<?php
                                                                                    if (isset($username)) {
                                                                                        echo $username;
                                                                                    }
                                                                                    ?>">
            <!-- <input type="text" class="msg" id="message"> -->

            <input class="btn" type="submit" name="submit_username" id="form" value="SEND">
            <?php if (isset($errorMsg_Username)) {
                echo "<font color=red>" . $errorMsg_Username . "</font>";
            } ?>
            <?php if (isset($error_Msg_emptyuser)) {
                echo "<font color=red>" . $error_Msg_emptyuser . "</font>";
            } ?>
        </div>
    </form>
    <!-- </div> -->

<?php   } ?>