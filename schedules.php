<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Schedules | Newzeland Police</title>
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
	<div class="row" style="margin-top:10px;">
      <div class="col-lg-12">
        <div class="panel panel-default"> 
          <!-- /.panel-heading -->
          <div class="panel-body"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab" aria-expanded="false">Schedules</a> </li>
              <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Activity</a> </li>
            
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade padding active in" id="home">
              <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">

          <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table " id="dataTables-example">
				  <thead>
					<tr>
					  <th>Target</th>
					  <th>Employees</th>
					  <th>Frequency</th>
					  <th>Next Round</th>
					  <th></th>
					  
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
					  
					  <td class="center">
					  <span class="status active">Active</span>
					<div class="pull-right">
              <div class="btn-group">
                <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li data-toggle="modal" data-target="#myModal"><a href="javascript:void(0)"><i class="fa fa-paper-plane"></i>Send Test Round</a> </li>
                  <li data-toggle="modal" data-target="#myModal1"><a href="javascript:void(0)"><i class="fa fa-eye"></i>Preview Survey</a> </li>
                </ul>
              </div>
            </div>
					  </td>
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
              <div class="tab-pane fade padding" id="profile">
              <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">

          <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table " id="dataTables-example1">
				  <thead>
					<tr>
					  <th>Round</th>
					  <th>Target</th>
					  <th>Employees</th>
					  <th>Response Rate</th>
					 
					  
					</tr>
				  </thead>
				  <tbody>
		
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

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Send a test</h4>
                  </div>
				  <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2" style="text-align:center;color:#cccccc;margin-top:-10px;">Schedule For</h5>
                  </div>
				   <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2" style="text-align:center;margin-top:-10px;">Company</h4>
                  </div>
                  <div class="modal-body"><p>You can try out Peakon by sending a few test questions to yourself and some colleagues. Pick the employees you want to include in the test below.</p></div>
				<div style="margin-left:220px;">
				  <a class="btn btn-default btn-sm" href="/employees"><i class="icon-add-employee" ></i> Add employee</a>
				</div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
                <!-- /.modal-content --> 
              </div>
              <!-- /.modal-dialog --> 
            </div>

			 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Coustom Preview</h4>
                  </div>
				  <div class="modal-header">
                   <p style="font-size:12px;color:#cccccc;text-align:center;">View how the survey looks before sending it out.</p>
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
            });
    });
    </script>
</body>
</html>
