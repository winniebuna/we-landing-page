<?php
if($_POST["submit"]) {
    mail("gbubemimakpokpomi@gmail.com", "Form to email message", $_POST["message"], $_POST["senderEmail"],);
}
?>