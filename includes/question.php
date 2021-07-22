<?php

include "conn.php";

$username = $_POST['name'];
$message = $_POST['message'];
$time = date("H:i:s");

if (empty($message))
{
  header("location: ../src/forum.php?error=empty");
    exit();
}

if (empty($username))
{
  $username = "Anonymous";
}


$sql="INSERT INTO forum (forumMessage, forumUser, forumTime) VALUES (?, ?, ?);";
$stmt=mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql))
{
	header("location: ../src/forum.php?error=error");
    exit();
}

  mysqli_stmt_bind_param($stmt, "sss", $message, $username, $time);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../src/forum.php?error=none");
    exit();