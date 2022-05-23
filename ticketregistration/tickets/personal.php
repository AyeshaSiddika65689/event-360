<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Events 360 | Details</title>
	<link rel="stylesheet" href="personal.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Fill Your Personal Details
    </div>
<form  action="personal.php" method="post">
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" name="firstname" class="input" placeholder="First name"required="required">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="lastname"class="input"placeholder="Last name"required="required">
       </div>  
       <div class="inputfield">
          <label>Company Mail</label>
          <input type="email" name="companymail"class="input" placeholder=" Enter your Company mail">
       </div>  
       <hr>
       <h4>Or</h4>
       <div class="inputfield">
        <label>Personal Mail</label>
        <input type="email" name="personalmail" class="input" placeholder="Enter your Personal mail">
     </div> 
       <div class="inputfield">
        <label>Phone Number</label>
        <input type="number" name="phonenumber" class="input"placeholder="Enter your Mobile number"required="required">
     </div>
      <div class="inputfield">
          <label>Number of participants</label>
          <input type="number" name="participants" class="input" placeholder="No. of participants"required="required">
       </div> 
        <div class="inputfield">
          <label>Mode of Event</label>
          <div class="custom_select">
            <select required name="modeofevent">
              <option name="modeofevent" value="nil">Select</option>
              <option name="modeofevent" value="offline">Offline</option>
              <option name="modeofevent" value="online">online</option>
            </select>
          </div>
       </div>   
      <div class="inputfield">
          <label>Address</label>
          <textarea name="address" value="" class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" name="postalcode" class="input" value="" required="required">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="TandC" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <button value="Proceed to Pay" class="btn" name="save">Proceed to Pay</button>
      </div>
    </div>
</form>
</div>	
<?php
$server_name="localhost";
$firstname="root";
$lastname="";
$database_name="events_360";


$conn=mysqli_connect($server_name,$firstname,$lastname,$database_name);
//now check the connection
if(!$conn)
{
die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$companymail = $_POST['companymail'];
$personalmail = $_POST['personalmail'];
$phonenumber = $_POST['phonenumber'];
$participants =$_POST['participants'];
$modeofevent =$_POST['modeofevent'];
$address = $_POST['address'];
$postalcode = $_POST['postalcode'];
$TandC = $_POST['TandC'];




$sql_query = "INSERT INTO `personaldetails`(`firstname`,`lastname`,`companymail`,`personalmail`,`phonenumber`,`participants`,`modeofevent`,`address`,`postalcode`,`TandC`)
VALUES ('$firstname','$lastname','$companymail','$personalmail','$phonenumber','$participants','$modeofevent','$address','$postalcode','$TandC')";

if (mysqli_query($conn, $sql_query))
{
    
   header("location: ../../paytm/TxnTest.php");
     
}
else
     {
     echo "Error: " . $sql . "" . mysqli_error($conn);
     }
mysqli_close($conn);
}
?>

</body>
</html>