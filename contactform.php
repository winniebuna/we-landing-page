<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $subject = "WomENpreneurs Contact Form";
        $mailTo = "hello@womenpreneursng.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received and email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsent");
    }
?>