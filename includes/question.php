<?php

//Database connection
include "conn.php";

//Get posted name and message. Also generates time
$username = $_POST['name'];
$message = $_POST['message'];
$time = date("H:i:s");

//Checks if the message/name is empty
if (empty($message))
{
    header("location: ../src/forum.php?error=empty");
    exit();
}

if (empty($username))
{
    $username = "Anonymous";
}

//Escapes potentially dangerous HTML characters
$username = filter_var($username, FILTER_VALIDATE_EMAIL);
$message = filter_var($message, FILTER_VALIDATE_EMAIL)

//Inserts name/message/time into the database using safe prepared statements.
$sql = "INSERT INTO forum (forumMessage, forumUser, forumTime) VALUES (?, ?, ?);";
$stmt = mysqli_stmt_init($conn);


//Exits if error
if (!mysqli_stmt_prepare($stmt, $sql))
{
    header("location: ../src/forum.php?error=error");
    exit();
}

//Finally inserts into the database
mysqli_stmt_bind_param($stmt, "sss", $message, $username, $time);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

//Goes back to the forum
header("location: ../src/forum.php?error=none");
exit();

