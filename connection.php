<!-- Dat base connection (using OOP method) -->
<?php
$con=mysqli_connect("localhost", "root", "", "voting");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}


?>
