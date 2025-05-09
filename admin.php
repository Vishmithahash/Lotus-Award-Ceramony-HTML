
<!Doctype html>
<html>
<head>
   <title>Admin Page</title>
   <link rel="stylesheet" href="styles/admin.css">
   <link rel="stylesheet" href="styles/head1.css">
   
</head>
<body background="images/backgroundvote.jpg">
<header>



<!-- add a horizontal menu -->
<nav class="navi">
  <div class="navdiv">
    <div><img src = "images/logo3.png" width="120px" height="120px"></div>
<ul>
<li class="list"><a href="homee.php">Home</a></li>
<li class="list"><a href="vote.php">Vote</a></li>
<li class="list"><a href="inex.php">Nominees</a></li>
<li class="list"><a href="Winners.php">Winners</a></li>
<li class="list"><a href="Sponser.php">Sponsor</a></li>
<li class="list"><a href="#">Admin</a></li>
<button class="headb1"><a href="login.php">LOGIN</a></button>

</ul>
<div><img class="c4" src="images/user.png" width="160px" height="80px"><br>
<p class="c6"><b><a class="c5" href="home.php">USER PROFILE</a></b></p></div>
</div>
</nav>
<!-- add a horizontal line -->
<hr class="line1">
</header>

<br><br>
<h1 class="a1">ADMINISTRATOR</h1><br><br>



<div class="container">

<div class="gallery">
  <img src="images/admin.jpg">
</div> 
<br><br><br><br><br><br><br>
<div class="gallery">
  <h2><b>Name : </b>Mr.Deshan Kodithuwakku</h2><br>
  <h2><b>Age : </b>33</h2><br>
  <h2><b>Gender : </b>Male</h2><br>
  <h2><b>Contact No :</b>0764894760</h2><br>
  <h2><b>Email : </b>deshan@gmail.com</h2><br>
  <h2><b>Fax : </b>+16692001010@fax.plus</h2>
</div> 
</div>

<br>
<br>

<h1 class="a1">Manage Awards</h1><br><br>
<div class="container2">

  <div class="gallery">
    <h2 align = "center">Add Award Category</h2><br>
    <hr class="line1"><br>
    <div class="te1">
      <form  method="post" autocomplete="off">
       
    <input type = "text" placeholder="Award Name" name="Award_Name"><br><br>


    <input type = "text" placeholder="Won Actress And Won Actor" name="Won_Actress_And_Won_Actor">
<br><br>
      
<button class="phpbtn1" type="submit" name="submit">ADD</button><br><br>

   </form>
  </div>
</div>
</div>

<br><br>

<div class="container3">

  <div class="gallery2">
<table border="5px">
  <thead>
    <tr>
      <th>A ID</th>
      <th>Award Name</th>
      <th>Won Actress And Won Actor</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

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
    

    //read all row from database table
    $sql="SELECT * FROM Awards";
    $result=$connection->query($sql);

    if(!$result){
      die("Invalid query: " . $connection->error);
    }

    //read data of each row
    while($row = $result->fetch_assoc()){
      echo "
    <tr>
      <td align='center'>$row[A_ID]</td>
      <td align='center'>$row[Award_Name]</td>
      <td align='center'>$row[Won_Actress_And_Won_Actor]</td>
      <td align='center'>
      <button class='phpbtn1'><a class='btn btn-primary btn-sm' href='/ushara/forms.php?A_ID=$row[A_ID]'>Edit</a></button>
      <button class='phpbtn2'><a class='btn btn-danger btn-sm' href='/ushara/delete.php?A_ID=$row[A_ID]'>Delete</a></button>
      </td>
    </tr>
      ";
    }
    ?>

    
  </tbody>

</table>
  </div>
  </div>
<br><br>






<?php

//Add Award
    $servername="localhost";
    $username="root";
    $password="";
    $database="ushara";
    

    //create connection
    $conn= new mysqli($servername, $username, $password, $database);
    
    //check connection
    if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
    }

if(isset($_POST["submit"])){
  $Award_Name = $_POST["Award_Name"];
  $Won_Actress_And_Won_Actor = $_POST["Won_Actress_And_Won_Actor"];

  

  $query = "INSERT INTO Awards VALUES('', '$Award_Name', '$Won_Actress_And_Won_Actor' )";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>



   <!-- add a horizontal line -->
<hr class="line1">
<!-- add a footer -->
<footer>
    <nav class="navif">
  <div class="navdiv">
    <div><img src = "images/award.png" width="100px" height="100px"></div>

    <div>
        <p class="c7">Lotus Award Ceremony proudly announce that this is the only tele/film awarding ceremony <br>in the region held within the 1st quarter immediately after the end of year under review. <br>No doubt that both artists and television viewers will welcome this move to evaluate the<br> TV program while they are still live in good memories of them, despite the challenges in<br> evaluating and organizing the event in such a short span of time<br><br>Copyright &copy;2024 All Rights Reserved | IWT</p>
    </div>

      <div>
          <a href=""><img  class="classimg" src="images/fb.png" width="100px" height="65px"></a>
          <a href=""><img class="classimg2" src="images/ins.png" width="100px" height="65px"></a>
          <a href=""><img class="classimg2" src="images/tw.png" width="100px" height="75px"></a><br>
          <ul>
            <li class="list2"><a href="About us.php">About Us</a></li>
            <li class="list2"><a href="Contact us.php">Contact Us</a></li>
            <li class="list2"><a href="News.php">News</a></li>
            <li class="list2"><a href="Terms & conditions.php">Terms & Conditions</a></li>
            <li class="list2"><a href="Privacy.php">Privacy Cookies</a></li>
            <li class="list2"><a href="faq1.php">F&Q</a></li>
         </ul>
       </div>
      </div>
    </nav>
 
</footer>

</body>
</html>