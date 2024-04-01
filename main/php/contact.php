<?php

// Email recipient
$EmailTo = "YASHASVI.SHARMA2019@GMAIL.COM";

$errors = "";

// Name
if (empty($_POST["name"])) {
    $errors .= "Name is required ";
} else {
    $name = $_POST["name"];
}

// Email
if (empty($_POST["email"])) {
    $errors .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errors .= "Subject is required ";
} else {
    $Subject = $_POST["subject"];
}

// Message
if (empty($_POST["message"])) {
    $errors .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// If there are errors, stop processing and display them
if (!empty($errors)) {
    echo $errors;
    exit;
}

// Prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// Send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// Redirect to success page
if ($success){
   echo 'success';
} else {
    echo 'An error occurred while sending the email.';
}
?>
