<?php
if(isset($_GET["A_ID"])){
    $A_ID = $_GET["A_ID"];

    $servername="localhost";
    $username="root";
    $password="";
    $database="ushara";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);
    
    $sql = "DELETE FROM AwardS WHERE A_ID=$A_ID";
    $connection->query($sql);
}

header("location: /ushara/admin.php");
exit;

?>