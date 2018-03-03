
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Register | NZPolice</title>
<?php include("metalinks.php");?>
</head>

<body class="loginpages">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="userpic"><img src="images/default_profile.png" alt="" ></div>
        <div class="panel-body">
          <h2 class="text-center">Register with us</h2>
          <form>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Birthdate</label>
              <input type="text" class="form-control" placeholder="Birthdate">
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <!-- Change this to a button or input when using this as a form --> 
            <a href="dashboard.php" class="btn btn-lg btn-primary btn-block">Sign up</a>
          </form>
          <br>
          <div class="row">
            <div class="col-md-12  text-center"> <a href="index.php">Already have account? Sign in now!</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery --> 
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Custom Theme JavaScript --> 
<script src="js/raphael.js"></script> 
<script src="js/morris.min.js"></script> 
<script src="js/adminnine.js"></script> 
</body>
</html>
