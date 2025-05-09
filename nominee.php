<!Doctype html>
<html>
<head>
   <title>Nominee</title>
   <link rel="stylesheet" href="styles2/login.css">
   <link rel="stylesheet" href="styles2/NewsPage.css">

</head>

<body>
<header>



<!-- add a horizontal menu -->
<nav class="navi">
  <div class="navdiv">
    <div><img src = "images2/logo3.png" width="120px" height="120px"></div>
<ul>
<li class="list"><a href="homee.php">Home</a></li>
<li class="list"><a href="vote.php">Vote</a></li>
<li class="list"><a href="inex.php">Nominees</a></li>
<li class="list"><a href="Winners.php">Winners</a></li>
<li class="list"><a href="Sponser.php">Sponsor</a></li>
<li class="list"><a href="enroll.php">Admin</a></li>
<li class="list"><a href="saveData.php">Add</a></li>
<button><a href="login.php">LOGIN</a></button>

</ul>
<div>   <img src="images2/user.png" width="160px" height="80px"><br>
<p class="c6"><b><a class="c5" href="home.php">USER PROFILE</a></b></p></div>
</div>
</nav>
<!-- add a horizontal line -->
<hr class="line1">
</header>



<div class="news">

  <div class="newsH_1">
    <h1> Nominee</h1>
  </div>
  <?php
include('connection.php');
$ret=mysqli_query($con,"select * from tblnomination");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {
 
?>
  <div class="container">
    <div class="article">
        <h2><?php  echo $row['FullName'];?></h2>
        <img src="profilepic/<?php  echo $row['ProfilePic'];?>" class="i1">
        <div class="txtcontainer">
          <div class="imgtext">
          <h2><?php  echo $row['Email'];?></h2>
            <p><?php  echo $row['Description'];?></p>
          </div>
        </div>
    </div>


    <?php 
$cnt=$cnt+1;
} } else {?>

<p style="text-align:center; color:red;">No Record Found</p>

<?php } ?> 
     

</div>
</div>



<footer>
<!-- add a horizontal line -->
<hr class="line1">
<!-- add a footer -->
<footer>
    <nav class="navif">
  <div class="navdiv">
    <div><img src = "images2/award.png" width="100px" height="100px"></div>

    <div>
        <p class="c7">Lotus Award Ceremony proudly announce that this is the only tele/film awarding ceremony <br>in the region held within the 1st quarter immediately after the end of year under review. <br>No doubt that both artists and television viewers will welcome this move to evaluate the<br> TV program while they are still live in good memories of them, despite the challenges in<br> evaluating and organizing the event in such a short span of time<br><br>Copyright &copy;2024 All Rights Reserved | IWT</p>
    </div>

      <div>
          <a href=""><img  class="classimg" src="images2/fb.png" width="70px" height="65px"></a>
          <a href=""><img class="classimg2" src="images2/ins.png" width="70px" height="65px"></a>
          <a href=""><img class="classimg2" src="images2/tw.png" width="80px" height="75px"></a><br>
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