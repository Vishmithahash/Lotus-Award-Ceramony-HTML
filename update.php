<?php
$servername="localhost";
$username="root";
$password="";
$database="ushara";


//create connection
$connection = new mysqli($servername, $username, $password, $database);

//check connection
if($connection->connect_error){
  die("Connection failed:" . $connection->connect_error);
}
?>


<?php


$A_ID=$_POST["A_ID"];
$Award_Name=$_POST["Award_Name"];
$Won_Actress_And_Won_Actor=$_POST["Won_Actress_And_Won_Actor"];


if(empty($A_ID) || empty($Award_Name) || empty($Won_Actress_And_Won_Actor))
{
    echo "All Required";
}
else
{
    $sql="UPDATE awards set Award_Name='$Award_Name', Won_Actress_And_Won_Actor='$Won_Actress_And_Won_Actor' WHERE A_ID = '$A_ID' ";

    if($connection->query($sql))
    {
        echo "Award Details Updated";
    }
    else
    {
        echo "Not Updated";
    }
}
?>


