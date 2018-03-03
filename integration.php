
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Integration | NZPolice</title>
<?php include("metalinks.php");?>
</head>

<body>
<!-- loader -->
<div class="loader"><img src="images/loader2.gif" alt=""> </div>
<!-- loader ends -->
<div id="wrapper">
 <?php include("sidebar.php");?>
  <!-- /.navbar-static-side --> 
  <!-- /.navbar-static-side -->
  
  <div id="page-wrapper">
    <div class="row">
    <?php include("header.php");?>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">NZPolice</a></li>
      <li class="active">Integration</li>
    </ol>
    </div>
    <div class="row">
      <div class="col-md-12 header-wrapper" >
        <h1 class="page-header">Integration</h1>
      </div>
	  <label class="panel-heading">This is where you manage integrations with external services.</label>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              
			  <div class="col-lg-3 col-md-4 col-sm-6">
				<div class="panel panel-default userlist" style="height:300px;">
				  <div class="panel-body text-center">
					<div class="userprofile">
					  <div class="userpic"> <img src="images/Slack_Icon.png" alt="" class="userpicimg"> </div>
					  <h3 class="username"></h3>
					  <p>Slack</p>
					</div>
					<p><a href="javascript:void(0);">Not Connected</a></p>
				  </div>
				  <div class="panel-footer text-center"> <a href="javascript:void(0);">Notification for surveys and feedback</a></div>
				</div>
			  </div>

			 <div class="col-lg-3 col-md-4 col-sm-6">
				<div class="panel panel-default userlist" style="height:300px;">
				  <div class="panel-body text-center">
					<div class="userprofile">
					  <div class="userpic"> <img src="images/bamboohr-thumbnail.png" alt="" class="userpicimg"> </div>
					  <h3 class="username"></h3>
					  <p>BambooHR</p>
					</div>
					<p><a href="javascript:void(0);">Not Connected</a></p>
				  </div>
				  <div class="panel-footer text-center"> <a href="javascript:void(0);">Automatic employee import</a></div>
				</div>
			  </div>

			  <div class="col-lg-3 col-md-4 col-sm-6">
				<div class="panel panel-default userlist" style="height:300px;">
				  <div class="panel-body text-center">
					<div class="userprofile">
					  <div class="userpic"> <img src="images/sso-logo.png" alt="" class="userpicimg"> </div>
					  <h3 class="username"></h3>
					  <p>Single Sign-on</p>
					</div>
					<p><a href="javascript:void(0);">Not Connected</a></p>
				  </div>
				  <div class="panel-footer text-center"> <a href="javascript:void(0);">Single sign-on using SAML</a></div>
				</div>
			  </div>

			  <div class="col-lg-3 col-md-4 col-sm-6">
				<div class="panel panel-default userlist" style="height:300px;">
				  <div class="panel-body text-center">
					<div class="userprofile">
					  <div class="userpic"> <img src="images/7-2-database-png-image.png" alt="" class="userpicimg"> </div>
					  <h3 class="username"></h3>
					  <p>Employee Provisioning</p>
					</div>
					<p><a href="javascript:void(0);">Not Connected</a></p>
				  </div>
				  <div class="panel-footer text-center"> <a href="javascript:void(0);">Automatic employee provisioning</a></div>
				</div>
			  </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /#wrapper -->
<!-- jQuery --> 
<?php include("footer.php");?>
</body>
</html>
