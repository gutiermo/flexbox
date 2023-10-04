<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "gutiermo@kean.edu";
    $subject = "New Form Submission";

    $email = $_POST["email"];
    $message = $_POST["message"];


    mail($to, $subject, $message, "From: $email");

    header("index.html");
    exit;
}
?>
