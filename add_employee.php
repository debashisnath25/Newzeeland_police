
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Add Employee | NZPolice</title>
<?php include("metalinks.php");?>
<style>
  .form-control-xs::-webkit-inner-spin-button, 
  .form-control-xs::-webkit-outer-spin-button { 
	  -webkit-appearance: none; 
	  margin: 0; 
	}
</style>
</head>

<body>
<!-- loader -->
<div class="loader"><img src="../img/loader2.gif" alt=""> </div>
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
      <li class="active">Add Employee</li>
    </ol>
    </div>
    <div class="row">
      <div class="col-md-12  header-wrapper" >
        <h1 class="page-header">Add Employee</h1>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Information</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form method="POST">
				<label>Personal</label>
                  <div class="form-group">
					<div class="row">
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>First Name</label>
						 </div>
						 <div class="col-lg-4">
							<input type="text" class="form-control" value="" >
						 </div>
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Last Name</label>
						 </div>
						 <div class="col-lg-4">
							<input type="text" class="form-control" value="" >
						 </div>
					  </div>
					</div>
					<div class="form-group">
					<div class="row">
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Date of Birth</label>
						 </div>
						 <div class="col-lg-4">
							<input class="form-control" value="" >
						 </div>
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Gender</label>
						 </div>
						 <div class="col-lg-4">
							<select class="form-control">
							  <option selected disabled>Choose Gender</option>
							  <option>Male</option>
							  <option>Female</option>
							  <option>Other</option>
							</select>
						 </div>
					  </div>
					</div>
					<hr/>
					<label>Contact</label>
                  <div class="form-group">
					<div class="row">
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Email</label>
						 </div>
						 <div class="col-lg-4">
							<input type="email" class="form-control" value="" >
						 </div>
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Phone Number</label>
						 </div>
						 <div class="col-lg-4">
							<input type="number" class="form-control form-control-xs" value="" onkeydown="javascript: return event.keyCode == 69 ? false : true">
						 </div>
					  </div>
					</div>
					<div class="form-group">
					<div class="row">
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Date of Birth</label>
						 </div>
						 <div class="col-lg-4">
							<input class="form-control" value="" >
						 </div>
						 <div class="col-lg-2 text-right" style="margin-top:8px;">
							<label>Gender</label>
						 </div>
						 <div class="col-lg-4">
							<select class="form-control">
							  
							  <option>Male</option>
							  <option>Female</option>
							  <option>Other</option>
							</select>
						 </div>
					  </div>
					</div>
					<hr/>
                
                 <!-- <button type="submit" class="btn btn-default">Submit Button</button>
                  <button type="reset" class="btn btn-default">Reset Button</button> -->
                </form>
              </div>
              <!-- /.col-lg-6 (nested) -->
              
              <!-- /.col-lg-6 (nested) --> 
            </div>
            <!-- /.row (nested) --> 
          </div>
          <!-- /.panel-body --> 
        </div>
        <!-- /.panel --> 
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper -->
<!-- jQuery --> 
<?php include("footer.php");?>
</body>
</html>
