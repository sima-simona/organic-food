<?php
if (isset($_POST['submit'])) {
    include_once 'db.inc.php';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


if(empty($name) || empty($email) || empty($message)) {
    header ("Location: ../index.php?contact=empty");
    exit ();
} else {
    if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $message )) {
        header ("Location: ../index.php?contact=invalid");
        exit();
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header ("Location: ../index.php?contact=invalidemail");
            exit();
        } else {
            $sql = "INSERT INTO feedback (name, email, message)
            VALUES('$name', '$email' , '$message'); ";
            mysqli_query($conn, $sql);
            header( "Location: ../index.php?contact=success");
            exit ();
        }
    }
}
} else {
    header ("Location: ../index.php");
    exit();
}