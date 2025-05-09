<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>


<?php
include('connection.php');
$ret=mysqli_query($con,"select * from tblnomination");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {
 
?>
<!--Fetch the Records -->

 <div class="card ">
  <img src="profilepic/<?php  echo $row['ProfilePic'];?>" width="80" height="80">
  <div class="container">
    <h4><b>Name :<?php  echo $row['FullName'];?></b></h4>
	<h4><b>Email :<?php  echo $row['Email'];?></b></h4>
	<h4><b>Mobile Number :<?php  echo $row['MobileNumber'];?></b></h4>
    <p><?php  echo $row['Description'];?></p>


</div>
</div> 
<br/><br/>
<?php 
$cnt=$cnt+1;
} } else {?>

<p style="text-align:center; color:red;" colspan="6">No Record Found</p>

<?php } ?>                 
                
</tbody>
</table>