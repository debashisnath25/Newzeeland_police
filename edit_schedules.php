<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Schedule | Newzeland Police
    </title>
    <?php include("metalinks.php");?>
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/dataTables.responsive.css" rel="stylesheet">
    <style>
      .modal-dialog {
        height:400px;
      }
      .modal-content {
        /* 80% of window height */
        height:400px;
      }
    </style>
  </head>
  <body>
    <!-- loader -->
    <div class="loader">
      <img src="images/loader2.gif" alt=""> 
    </div>
    <!-- loader ends -->
    <div id="wrapper">
      <?php include("sidebar.php");?>
      <!-- /.navbar-static-side -->
      <div id="page-wrapper">
        <div class="row">
          <?php include("header.php");?>
          <ol class="breadcrumb">
            <li>
              <a href="dashboard.php">Employee Survey
              </a>
            </li>
            <li class="active">Edit Schedules
            </li>
          </ol>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-lg-12">
            <div class="panel panel-default"> 
              <!-- /.panel-heading -->
              <div class="panel-body"> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#home" data-toggle="tab" aria-expanded="false" style="font-size:12px;">Schedule
                    </a> 
                  </li>
                  <li class="">
                    <a href="#profile" data-toggle="tab" aria-expanded="false" style="font-size:12px;">Frequency
                    </a> 
                  </li>
                  <li class="">
                    <a href="#target" data-toggle="tab" aria-expanded="false" style="font-size:12px;">Target
                    </a> 
                  </li>
                  <li class="">
                    <a href="#Email" data-toggle="tab" aria-expanded="false" style="font-size:12px;">Email
                    </a> 
                  </li>
                  <li class="pull-right" data-toggle="modal" data-target="#myModal">
                    <button type="button" class="btn btn-success btn-circle btn-lg">
                      <i class="fa fa-plus">
                      </i> 
                    </button>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane fade padding active in" id="home">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-info">
                          <div class="panel-heading">Let's start collecting data
                          </div>
                          <div class="panel-body">
							<div class="col-md-12">
							<div class="col-md-4">
								<h6 style="color:#cccccc;">Start Date</h6>
								<div class="form-group">
									<input class="form-control"  placeholder="E.g i feel trusted to do my job">
								</div>
							</div>
							<div class="col-md-4">
								<h6 style="color:#cccccc;">Frequency</h6>
								<select class="form-control">
								  <option>Always</option>
								  <option>Once</option>
								  <option>Weekly</option>
								  <option>Monthly</option>
								  <option>Quarterly</option>
								</select>
							</div>
							<div class="col-md-4" style="margin-top:10px;">
								<h6 style="color:#cccccc;">Information</h6>
								<p style="font-size:12px;">Driver questions are questions taken from the body of organisational psychology research.</p>
							</div>
							<div>
							<div class="col-md-12">
							<div class="col-md-3" style="margin-top:10px;">
								<h6 style="color:#cccccc;">Start</h6>
								<h4 style="font-size:15px;">Sat, 3 Mar.</h4>
							</div>
							<div class="col-md-3" style="margin-top:10px;">
								<h6 style="color:#cccccc;">End</h6>
								<h4 style="font-size:15px;">Sun, 11 Mar.</h4>
							</div>
							<div class="col-md-3" style="margin-top:10px;">
								<h6 style="color:#cccccc;">Frequency</h6>
								<h4 style="font-size:15px;">Every week.</h4>
							</div>
							<div class="col-md-3" style="margin-top:10px;">
								<h6 style="color:#cccccc;">Sends To</h6>
								<h4 style="font-size:15px;">1 Employees</h4>
							</div>
							</div>
                          </div>
                         
                        </div>
						
                      </div>
					  <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top:11px;font-size:15px;">Enable data collection:first round</button>
                    </div> 
                  </div>
				</div>
				</div>
                  <div class="tab-pane fade padding" id="profile">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="panel panel-info">
                          <div class="panel-heading">What are open-ended questions?
                          </div>
                          <div class="panel-body">
                            <p style="font-size:10px;">This lets you asked open-ended questions, without having to fit your question into Peakon's engagement framework.
                            </p>
                          </div>
                          <div class="panel-footer">Export questions
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>

				  <div class="tab-pane fade padding" id="target">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="panel panel-info">
                          <div class="panel-heading">What are open-ended questions?
                          </div>
                          <div class="panel-body">
                            <p style="font-size:10px;">This lets you asked open-ended questions, without having to fit your question into Peakon's engagement framework.
                            </p>
                          </div>
                          <div class="panel-footer">Export questions
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
				  <div class="tab-pane fade padding" id="email">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="panel panel-info">
                          <div class="panel-heading">What are open-ended questions?
                          </div>
                          <div class="panel-body">
                            <p style="font-size:10px;">This lets you asked open-ended questions, without having to fit your question into Peakon's engagement framework.
                            </p>
                          </div>
                          <div class="panel-footer">Export questions
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>


                </div>
              </div>
              <!-- /.panel-body --> 
            </div>
            <!-- /.panel --> 
          </div>
          <!-- /.col-lg-6 -->
          <!-- /.col-lg-6 --> 
        </div>
        <!-- /.row -->
      </div>
    </div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
            </button>
            <h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Send a test
            </h4>
          </div>
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel2" style="text-align:center;color:#cccccc;margin-top:-10px;">Schedule For
            </h5>
          </div>
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel2" style="text-align:center;margin-top:-10px;">Company
            </h4>
          </div>
          <div class="modal-body">
            <p>You can try out Peakon by sending a few test questions to yourself and some colleagues. Pick the employees you want to include in the test below.
            </p>
          </div>
          <div style="margin-left:220px;">
            <a class="btn btn-default btn-sm" href="/employees">
              <i class="icon-add-employee" >
              </i> Add employee
            </a>
          </div>
          <div class="modal-footer">
          </div>
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
            </button>
            <h4 class="modal-title" id="myModalLabel3" style="text-align:center;">Add Question
            </h4>
          </div> 
          <div class="modal-body" style="height:200px;">
            <div class="col-md-8">
              <h6 style="color:#cccccc;">Question
              </h6>
              <div class="form-group">
                <input class="form-control" style="background:#cccccc;" placeholder="E.g i feel trusted to do my job">
              </div>
            </div>
            <div class ="col-md-4">
              <h6 style="color:#cccccc;">Frequency
              </h6>
              <select class="form-control">
                <option>Always
                </option>
                <option>Once
                </option>
                <option>Weekly
                </option>
                <option>Monthly
                </option>
                <option>Quarterly
                </option>
              </select>
            </div>
            <div class="col-md-12" id="bondho">
              <h6 style="color:#cccccc;">Localization
              </h6>
              <h4 style="font-size:12px;" id="kaj_suru">
                <u>+ Add Traselation
                </u>
              </h4>
            </div>
            <div class="col-md-12" id="khulbe" style="display:none;">
              <h6 style="color:#cccccc;">Localization
              </h6>
              <h4 style="font-size:12px;" id="kaj_sesh">
                <u>- Hide Traselation
                </u>
              </h4>
              <div class="col-md-8">
                <h6 style="color:#cccccc;">Question
                </h6>
                <div class="form-group">
                  <input class="form-control" style="background:#cccccc;" placeholder="E.g i feel trusted to do my job">
                </div>
              </div>
              <div class ="col-md-4">
                <h6 style="color:#cccccc;">Frequency
                </h6>
                <select class="form-control">
                  <option>Always
                  </option>
                  <option>Once
                  </option>
                  <option>Weekly
                  </option>
                  <option>Monthly
                  </option>
                  <option>Quarterly
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close
            </button>
            <button type="button" class="btn btn-primary">Save changes
            </button>
          </div>
          <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
    </div>
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
            </button>
            <h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Coustom Preview
            </h4>
          </div>
          <div class="modal-header">
            <p style="font-size:12px;color:#cccccc;text-align:center;">View how the survey looks before sending it out.
            </p>
          </div>
          <div class="modal-body" style="color:#cccccc;padding:25px;">
          </div>
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
    <!-- jQuery --> 
    <?php include("footer.php");?>
    <script src="js/jquery.dataTables.min.js">
    </script> 
    <script src="js/dataTables.bootstrap.min.js">
    </script> 
    <script src="js/dataTables.responsive.js">
    </script> 
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
        }
                                          );
      }
                       );
    </script>
    <script>
      $(document).ready(function() {
        $('#dataTables-example1').DataTable({
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
        }
                                           );
      }
                       );
    </script>
    <script>
      $("#kaj_suru").click(function () {
        $("#bondho").css("display","none")
        $("#khulbe").css("display","block")
        // $("#").show();   
      }
                          );
      $("#kaj_sesh").click(function () {
        $("#bondho").css("display","block")
        $("#khulbe").css("display","none")
        // $("#").show();   
      }
                          );
    </script>
  </body>
</html>
