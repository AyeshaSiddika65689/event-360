
<?php
include("config.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Events 360 | login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/images/logo.png" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <form action="index.php" method="post">
              <div class="form-group">
                <label for="username">username</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="username" required="required">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword"required="required">
              </div>
             <button name="login"  id="login" class="btn btn-block login-btn">login</button>
            </form>
            <?php
            if (isset($_POST["login"]))
            {
                 $email=$_POST["email"];
                 $password=$_POST["password"];
                 if($email!="" &&$password!="")
                 {
                     $sql="SELECT id,email,password FROM adminlogin WHERE email='$email' AND password='$password'";
                     $result=$con->query($sql);
                    // print_r($result);
                    if($result->num_rows==1 )
                    {
                        header("location:../../360 dashboard/index.html");
                    }
                    else
                    {
                        echo "<p class='error'> invalid user</p>"; 
                    }
                 }
                 
            }
            ?>
            <a href="#!" class="forgot-password-link">Forgot password?</a>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
    
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
