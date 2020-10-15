<?php
  session_start();
  if(!isset($_SESSION['loginuser'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="signup.php" method="POST" onSubmit="return validatePassword()" enctype="multipart/form-data" autocomplete="on">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="name" value="<?php if(isset($_SESSION['old_name']))  echo $_SESSION['old_name'];?>">
                    <?php 
                      if(isset($_SESSION['name_error'])){
                        echo '<small class="text-danger">'.$_SESSION['name_error'].'</small>';
                        unset($_SESSION['name_error']);
                        unset($_SESSION['old_name']);
                      }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" value="<?php if(isset($_SESSION['old_email']))  echo $_SESSION['old_email'];?>">
                  <?php 
                      if(isset($_SESSION['email_error'])){
                        echo '<small class="text-danger">'.$_SESSION['email_error'].'</small>';
                        unset($_SESSION['email_error']);
                        unset($_SESSION['old_email']);
                      }
                    ?>
                </div>
                <div class="form-group">
                  <label for="photo">Profile Photos</label>
                  <input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Phone" name="phone" value="<?php if(isset($_SESSION['old_phone']))  echo $_SESSION['old_phone'];?>">
                  <?php 
                      if(isset($_SESSION['phone_error'])){
                        echo '<small class="text-danger">'.$_SESSION['phone_error'].'</small>';
                        unset($_SESSION['phone_error']);
                        unset($_SESSION['old_phone']);
                      }
                    ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Address" name="address" value="<?php if(isset($_SESSION['old_address']))  echo $_SESSION['old_address'];?>">
                  <?php 
                      if(isset($_SESSION['address_error'])){
                        echo '<small class="text-danger">'.$_SESSION['address_error'].'</small>';
                        unset($_SESSION['address_error']);
                        unset($_SESSION['old_address']);
                      }
                    ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" placeholder="Password" name="pass" id="pass" onchange="validatePassword()">
                  <?php 
                      if(isset($_SESSION['pass_error'])){
                        echo '<small class="text-danger">'.$_SESSION['pass_error'].'</small>';
                        unset($_SESSION['pass_error']);
                      }
                    ?>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" placeholder="Confirm Password" name="con_pass" id="con_pass" onkeyup="validatePassword()"><?php 
                      if(isset($_SESSION['con_pass_error'])){
                        echo '<small class="text-danger">'.$_SESSION['con_pass_error'].'</small>';
                        unset($_SESSION['con_pass_error']);
                      }
                    ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
<script type="text/javascript">
    var password = document.getElementById("pass");
    var confirm_password = document.getElementById("con_pass");



function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    return false;
  } else {
    confirm_password.setCustomValidity('');
    return true;
  }
}

</script>

</html>
<?php 

  }
  else{
    header("location: index.php");
  }

 ?>