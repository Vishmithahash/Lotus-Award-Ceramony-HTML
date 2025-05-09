<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/header.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
   <meta charset="utf-8">
</head>

<body>
<header>
  <nav class="navi">
    <div class="navdiv">
      <div><img src="images4/logo3.png" width="120px" height="120px"></div>
      <ul>
        <li class="list"><a href="homee.php">Home</a></li>
        <li class="list"><a href="vote.php">Vote</a></li>
        <li class="list"><a href="nominee.php">Nominees</a></li>
        <li class="list"><a href="Winners.php">Winners</a></li>
        <li class="list"><a href="Sponser.php">Sponsor</a></li>
        <li class="list"><a href="enroll.php">Admin</a></li>
        <button><a href="login.php">LOGIN</a></button>
      </ul>
      <div>
        <img class="c4" src="images4/user.png" width="160px" height="80px"><br>
        <p class="c6"><b><a class="c5" href="home.php">USER PROFILE</a></b></p>
      </div>
    </div>
  </nav>
  <hr class="line1">
</header>

<div class="home">
  <img src="images4/bg2.jpg" alt="" class="home__img">

  <div class="home-title">
    <h1>LOTUS AWARD CEREMONY</h1>
  </div>

  <div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">

      <div class="slide first">
        <img src="images4/i8.jpg" alt="">
      </div>
      <div class="slide">
        <img src="images4/i13.jpg" alt="">
      </div>
      <div class="slide">
        <img src="images4/i2.jpg" alt="">
      </div>
      <div class="slide">
        <img src="images4/i1.jpg" alt="">
      </div>

      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn1"></div>
        <div class="auto-btn1"></div>
        <div class="auto-btn1"></div>
      </div>
    </div>

    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
  </div>
</div>

<div class="countdown">
  <div class="counttitle">
    <h1>COUNTDOWN</h1>
  </div>
  <div class="paracount">
    <p>Voting Ends</p>
  </div>

  <div class="contain">
    <div class="box">
      <div id="day" class="counter">0</div>
      <div class="caption">Days</div>
    </div>
    <div class="box">
      <div id="hour" class="counter">0</div>
      <div class="caption">Hours</div>
    </div>
    <div class="box">
      <div id="minute" class="counter">0</div>
      <div class="caption">Minutes</div>
    </div>
    <div class="box">
      <div id="second" class="counter">0</div>
      <div class="caption">Seconds</div>
    </div>
  </div>
</div>

<script src="js4/home.js"></script>

<hr class="line1">
<footer>
  <nav class="navif">
    <div class="navdiv">
      <div><img src="images4/award.png" width="100px" height="100px"></div>

      <div>
        <p class="c7">
          Lotus Award Ceremony proudly announces that this is the only tele/film awarding ceremony in the region held within the 1st quarter immediately after the end of the year under review.
          <br>No doubt that both artists and television viewers will welcome this move to evaluate the TV programs while they are still live in good memories of them, despite the challenges in organizing the event in such a short span of time.
          <br><br>Copyright &copy;2024 All Rights Reserved | IWT
        </p>
      </div>

      <div>
        <a href="#"><img class="classimg" src="images4/fb.png" width="70px" height="65px"></a>
        <a href="#"><img class="classimg2" src="images4/ins.png" width="70px" height="65px"></a>
        <a href="#"><img class="classimg2" src="images4/tw.png" width="80px" height="75px"></a><br>
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
