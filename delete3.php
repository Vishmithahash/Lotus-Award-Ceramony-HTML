<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername="localhost";
    $username="root";
    $password="";
    $database="user";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);
    
    $sql = "DELETE FROM faq WHERE id=$id";
    $connection->query($sql);
}

header("location: /ushara/faq2.php");
exit;

?>