<?php
$conn = mysqli_connect("localhost", "root", "", "user");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>