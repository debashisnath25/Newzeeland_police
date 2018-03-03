<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Manage Employee | TeamGraph</title>
<?php include("metalinks.php");?>
<link href="css/dataTables.bootstrap.css" rel="stylesheet">
<link href="css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>
<!-- loader -->
<div class="loader"><img src="images/loader2.gif" alt=""> </div>
<!-- loader ends -->
<div id="wrapper">
  <?php include("sidebar.php");?>
  <!-- /.navbar-static-side -->
  <div id="page-wrapper">
    <div class="row">
      <?php include("header.php");?>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">TeamGraph</a></li>
      <li class="active">Manage Employee</li>
    </ol>
    </div>
	<form method="POST">
		<div class="row">
		  <div class="col-lg-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Update your list of employees</div>
			  <div class="panel-body">
				<strong>Instructions to upload employee details:</strong>
				<p>Please choose a .csv (comma-separated variables) file containing the email address, first name, last name, and teams (in that sequence), of all your employees. As a reference, you can <a href="javascript:void(0);">dowload a copy of your current employee list here</a>.</p>
				  <div class="form-group">
					<div class="col-md-3">
						<input type="file" name="file">
					</div>
					<div class="col-md-2">
						<input type="submit" class="btn btn-primary" value="Upload List" name="upload">
					</div>
				  </div>
			  </div>
			  <div class="panel-footer"><b>NOTE:</b> The file you upload will replace your existing list of employees.Once you choose a .csv file, you will be notified of changes to your current list before you confirm the upload.</div>
			</div>
		  </div>
		  <!-- /.col-lg-12 --> 
		</div>
	</form>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
			<div class="row" style="padding-left:15px;">
			  <div class="col-md-3" style="color: #607D8B;">
					<h2>Employees in</h2>
			  </div>
			  <div class="col-md-2" style="margin-top:18px;">
				<select class="form-control">
                      <option>All Company</option>
                      <option>Customer Support</option>
                      <option>CXO</option>
                      <option>Engineering</option>
                      <option>Exp.>5yrs</option>
					  <option>Marketing</option>
					  <option>New Hires</option>
                    </select>
			  </div>
			</div>
			<form method="POST">
				<div class="row" style="padding-left:15px;">
				  <div class="col-md-3" style="color: #607D8B;margin-top:18px;">
						<h4>Add Employees Individuality:</h4>
				  </div>
				  <div class="col-md-2" style="margin-top:18px;">
					<input type="text" class="form-control" placeholder="Full Name">
				  </div>
				  <div class="col-md-2" style="margin-top:18px;">
					<input type="email" class="form-control" placeholder="Email Id">
				  </div>
				  <div class="col-md-1" style="margin-top:18px;">
					<h5>in team</h5>
				  </div>
				  <div class="col-md-2" style="margin-top:18px;">
					<select class="form-control">
						  <option>All Company</option>
						  <option>Customer Support</option>
						  <option>CXO</option>
						  <option>Engineering</option>
						  <option>Exp.> 5yrs</option>
						  <option>Marketing</option>
						  <option>New Hires</option>
					</select>
				  </div>
				  <div class="col-md-2" style="margin-top:18px;">
					<button type="submit" class="btn btn-primary">Submit Button</button>
				  </div>
				</div>
			</form>
          <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table " id="dataTables-example">
				  <thead>
					<tr>
					  <th>ID </th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Team</th>
					  <th>Role</th>
					  <th>Status</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php
					for($i=0;$i<20;$i++){
				  ?>
					<tr class="odd">
					  <td><img src="images/pic1.png" alt="" class="gridpic">10001</td>
					  <td>John Doe</td>
					  <td>info@maxartkiller.in</td>
					  <td class="center">Marketing,CXO,Customer Support</td>
					  <td class="center">Employee</td>
					  <td class="center"><span class="status active">Active</span></td>
					</tr>
					 <tr class="odd">
					  <td><img src="images/pic3.png" alt="" class="gridpic">10042</td>
					  <td>Lady Joe</td>
					  <td>info@maxartkiller.in</td>
					  <td class="center">Marketing,CXO,Customer Support</td>
					  <td class="center">Employee</td>
					  <td class="center"><span class="status inactive">Inactive</span></td>
					</tr>
					<?php
						}
					?>
				  </tbody>
				</table><!-- /.table-responsive -->           
            </div>
            <!-- /.panel-body --> 
        </div>
        <!-- /.panel --> 
      </div>
      <!-- /.col-lg-12 --> 
    </div> 
  </div>
</div>
<!-- jQuery --> 
<?php include("footer.php");?>
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/dataTables.bootstrap.min.js"></script> 
<script src="js/dataTables.responsive.js"></script> 
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
                pageLength:10,
                sPaginationType: "full_numbers",
                oLanguage: {
                    oPaginate: {
                        sFirst: "<<",
                        sPrevious: "<",
                        sNext: ">", 
                        sLast: ">>" 
                    }
                }
            });
    });
    </script>
</body>
</html>
