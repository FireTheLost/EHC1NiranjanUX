<?php

//Opens a connection to the external database for the user forum to use

$servername = "sql6.freemysqlhosting.net";
$username = "sql6426863";
$password = "4931S1EzPT";
$name = "sql6426863";

$conn = mysqli_connect($servername, $username, $password, $name);

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}