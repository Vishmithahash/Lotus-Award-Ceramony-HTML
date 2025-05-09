<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/header.css">

</head>
<body>
<header>
<!-- add a horizontal menu -->
<nav class="navi">
  <div class="navdiv">
    <div><img src = "images4/logo3.png" width="120px" height="120px"></div>
<ul>
<li class="list"><a href="homee.php">Home</a></li>
<li class="list"><a href="vote.php">Vote</a></li>
<li class="list"><a href="inex.php">Nominees</a></li>
<li class="list"><a href="Winners.php">Winners</a></li>
<li class="list"><a href="Sponser.php">Sponsor</a></li>
<li class="list"><a href="enroll.php">Admin</a></li>
<button><a href="login.php">LOGIN</a></button>

</ul>
<div><img class="c4" src="images4/user.png" width="160px" height="80px"><br>
<p class="c6"><b><a class="c5" href="home.php">USER PROFILE</a></b></p></div>
</div>
</nav>
<!-- add a horizontal line -->
<hr class="line1">
</header>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images4/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn1">update profile</a>
      <a href="delete1.php?logout=<?php echo $user_id; ?>" class="delete-btn">Delete account</a>
      <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
   </div>

</div>

<footer>
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
            <li class="list2"><a href="Terms & conditions">Terms & Conditions</a></li>
            <li class="list2"><a href="Privacy.php">Privacy Cookies</a></li>
            <li class="list2"><a href="faq1.php">F&Q</a></li>
         </ul>
       </div>
      </div>
    </nav>
 
</footer>
</body>
</html>