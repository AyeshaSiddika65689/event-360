
<?php
include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>User Login</title>
  </head>
  <body>
    <!-- Container -->
    <div class="container" id="container">
      <!-- Row -->
      <div class="row">
        <!-- Sign Up -->
        <div class="col align-center flex-col sign-up">
          <div class="form-wrapper align-center">
            <form class="form sign-up"  action="index.php" method="post">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" placeholder="Username"  name="username" required="required" />
              </div>
              <div class="input-group">
                <i class="bx bx-mail-send"></i>
                <input type="email" placeholder="Email" name="email" required="required"/>
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" name="password" required="required"/>
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Confirm password" />
              </div>
              <button name="save">Sign up</button>
              <p>
                <span>Already have an account?</span>
                <b id="sign-in">Sign in here</b>
              </p>
            </form>  
            <?php
$server_name="localhost";
$username="root";
$password="";
$database_name="events_360";


$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql_query = "INSERT INTO usersignup(username,email,password)
VALUES ('$username','$email','$password')";

if (mysqli_query($conn, $sql_query))
{
    
     echo "saved";
     
}
else
     {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-up">
              <div class="align-center facebook-bg">
                 <a href="https://facebook.com/"><i class="bx bxl-facebook"></i></a>
              </div>
              <div class="align-center google-bg">
                <a href="https://www.google.com/"><i class="bx bxl-google"></i></a>
              </div>
              <div class="align-center twitter-bg">
                <a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a>
              </div>
              <div class="align-center insta-bg">
                <a href="https://www.instagram.com/"><i class="bx bxl-instagram-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign Up -->
        <!-- Sign In -->
        <div class="col align-center flex-col sign-in">
          <div class="form-wrapper align-center">
            <div class="form sign-in">
            <form action="index.php" method="post">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="email" placeholder="Enter your mail"  name="email" required="required"/>
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password"  name="password" required="required"/>
              </div>
              <button name="login">Sign in</button>
              <p>
                <b>Forgot password?</b>
              </p>
              <p>
                <span> Don't have an account? </span>
                <b id="sign-up">Sign up here</b>
              </p>
            </div>
            </form>
            <?php
            if (isset($_POST["login"]))
            {
                 $email=$_POST["email"];
                 $password=$_POST["password"];
                 if($email!="" &&$password!="")
                 {
                     $sql="SELECT username,email,password FROM usersignup WHERE email='$email' AND password='$password'";
                     $result=$con->query($sql);
                    // print_r($result);
                    if($result->num_rows==1 )
                    {
                        header("location:../../ticketregistration/tickets/index.php");
                    }
                    else
                    {
                        echo "<p class='error'> invalid user</p>"; 
                    }
                 }
                 
            }
            ?>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-in">
              <div class="align-center facebook-bg">
                <a href="https://facebook.com/"><i class="bx bxl-facebook"></i></a>
             </div>
             <div class="align-center google-bg">
               <a href="https://www.google.com/"><i class="bx bxl-google"></i></a>
             </div>
             <div class="align-center twitter-bg">
               <a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a>
             </div>
             <div class="align-center insta-bg">
               <a href="https://www.instagram.com/"><i class="bx bxl-instagram-alt"></i></a>
             </div>
            </div>
          </div>
        </div>
        <!-- End Sign In -->
      </div>
      <!-- End Row -->
      <!-- Content Section -->
      <div class="row content-row">
        <!-- Sign In Content -->
        <div class="col align-items flex-col">
          <div class="text sign-in">
            <h2>Welcome Back</h2>
          </div>
          <div class="img sign-in">
            <img src="images/bg1.svg" alt="" />
          </div>
        </div>

        <!-- Sign Up Content -->
        <div class="col align-items flex-col">
          <div class="img sign-up">
            <img src="images/bg2.svg" alt="" />
          </div>
          <div class="text sign-up">
            <h2>Join with us</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <!-- Script -->
    <script src="index.js"></script>
  </body>
</html>
