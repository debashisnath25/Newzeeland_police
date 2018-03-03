
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Login | TeamGraph</title>
<?php include("metalinks.php");?></head>

<body class="loginpages">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="userpic"><img src="images/default_profile.png" alt="" ></div>
        <div class="panel-body">
          <h2 class="text-center">Please Sign In</h2>
          <form >
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="checkbox">
                <label>
                  <input name="remember" type="checkbox" value="Remember Me">
                  Remember Me </label>
              </div>
              <br>
              <!-- Change this to a button or input when using this as a form --> 
              <a href="dashboard.php" class="btn btn-lg btn-primary btn-block">Login</a>
            </fieldset>
            <br>
            <br>
            <div class="row">
              <div class="col-md-6 "> <a href="forgot_pass.php">Forgot password?</a> </div>
              <div class="col-md-6  text-right"> <a href="signup.php">Singup now!</a> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php");?>
</body>
</html>
