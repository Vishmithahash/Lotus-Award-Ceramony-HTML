<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">

<?php 
//Databse Connection file
include('connection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
	$des=$_POST['descreption'];
   $ppic=$_FILES["profilepic"]["name"];
// get the image extension
$extension = strtolower(substr($ppic, strlen($ppic) - 4, strlen($ppic)));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile = md5($ppic) . time() . $extension;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepic/".$imgnewfile);
// Query for data insertion
$query=mysqli_query($con, "insert into tblnomination(FullName, MobileNumber, Email, Address,Description,ProfilePic) value('$fname', '$contno', '$email', '$add','$des','$imgnewfile' )");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='nominee.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>


<form  method="POST" enctype="multipart/form-data" >
<h2>Fill Data</h2>
<p class="hint-text">Fill below form.</p>
 
<div class="form-group">
<div class="row">
<div class="col"><input type="text" class="form-control" name="fname" placeholder="Full Name" required="true"></div>
</div>        	
</div>
 
<div class="form-group">
 <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" >
 </div>
        
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
</div>
		
<div class="form-group">
<textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
</div>  
 
<div class="form-group">
<textarea class="form-control" name="descreption" placeholder="Enter Descreption" required="true"></textarea>
</div> 

<div class="form-group">
<input type="file" class="form-control" name="profilepic"  required="true">
<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
</div>      
      
<div class="form-group">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
</div>
</form>