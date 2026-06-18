<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$EmailTo = "YASHASVI.SHARMA2019@GMAIL.COM";

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $subject === "" || $message === "") {
    echo "Please fill all required fields.";
    exit;
}

$body  = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";

$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($EmailTo, $subject, $body, $headers)) {
    echo "success";
} else {
    echo "Mail function failed.";
}
?>
