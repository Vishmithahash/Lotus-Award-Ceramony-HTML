<?php


// Process form submission
if (  isset($_POST['full_name']) || isset($_POST['email']) || isset ($_POST['address']) ||isset ($_POST['city']) || isset($_POST['state']) || isset($_POST['zip_code']) || isset($_POST['card_name']) || isset($_POST['card_number']) || isset($_POST['exp_month']) || isset($_POST['exp_year']) || isset($_POST['cvv'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];

    // Insert data into the database
    $sql = "INSERT INTO sponsors (full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv)
            VALUES ('$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$card_name', '$card_number', '$exp_month', '$exp_year', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<html>
    <head>
        <title>Sponsor Page</title>
        <link rel="stylesheet" href="styles3/header.css">
        <link rel="stylesheet" href="styles3/sponsor.css">
    </head>
  
    <body>

        <header>

            <!-- add a horizontal menu -->
            <nav class="navi">
              <div class="navdiv">
                <div><img src = "images3/logo3.png" width="120px" height="120px"></div>
            <ul>
            <li class="list"><a href="homee.php">Home</a></li>
            <li class="list"><a href="vote.php">Vote</a></li>
            <li class="list"><a href="inex.php">Nominees</a></li>
            <li class="list"><a href="Winners.php">Winners</a></li>
            <li class="list"><a href="Sponser.php">Sponsor</a></li>
            <li class="list"><a href="enroll.php">Admin</a></li>
            <button><a href="login.php">LOGIN</a></button>
            
            </ul>
            <div><img class="c4" src="images3/user.png" width="160px" height="80px"><br>
            <p class="c6"><b><a class="c5" href="home.php">USER PROFILE</a></b></p></div>
            </div>
            </nav>
            <!-- add a horizontal line -->
            <hr class="line1">
            </header>
            
    



   
        
<div class="container">
    <img src="images3/bg4.jpg" alt="" class="contact__img">

    <form action="process_form.php" method="POST">
    
        
    
            <!-- Your form inputs -->
        
        
        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Amal Siripala">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="person@.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="street">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Colombo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Sri lanka">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="000000">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images3/card.png" alt="cards">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Mr. Amal Siripala">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="MM/YY">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2024">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="CVV">
                    </div>
                </div>

            </div>
            

        </div>

        
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>
</div> 
</div>  


    <!-- add a horizontal line -->
<hr class="line1">
<!-- add a footer -->
<footer>
    <nav class="navif">
  <div class="navdiv">
    <div><img src = "images3/award.png" width="100px" height="100px"></div>

    <div>
        <p class="c7">Lotus Award Ceremony proudly announce that this is the only tele/film awarding ceremony <br>in the region held within the 1st quarter immediately after the end of year under review. <br>No doubt that both artists and television viewers will welcome this move to evaluate the<br> TV program while they are still live in good memories of them, despite the challenges in<br> evaluating and organizing the event in such a short span of time<br><br>Copyright &copy;2024 All Rights Reserved | IWT</p>
    </div>

      <div>
          <a href=""><img  class="classimg" src="images3/fb.png" width="70px" height="65px"></a>
          <a href=""><img class="classimg2" src="images3/ins.png" width="70px" height="65px"></a>
          <a href=""><img class="classimg2" src="images3/tw.png" width="80px" height="75px"></a><br>
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
