
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Forgot Password | TeamGraph</title>
<?php include("metalinks.php");?>
</head>

<body class="loginpages">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="userpic"><img src="images/default_profile.png" alt="" ></div>
        <div class="panel-body">
          <h2 class="text-center">Reset Passsword</h2>
          <form>
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
              </div>
              <br>
              <!-- Change this to a button or input when using this as a form --> 
              <a href="index.php" class="btn btn-lg btn-primary btn-block">Reset</a>
            </fieldset>
            <br>
            <br>
            <div class="row">
              <div class="col-md-6  col-md-offset-6  text-right"> <a href="index.php">Signin now!</a> </div>
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
