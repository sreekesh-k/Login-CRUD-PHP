<?php
$sname = "localhost";
$username = "root";
$pass = "";
$dbname = "samTest";

$conn = new mysqli($sname, $username, $pass, $dbname);
if ($conn->connect_error) {
    echo "Connection Error" . $conn->connect_error;
} else {
    //echo "Connection Success";
}
