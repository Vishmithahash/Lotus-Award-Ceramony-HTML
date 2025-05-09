<!DOCTYPE html>
<html>
<head>
    <title>FAQ: Create Operation</title>
    <link rel="stylesheet" href="styles1/faqq.css">
</head>
<body>
<h1 class="a1">Manage Questions</h1><br><br>
<div class="container2">

  <div class="rose">
    <h2 align = "center">Add Questions</h2><br>
    <hr class="line1"><br>
    <div class="divv">
      <form  method="post">
       
    Name : <input type = "text" placeholder="name" name="name"><br><br>
    Email : <input type = "text" placeholder="email" name="email"><br><br>
    Question : <input type = "text" placeholder="question" name="question">
<br><br>
      
<button class="bttn1" type="submit" name="submit">ADD</button><br><br>

   </form>
  </div>
</div>
</div>

<br><br>

<div class="container3">

  <div class="rose2">
<table border="5px">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Question</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="user";
    

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);
    
    //check connection
    if($connection->connect_error){
      die("Connection failed:" . $connection->connect_error);
    }
    

    //read data
    $sql="SELECT * FROM faq";
    $result=$connection->query($sql);

    if(!$result){
      die("Invalid query: " . $connection->error);
    }

    
    while($row = $result->fetch_assoc()){
      echo "
    <tr>
      <td align='center'>$row[id]</td>
      <td align='center'>$row[name]</td>
      <td align='center'>$row[email]</td>
      <td align='center'>$row[question]</td>
      <td align='center'>
      <button class='bttn1'><a href=''>Edit</a></button>
      <button class='bttn2'><a href='/ushara/delete3.php?id=$row[id]'>Delete</a></button>
      </td>
    </tr>
      ";
    }
    ?>
  </tbody>
</table>
  </div>
  </div><br><br>






<?php

//Add questions
    $servername="localhost";
    $username="root";
    $password="";
    $database="user";
    

    
    $conn= new mysqli($servername, $username, $password, $database);
    
    
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
    }

if(isset($_POST["submit"])){
  $name= $_POST["name"];
  $email = $_POST["email"];
  $question = $_POST["question"];

  

  $query = "INSERT INTO faq VALUES('', '$name', '$email', '$question')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

</body>
</html>