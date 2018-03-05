
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Information | NZPolice</title>
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
      <li class="active">Information</li>
    </ol>
    </div>
    <div class="row">
      <div class="col-md-12 header-wrapper" >
        <h1 class="page-header small">Information</h1>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form method="POST">
                  <div class="form-group">
					<div class="row">
					 <div class="col-lg-2 text-left" style="margin-top:8px;">
						<span style="font-size:12px;">Company Name</span>
					 </div>
					 <div class="col-lg-4">
						<input type="text" class="form-control" value="" >
					 </div>
					 <div class="col-lg-2 text-left" style="margin-top:8px;">
						<span style="font-size:12px;">Logo</span>
					 </div>
					 <div class="col-lg-4">
						<input type="file" class="form-control" value="" >
					 </div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						 <div class="col-lg-2 text-left" style="margin-top:8px;">
							<span style="font-size:12px;">Sector</span>
						 </div>
						 <div class="col-lg-4">
							<select class="form-control" style="font-size:12px;">
							  <option selected disabled>Choose Sector</option>
							  <option>Consumer</option>
							  <option>Education</option>
							  <option>Energy & Utilities</option>
							  <option>Finance</option>
							  <option>Government</option>
							  <option>Healthcare</option>
							  <option>Manufacturing</option>
							  <option>Materials</option>
							  <option>Non-profit</option>
							  <option>Professional Services</option>
							  <option>Technology</option>
							  <option>Transportation</option>
							</select>
						 </div>
						 <div class="col-lg-2 text-left" style="margin-top:8px;">
							<span style="font-size:12px;">Size</span>
						 </div>
						 <div class="col-lg-4">
							<select class="form-control" style="font-size:12px;">
							  <option selected disabled>Choose Size</option>
							  <option>1-25</option>
							  <option>26-50</option>
							  <option>51-150</option>
							  <option>501-1,000</option>
							  <option>1,001-5,000</option>
							  <option>5,001-10,000</option>
							  <option>>10,000</option>
							</select>
						 </div>
					  </div>
					</div>
					<div class="form-group">
						<div class="row">
						 <div class="col-lg-2 text-left" style="margin-top:8px;">
							<span style="font-size:12px;">Location of your HQ</span>
						 </div>
						 <div class="col-lg-10">
							<input type="text" class="form-control" id="cityz">
						 </div>
					  </div>
					</div>
					<div class="form-group">
						<span style="font-size:12px;"><input type="checkbox">&nbsp;Let NZPolice staff have access to my account (for setup and analysis). You can turn this off later.</span>
					</div>
				 <div class="form-group text-right">
				  <button type="reset" class="btn btn-default">Reset Button</button>
				  <button type="submit" class="btn btn-primary">Submit Button</button>
				</div>
			  </form>
			  <hr/>
			  <label class="panel-title small">Delete Account</label>
				<div class="form-group">
					<span style="font-size:12px;">If you wish to remove all of your organisation's data from NZPolice, you can <a href="javascript:void(0);">delete your account</a>.</span>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7n4YCE-ZVwWH2vqsRNlww0YFkAvNGTkY&sensor=false&libraries=places&language=en"></script>
<script>
	var input = document.getElementById('cityz');
	var autocomplete = new google.maps.places.Autocomplete(input);
</script>
</body>
</html>
