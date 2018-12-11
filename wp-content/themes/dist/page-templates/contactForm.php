<?php
if (isset($_POST['submit'])) {
    $company = $_POST['company'];
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "oliver.lauridsen@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n"."Phone number: ".$phone."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: thankyou.html?mailsend");
}

?>