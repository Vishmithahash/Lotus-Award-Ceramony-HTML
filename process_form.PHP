<?php

$servername="localhost";
    $username="root";
    $password="";
    $database="sponsorpay";
    

    //create connection
    $conn= new mysqli($servername, $username, $password, $database);
    
    //check connection
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
    }
// Check if the form is submitted


$servername="localhost";
    $username="root";
    $password="";
    $database="sponsorpay";
    

    //create connection
    $conn= new mysqli($servername, $username, $password, $database);
    
    //check connection
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
    }
if(isset($_POST["submit"])){
    // Retrieve form data
  
    $full_Name = $_POST["full_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip_Code = $_POST["zip_code"];
    $name_On_Card = $_POST["name_on_card"];
    $credit_Card_Number = $_POST["credit_card_number"];
    $exp_Month = $_POST["exp_month"];
    $exp_Year = $_POST["exp_year"];
    $cvv = $_POST["cvv"];
	
	$query = "INSERT INTO sponsors VALUES('$full_Name', '$email', '$address', '$city', '$state', '$zip_Code', '$name_On_Card', '$credit_Card_Number', '$exp_Month', '$exp_Year', '$cvv')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}

   
?>
