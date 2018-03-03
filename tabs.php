
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Overview | NZPolice</title>

<!-- Bootstrap Core CSS -->
<?php include("metalinks.php");?>
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
  <!-- /.navbar-static-side --> 
  
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="row">
      <?php include("header.php");?>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">NZPolice</a></li>
      <li class="active">Overview</li>
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
    <!-- Tab panes -->
    <div class="tab-content ">
      <div class="tab-pane fade in active" id="information1">
	   <form method="POST">
        <div class="row">
          <div class="col-lg-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Update your list of employees
				<a href="add_employee.php" class="btn btn-default pull-right"><span class="fa fa-plus" aria-hidden="true"></span> Add Employee</a>
			  </div>
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
        </div>
	  </form>
	  <div class="row">
		  <div class="col-lg-12">
			<div class="panel panel-default">
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
					</table>         
				</div>
			</div>
		  </div>
		</div> 
	  </div>
    <!----------------------------------------------------------------Attributes------------------------------------------------------------------------> 
	   <div class="tab-pane fade" id="profile1">
	    <div class="row">
		  <div class="col-lg-12">
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
						  <div class="col-lg-12">
							<div class="panel ">
							  <div class="panel-heading">Attribute : <b>Manager</b></div>
							  <div class="panel-body">
								<h4>Type</h4>
								&nbsp;<h4>Employee</h4>
								<h5>Use to setup people relationships, such as who is the employee's manager or HRBP.</h5>
								  <div class="form-group">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="Manager">
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

						<div id="Office" class="tabcontent">
							
						</div>
					</div>
				</div>
			  </div>
			</div> 
		  </div>


        </div>
      </div>


      <div class="tab-pane fade    " id="skills1">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Technology skills</h1>
                <p class="page-subtitle small">Limited information is visible</p>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="progress-radial progress-25">
                      <div class="overlay">25%</div>
                    </div>
                    <h3>HTML</h3>
                    <p class="light">Rating skill, progress and radial view. This ill be in multiplication of five.</p>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="progress-radial progress-50">
                      <div class="overlay">50%</div>
                    </div>
                    <h3>CSS</h3>
                    <p class="light">Rating skill, progress and radial view. This ill be in multiplication of five.</p>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="progress-radial progress-75">
                      <div class="overlay">75%</div>
                    </div>
                    <h3>JS</h3>
                    <p class="light">Rating skill, progress and radial view. This ill be in multiplication of five.</p>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="progress-radial progress-90">
                      <div class="overlay">90%</div>
                    </div>
                    <h3>Creativity</h3>
                    <p class="light">Rating skill, progress and radial view. This ill be in multiplication of five.</p>
                    <br>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-12 col-lg-8">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Proficiency</h1>
                <p class="page-subtitle small">Limited information is visible</p>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-5 col-md-6 skillprogress">
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="">HTML</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> <span class="">CSS</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="">JS</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="">Photoshop</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> <span class="">Creativity</span> </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-6">
                    <div class="panel-group accordian" id="accordian" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default active">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Collapsible Group Item #1 </a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <dl class="">
                              <dt>Description lists</dt>
                              <dd>A description list is perfect for defining terms.<br>
                                <span class="text-muted">January 2001</span> </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Collapsible Group Item #2 </a> </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <dl class="">
                              <dt>Description lists</dt>
                              <dd>A description list is perfect for defining terms.<br>
                                <span class="text-muted">January 2001</span> </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Collapsible Group Item #3 </a> </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <dl class="">
                              <dt>Description lists</dt>
                              <dd>A description list is perfect for defining terms.<br>
                                <span class="text-muted">January 2001</span> </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Average Rating</h1>
                <p class="page-subtitle small">Based on 465 Ratings</p>
              </div>
              <div class="panel-body text-center">
                <div class="progress-radial progress-90 large">
                  <div class="overlay">90%</div>
                </div>
                <h3>Avg. Rate</h3>
                <p class="light">Rating skill, progress and radial view. This ill be in multiplication of five.</p>
                <br>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  " id="settings1">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="col-md-12">
                <form class="form-inline">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" placeholder="Jane Doe">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" placeholder="info@maxartkiller.com">
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control">
                      <option>Food</option>
                      <option>Sprots</option>
                      <option>Technology</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary ">Subscribe me!</button>
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">My Profile</h1>
                <p class="page-subtitle small">My Profile in editable mode</p>
              </div>
              <div class="col-md-12">
                <form>
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control"  placeholder="First name">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control"  placeholder="Last name">
                  </div>
                  <div class="form-group">
                    <label>Birthdate</label>
                    <input type="text" class="form-control"  placeholder="Birthdate">
                  </div>
                  <div class="form-group">
                    <label>Phone number</label>
                    <input type="number" class="form-control"  placeholder="Phone number">
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control"  placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control"  placeholder="Company name">
                  </div>
                  <div class="form-group">
                    <label>About</label>
                    <textarea class="form-control" placeholder="Bio"></textarea>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Contact information</h1>
                <p class="page-subtitle small">My Profile in editable mode</p>
              </div>
              <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Please enter valid zipcode! </div>
                <form>
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control"  placeholder="Company name">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" placeholder="Address"></textarea>
                  </div>
                  <div class="form-group has-error  has-feedback ">
                    <label >Zipcode</label>
                    <input type="number" class="form-control"  placeholder="Zipcode">
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> </div>
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control"  placeholder="City">
                  </div>
                  <div class="form-group">
                    <label>Phone number</label>
                    <input type="number" class="form-control"  placeholder="Phone number">
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control"  placeholder="Email">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Register</h1>
                <p class="page-subtitle small">Simple Registration form</p>
              </div>
              <div class="col-md-12">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Profile picture</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Note: Please upload 200x200px JPEG image file only </p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Subscribe me for newsletter </label>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Register</button>
                  <button type="submit" class="btn btn-default pull-right">Sign in Here</button>
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Change password</h1>
                <p class="page-subtitle small">My Profile in editable mode</p>
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
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Credit card Info</h1>
                <p class="page-subtitle small">Payment made easy save cards</p>
              </div>
              <div class="col-md-12">
                <form >
                  <div class="form-group">
                    <label >Card Holder Name</label>
                  </div>
                  <div class="form-group">
                    <label >Card number</label>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx">
                      <span class="input-group-addon" data-toggle="popover" data-placement="left" data-trigger="hover" title="Tips" data-content="Check your card and type card number without spaces">?</span> </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date Expiry</label>
                        <select class="form-control">
                          <option>January</option>
                          <option>February</option>
                          <option>March</option>
                          <option>April</option>
                          <option>May</option>
                          <option>June</option>
                          <option>July</option>
                          <option>August</option>
                          <option>September</option>
                          <option>October</option>
                          <option>November</option>
                          <option>December</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>&nbsp;</label>
                        <select class="form-control">
                          <option>Year</option>
                          <option>2017</option>
                          <option>2016</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CSV number</label>
                        <input type="number" class="form-control" placeholder="Security code">
                      </div>
                    </div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-success ">Pay now!</button>
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Personal settings</h1>
                <p class="page-subtitle small">Customize your personal settings</p>
              </div>
              <div class="col-md-12">
                <div class="list-group ">
                  <div class="list-group-item withswitch">
                    <h5 class="list-group-item-heading">Email Notification</h5>
                    <p class="list-group-item-text">Send me emails about updates</p>
                    <div class="switch">
                      <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                      <label for="cmn-toggle-1"></label>
                    </div>
                  </div>
                  <div class="list-group-item withswitch">
                    <h5 class="list-group-item-heading">Newsletter</h5>
                    <p class="list-group-item-text">Send me newsletter via email</p>
                    <div class="switch">
                      <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
                      <label for="cmn-toggle-2"></label>
                    </div>
                  </div>
                  <div class="list-group-item withswitch">
                    <h5 class="list-group-item-heading">Public profile</h5>
                    <p class="list-group-item-text">Show me in search </p>
                    <div class="switch">
                      <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
                      <label for="cmn-toggle-3"></label>
                    </div>
                  </div>
                  <div class="list-group-item withswitch">
                    <h5 class="list-group-item-heading">Conect via username</h5>
                    <p class="list-group-item-text">No need to check friend list</p>
                    <div class="switch">
                      <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox">
                      <label for="cmn-toggle-4"></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">Cart Updates</h1>
                <p class="page-subtitle small">Product change Quantity</p>
              </div>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Image</th>
                    <th>Item</th>
                    <th >Quantity</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="../img/citrus-1299776_640.png" alt=""  ></td>
                    <td>Citrus</td>
                    <td><input type="text" placeholder="1" class="form-control"></td>
                    <td>$2,350.00</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="../img/strawberry-34066_640.png" alt=""  ></td>
                    <td>Citrus</td>
                    <td><input type="text" placeholder="1" class="form-control"></td>
                    <td>$2,350.00</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="../img/orange-158258_640.png" alt=""  ></td>
                    <td>Citrus</td>
                    <td><input type="text" placeholder="1" class="form-control"></td>
                    <td>$2,350.00</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="../img/citrus-1299776_640.png" alt=""  ></td>
                    <td>Citrus</td>
                    <td><input type="text" placeholder="1" class="form-control"></td>
                    <td>$2,350.00</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="../img/strawberry-34066_640.png" alt=""  ></td>
                    <td>Citrus</td>
                    <td><input type="text" placeholder="1" class="form-control"></td>
                    <td>$2,350.00</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="../img/orange-158258_640.png" alt=""  ></td>
                    <td>Citrus</td>
                    <td><input type="text" placeholder="1" class="form-control"></td>
                    <td>$2,350.00</td>
                  </tr>
                </tbody>
              </table>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
	</div>

    <!-- /.row --> 
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
