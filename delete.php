<?php
include("db_connection.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET['id'];
    $sql = "DELETE FROM items WHERE id='{$id}'";
    mysqli_query($conn, $sql);
    header("Location: welcome.php");
}
