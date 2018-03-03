
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Manage Team | TeamGraph</title>
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
      <li class="active">Manage Team</li>
    </ol>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-info">
          <div class="panel-heading">Create New Team</div>
          <div class="panel-body">
			<div class="row">
				<div class="col-md-12 center">
					<div class="col-md-6">
					  <div class="form-group">
						<input type="text" class="form-control" placeholder="Enter Team Name Here">
					  </div>
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary">Submit Button</button>
					</div>
				 </div>
			 </div>
          </div>
        </div>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
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
					  <th>Parent Team</th>
					  <th>Created By</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php
					for($i=0;$i<15;$i++){
				  ?>
					<tr class="odd">
					  <td>70</td>
					  <td>new hires</td>
					  <td></td>
					  <td>demo</td>
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

<!-- Custom Theme JavaScript --> 
<script src="js/adminnine.js"></script> 

<!-- Page-Level Demo Scripts - Tables - Use for reference --> 
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
