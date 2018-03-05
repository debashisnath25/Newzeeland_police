
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>My Profile | NZPolice</title>
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
  
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="row">
      <?php include("header.php");?>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">NZPolice</a></li>
      <li class="active">My Profile</li>
    </ol>
    </div>
    <div class="row">
      <div class="col-md-12  header-wrapper" >
        <h1 class="page-header">Lucky Sans</h1>
        <p class="page-subtitle">Customer Support, CXO</p>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    
    <!-- Nav tabs -->
   
    <!-- Tab panes -->
    <div class="tab-content ">
      <div class="tab-pane fade  in active" id="information1">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">My Profile
                  <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#editorofile"><span class="fa fa-edit" aria-hidden="true"></span> Edit</button>
                </h1>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12">
                <div class="userprofile">
                  <div class="userpic pull-left"> <img src="images/pic2.png" alt="" class="userpicimg"> <a href="" class="btn btn-primary settingbtn"><i class="fa fa-upload"></i></a> </div>
                </div>
                <div class="clearfix"></div>
                <dl class="dl-horizontal">
                  <dt>Full Name</dt>
                  <dd>Lucky Sans</dd>
				  <dt>Birthdate</dt>
                  <dd>28/12/1992</dd>
                  <dt>Email</dt>
                  <dd>info@maxartkiller.in</dd>
                  <dt>Phone</dt>
                  <dd>+91 000 000 00000</dd>
                  <dt>Company</dt>
                  <dd>Maxartkiller comapny Inc</dd>
                </dl>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
		  <div class="col-lg-4 col-md-12 ">
			  <div class="panel panel-default">
				  <div class="panel-heading">
					<h1 class="page-header small">Change password</h1>
				  </div>
				  <div class="col-md-12">
					<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  Your password has been changed successfully! </div>
					<form>
					  <div class="form-group has-success has-feedback">
						<label>Current password</label>
						<input type="password" class="form-control"  placeholder="Current password">
						<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> </div>
					  <div class="form-group">
						<label>New password</label>
						<input type="password" class="form-control"  placeholder="New password">
					  </div>
					  <div class="form-group">
						<label>Confirm password</label>
						<input type="password" class="form-control"  placeholder="Confirm password">
					  </div>
					  <br>
					  <button type="submit" class="btn btn-primary">Change Password</button>
					  <button type="reset" class="btn btn-default">Reset</button>
					</form>
			   </div>
			<div class="clearfix"></div>
			</div>
		  </div>
        </div>
      </div>
  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper -->
<div class="modal fade" tabindex="-1" role="dialog" id="editorofile">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit profile</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last name">
          </div>
          <div class="form-group">
            <label>Birthdate</label>
            <input type="text" class="form-control" placeholder="Birthdate">
          </div>
          <div class="form-group">
            <label>Phone number</label>
            <input type="number" class="form-control" placeholder="Phone number">
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Email">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->


<?php include("footer.php");?>
	<script>
		$(document).ready( function(){
			  $('[data-toggle="popover"]').popover()
			
		})
	</script>
</body>
</html>
