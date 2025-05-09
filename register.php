<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'") or die('query failed');


   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/style3.css">

</head>
<body>
   <div class="bgcolo">
   <header>
   <!-- add a horizontal menu -->
<nav class="navi">
  <div class="navdiv">
    <div><img src = "images4/logo3.png" width="120px" height="120px"></div>
<ul>
<li class="list"><a href="homee.php">Home</a></li>
<li class="list"><a href="register.php">Vote</a></li>
<li class="list"><a href="inex.php">Nominees</a></li>
<li class="list"><a href="Winners.php">Winners</a></li>
<li class="list"><a href="register.php">Sponsor</a></li>
<li class="list"><a href="register.php">Admin</a></li>
<button><a href="login.php">LOGIN</a></button>

</ul>
<div><img class="c4" src="images4/user.png" width="160px" height="80px"><br>
<p class="c6"><b><a class="c5" href="register.php">USER PROFILE</a></b></p></div>
</div>
</nav>
<!-- add a horizontal line -->
<hr class="line1">
</header>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

<!-- add a horizontal line -->
<hr class="line1">
<!-- add a footer -->
<footer>
    <nav class="navif">
  <div class="navdiv">
    <div><img src = "images4/award.png" width="100px" height="100px"></div>

    <div>
        <p class="c7">Lotus Award Ceremony proudly announce that this is the only tele/film awarding ceremony <br>in the region held within the 1st quarter immediately after the end of year under review. <br>No doubt that both artists and television viewers will welcome this move to evaluate the<br> TV program while they are still live in good memories of them, despite the challenges in<br> evaluating and organizing the event in such a short span of time<br><br>Copyright &copy;2024 All Rights Reserved | IWT</p>
    </div>

      <div>
          <a href=""><img  class="classimg" src="images4/fb.png" width="70px" height="65px"></a>
          <a href=""><img class="classimg2" src="images4/ins.png" width="70px" height="65px"></a>
          <a href=""><img class="classimg2" src="images4/tw.png" width="80px" height="75px"></a><br>
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