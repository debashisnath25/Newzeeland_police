<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Manage Employee | NZPolice</title>
<?php include("metalinks.php");?>
<link href="css/dataTables.bootstrap.css" rel="stylesheet">
<link href="css/dataTables.responsive.css" rel="stylesheet">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
	height:600px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #fff;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
	height:600px;
}
</style>
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
      <li><a href="dashboard.php">NZPolice</a></li>
      <li class="active">Manage Employee</li>
    </ol>
    </div>
	<div class="panel panel-default">
	  <div class="panel-body no-padding">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#information1" data-toggle="tab">Overview</a> </li>
		  <li><a href="#profile1" data-toggle="tab">Attributes</a></li>
		  <li><a href="#skills1" data-toggle="tab">Access Control</a></li>
		</ul>
		<br>
		 <div class="tab-content ">
		  <div class="tab-pane fade  in active" id="information1">
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
		  
		<!-- /.row -->
		<div class="row">
		  <div class="col-lg-12">
			<div class="panel panel-default">
				<div class="row" style="padding-left:15px;">
				  <div class="col-md-12 text-right" style="color: #607D8B;">
					 <a href="add_employee.php" class="btn btn-default pull-right"><span class="fa fa-plus" aria-hidden="true"></span> Add Employee</a>
				  </div>
				</div>
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
	  <div class="tab-pane fade" id="profile1">
	    <div class="row">
		  <div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
			  <!-- /.panel-heading -->
				<div class="panel-body">
					<div class="tab">
					  <button class="tablinks" onclick="openCity(event, 'Manager')" id="defaultOpen">Manager</button>
					  <button class="tablinks" onclick="openCity(event, 'Department')">Department</button>
					  <button class="tablinks" onclick="openCity(event, 'Office')">Office</button>
					  <button class="tablinks" onclick="openCity(event, 'Employed_since')" id="defaultOpen">Employed since</button>
					  <button class="tablinks" onclick="openCity(event, 'dob')">Date of Birth</button>
					  <button class="tablinks" onclick="openCity(event, 'Gender')">Gender</button>
					  <button class="tablinks" onclick="openCity(event, 'Salary')">Salary</button>
					</div>

					<div id="Manager" class="tabcontent">
					  <form method="POST">
						 <div class="row">
						  <div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="panel">
							  <div class="panel-heading">Attribute : <b>Manager</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Employee</h4>
								<h5>Use to setup people relationships, such as who is the employee's manager or HRBP.</h5>
								  <div class="form-group">
									<div class="col-md-2 col-sm-2 col-xs-2">
										<label>Name</label>
									</div>
									<div class="col-md-10 col-sm-10 col-xs-10">
										<input type="text" class="form-control" placeholder="Manager">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>
								  </div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>			
						</div>

						<div id="Department" class="tabcontent">
						<form method="POST">
						 <div class="row">
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Department</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Option</h4>
								<h5>Choose this to setup lists with multiple fixed values, such as a list of departments.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Department">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>

									<div class="col-md-12 style="padding-top:10px;">
										<strong>Branded segments&nbsp;</strong><br/>
										<p>For complex organisations. Uses the segment name and logo as branding in surveys and emails. Use this to use entity specific branding.</p>
									</div>
									<div class="col-md-12" style="padding-top:10px;padding-bottom:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									 </div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					</div>

					  <div id="Office" class="tabcontent">
						<form method="POST">
						 <div class="row">
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Office</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Option</h4>
								<h5>Choose this to setup lists with multiple fixed values, such as a list of departments.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Office">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>

									<div class="col-md-12 style="padding-top:10px;">
										<strong>Branded segments&nbsp;</strong><br/>
										<p>For complex organisations. Uses the segment name and logo as branding in surveys and emails. Use this to use entity specific branding.</p>
									</div>
									<div class="col-md-12" style="padding-top:10px;padding-bottom:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									 </div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					  </div>
					  <div id="Employed_since" class="tabcontent">
						<form method="POST">
						 <div class="row">
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Employed since</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Date</h4>
								<h5>Used to set specific dates, such as hire dates.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Employed since">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					  </div>
					  <div id="dob" class="tabcontent">
						<form method="POST">
						 <div class="row">
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Date of Birth</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Date</h4>
								<h5>Used to set specific dates, such as hire dates.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Date of Birth">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					  </div>
					  <div id="Gender" class="tabcontent">
						<form method="POST">
						 <div class="row">
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Gender</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Option</h4>
								<h5>Choose this to setup lists with multiple fixed values, such as a list of departments.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Gender">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>
									<div class="col-md-12" style="padding-top:10px;">
										<strong>Branded segments&nbsp;</strong><br/>
										<p>For complex organisations. Uses the segment name and logo as branding in surveys and emails. Use this to use entity specific branding.</p>
									</div>
									<div class="col-md-12" style="padding-top:10px;padding-bottom:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									 </div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					  </div>
					  <div id="Salary" class="tabcontent">
						<form method="POST">
						 <div class="row">
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Salary</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Number</h4>
								<h5>Use this to setup number based values, such as salaries, performance evaluation scores, etc.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Salary">
									</div>
								   </div>
								   <div class="form-group">
									<div class="col-md-2">
										<label>Ranges</label>
									</div>
									<div class="col-md-10">
										<input type="number" class="form-control" placeholder="up to">
									</div>
								  </div>
								</div>
							  <div class="panel-footer">
								<div class="form-group">
									<div class="col-md-3" style="padding-top:10px;">
										<label>User Editable&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-1"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Status&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-2"></label>
										</div>
									</div>
								
									<div class="col-md-3" style="padding-top:10px;">
										<label>Use for comparison&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<label>Aliases&nbsp;<i class="fa fa-question-circle"></i></label>
									</div>
									<div class="col-md-3" style="padding-top:10px;">
										<input type="text" class="form-control">
									</div>
									<div class="col-md-12" style="padding-top:10px;">
										<strong>Branded segments&nbsp;</strong><br/>
										<p>For complex organisations. Uses the segment name and logo as branding in surveys and emails. Use this to use entity specific branding.</p>
									</div>
									<div class="col-md-12" style="padding-top:10px;padding-bottom:10px;">
										<div class="switch">
										  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
										  <label for="cmn-toggle-3"></label>
										</div>
									 </div>
									  <button type="reset" class="btn btn-default">Reset Button</button>
									  <button type="submit" class="btn btn-primary">Submit Button</button>
								  </div>
								</div>
							  </div>
							</div>
						  </form>
						</div>
					  </div>
					</div>
				  </div>
				</div> 
			  </div>
			</div>
			<div class="tab-pane fade" id="skills1">
				<div class="row">
				<div class="col-md-6">
				  <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="panel panel-default userlist">
					  <div class="panel-heading">
						<h3 class="page-header small">General</h3>
					  <div class="panel-body text-left">
						<dl>
						  <dt><input type="checkbox"> View employees</dt>
						  <dd>Ability to view employee information.</dd>

						  <dt><input type="checkbox"> Update employees</dt>
						  <dd>Ability to update employee information.</dd>

						  <dt><input type="checkbox"> Administer employees</dt>
						  <dd>Full ability to manage employees for the company.</dd>

						  <dt><input type="checkbox"> Manage segments</dt>
						  <dd>Ability to create, update and delete segments and their managers</dd>

						  <dt><input type="checkbox"> Manage attributes</dt>
						  <dd>Ability to create, update and delete attributes</dd>

						  <dt><input type="checkbox"> Access conversations</dt>
						  <dd>Ability to ask follow-up questions to employees, and to view all existing conversations on comments</dd>
						</dl>
					  </div>
					
					<h3 class="page-header small">ENGAGE</h3>
					  <div class="panel-body text-center">
						<dl>
						  <dt><input type="checkbox"> Access statistics</dt>
						  <dd>Sets the ability to access all statistical information, such as engagement and driver scores.</dd>

						  <dt><input type="checkbox"> Access comparison of segments</dt>
						  <dd>Ability to access the segments and comparison tabs on the dashboard</dd>

						  <dt><input type="checkbox"> Access to priorities and strengths</dt>
						  <dd>Ability to see priorities and strengths</dd>

						  <dt><input type="checkbox"> Access to set and unset priorities</dt>
						  <dd>Ability to set new priorities and remove existing priorities</dd>

						  <dt><input type="checkbox"> Access to actions</dt>
						  <dd>Ability to see actions</dd>

						  <dt><input type="checkbox"> Manage actions</dt>
						  <dd>Ability to create, edit and delete actions</dd>

						  <dt><input type="checkbox"> Manage questions</dt>
						  <dd>Ability to create new driver and open-ended questions</dd>

						  <dt><input type="checkbox"> Share dashboard views</dt>
						  <dd>Allow managers to share a light version of Peakon dashboard with other employees.</dd>

						  <dt><input type="checkbox"> Access driver comments</dt>
						  <dd>Ability to read employee comments.</dd>

						  <dt><input type="checkbox"> Acknowledge driver comments</dt>
						  <dd>Ability to acknowledge driver comments, which will send an email to the commenter.</dd>

						  <dt><input type="checkbox"> Access open-ended comments</dt>
						  <dd>Ability to read open-ended comments.</dd>

						  <dt><input type="checkbox"> Acknowledge open-ended comments</dt>
						  <dd>Ability to acknowledge open-ended comments, which will send an email to the commenter.</dd>

						  <dt><input type="checkbox"> Delete comments</dt>
						  <dd>Ability to delete comments</dd>

						  <dt><input type="checkbox"> Receive upcoming survey reminder</dt>
						  <dd>Get a reminder on upcoming survey rounds with number of employees included</dd>

						  <dt><input type="checkbox"> Receive low participation emails</dt>
						  <dd>Get a participation summary during the a round if participation is low.</dd>
						</dl>
							<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-primary">Submit</button>
						  </div>
					  </div>
					  
					</div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="panel panel-default userlist">
					  <div class="panel-heading">
						<h3 class="page-header small">People(1 people)</h3>
					  <div class="panel-body text-left">
						 <div class="col-md-10">
							<select class="form-control">
							  <option selected disabled>Choose Employee</option>
							</select>
						  </div>
						  <div class="col-md-2">
							<button type="submit" class="btn btn-default">ADD</button>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		  </div>
	   </div>
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
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
