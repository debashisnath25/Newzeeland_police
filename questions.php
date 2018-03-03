<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Questions | Newzeland Police</title>
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
<div class="loader"><img src="images/loader2.gif" alt=""> </div>
<!-- loader ends -->
<div id="wrapper">
  <?php include("sidebar.php");?>
  <!-- /.navbar-static-side -->
  <div id="page-wrapper">
    <div class="row">
      <?php include("header.php");?>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Employee Survey</a></li>
      <li class="active">Questions</li>
    </ol>
    </div>
	<div class="row" style="margin-top:10px;">
      <div class="col-lg-12">
        <div class="panel panel-default"> 
          <!-- /.panel-heading -->
          <div class="panel-body"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab" aria-expanded="false">Driver Questions</a> </li>
              <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Open-ended Questions</a> </li>
			    <li class="pull-right" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-plus"></i> </button></li>
            
            </ul>
     
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade padding active in" id="home">
				<div class="row">
      <div class="col-lg-6">
        <div class="panel panel-info">
          <div class="panel-heading">What are driver questions?</div>
          <div class="panel-body">
            <p style="font-size:10px;">Driver questions are questions taken from the body of organisational psychology research, which are shown to directly relate to engagement. All standard questions are benchmarked and available in multiple target languages automatically, so try to use the standard questions where possible.</p>
          </div>
         <div class="panel-footer">Export questions</div>
        </div>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-6">
        <div class="panel panel-warning">
          <div class="panel-heading">Formulating driver questions</div>
          <div class="panel-body">
            <p  style="font-size:10px;">All driver questions must use a 0-10 scale, so make sure they are framed in the correct positive manner where 10 is a good result. Keep the language as simple as possible, and make sure to pick the closest possible driver category. Custom questions are not translated.</p>
          </div>
          <div class="panel-footer">Export questions</div>
        </div>
      </div>

      <!-- /.col-lg-4 --> 
    </div> 
	
	<div class="row">

      
      <div class="col-xs-12 col-md-12">
        <h1 class="page-header small">Engagement</h1>
        <p class="page-subtitle small">How likely is it you would recommend clickrstop software solutions private limited as a place to work?</p>
        <div class="panel-group " id="accordian2" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default active">
            <div class="panel-heading" role="tab" id="headingOne2">
              <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2" class="collapsed" style="font-size:12px;"> How likely is it you would recommend clickrstop software solutions private limited as a place to work?<span class="fa fa-angle-down pull-right"></span> </a> </h4>
            </div>
            <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne2" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
             		<div class="col-md-10">
					<h6 style="color:#cccccc;">Question</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class ="col-md-2">
					<h6 style="color:#cccccc;">Driver</h6>
					<p>Engagement</p>
				</div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo2">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2" style="font-size:12px;">  If you were offered the same job at another organisation, how likely is it you would stay at clickrstop software solutions private limited?<span class="fa fa-angle-down pull-right"></span> </a> </h4>
            </div>
            <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
              <div class="panel-body">
               		<div class="col-md-10">
					<h6 style="color:#cccccc;">Question</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class ="col-md-2">
					<h6 style="color:#cccccc;">Driver</h6>
					<p>Engagement</p>
				</div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree2">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2" style="font-size:12px;"> If you were offered the same job at another organisation, how likely is it you would stay at clickrstop software solutions private limited? <span class="fa fa-angle-down pull-right"></span> </a> </h4>
            </div>
            <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
              <div class="panel-body">
               		<div class="col-md-10">
					<h6 style="color:#cccccc;">Question</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class ="col-md-2">
					<h6 style="color:#cccccc;">Driver</h6>
					<p>Engagement</p>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
              </div>
              <div class="tab-pane fade padding" id="profile">
				<div class="row">
      <div class="col-lg-6">
        <div class="panel panel-info">
          <div class="panel-heading">What are open-ended questions?</div>
          <div class="panel-body">
            <p style="font-size:10px;">This lets you asked open-ended questions, without having to fit your question into Peakon's engagement framework.</p>
          </div>
         <div class="panel-footer">Export questions</div>
        </div>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-6">
        <div class="panel panel-warning">
          <div class="panel-heading">Open-ended comments</div>
          <div class="panel-body">
            <p  style="font-size:10px;">To view the comments your employees have provided, go to your dashboard and click the Open-Ended Comments tab.</p>
          </div>
          <div class="panel-footer">Export questions</div>
        </div>
      </div>

      <!-- /.col-lg-4 --> 
    </div> 

	<div class="row">

<div class="col-xs-12  col-md-12">
        <h1 class="page-header small">
Question</h1>
        <p class="page-subtitle small">Limited information is visible</p>
        <div class="panel-group " id="accordian3" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default active">
            <div class="panel-heading" role="tab" id="headingOne3">
              <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3" class="" style="font-size:12px;">If you had a magic wand, what's the one thing you would change about clickrstop software solutions private limited?<span class="fa fa-angle-down pull-right"></span> </a> </h4>
            </div>
            <div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne3" aria-expanded="true" style="">
              <div class="panel-body">
        		<div class="col-md-8">
					<h6 style="color:#cccccc;">Question</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class ="col-md-4">
					<h6 style="color:#cccccc;">Frequency</h6>
					<select class="form-control">
                          <option>Always</option>
                      <option>Once</option>
                      <option>Weekly</option>
                      <option>Monthly</option>
                      <option>Quarterly</option>
                    </select>
				</div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo3">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3" style="font-size:12px;">What team event would you most like to see next?<span class="fa fa-angle-down pull-right"></span> </a> </h4>
            </div>
            <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3">
              <div class="panel-body">
              		<div class="col-md-8">
					<h6 style="color:#cccccc;">Question</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class ="col-md-4">
					<h6 style="color:#cccccc;">Frequency</h6>
					<select class="form-control">
                             <option>Always</option>
                      <option>Once</option>
                      <option>Weekly</option>
                      <option>Monthly</option>
                      <option>Quarterly</option>
                    </select>
				</div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree3">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordian" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3" style="font-size:12px;">What's on your mind right now that you'd like to tell us?<span class="fa fa-angle-down pull-right"></span> </a> </h4>
            </div>
            <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
              <div class="panel-body">
            		<div class="col-md-8">
					<h6 style="color:#cccccc;">Question</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class ="col-md-4">
					<h6 style="color:#cccccc;">Frequency</h6>
					<select class="form-control">
                      <option>Always</option>
                      <option>Once</option>
                      <option>Weekly</option>
                      <option>Monthly</option>
                      <option>Quarterly</option>
                    </select>
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
			 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%;">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel3" style="text-align:center;">Add Question</h4>
                  </div> 
                  <div class="modal-body" style="height:200px;">
					<div class="col-md-8">
						<h6 style="color:#cccccc;">Question</h6>
						<div class="form-group">
                    
                    <input class="form-control" style="background:#cccccc;" placeholder="E.g i feel trusted to do my job">
                  </div>
					</div>
					<div class ="col-md-4">
						<h6 style="color:#cccccc;">Frequency</h6>
						<select class="form-control">
						  <option>Always</option>
						  <option>Once</option>
						  <option>Weekly</option>
						  <option>Monthly</option>
						  <option>Quarterly</option>
						</select>
					</div>
					<div class="col-md-12" id="bondho">
					<h6 style="color:#cccccc;">Localization</h6>
					<h4 style="font-size:12px;" id="kaj_suru"><u>+ Add Traselation</u></h4>
					</div>

					<div class="col-md-12" id="khulbe" style="display:none;">
					<h6 style="color:#cccccc;">Localization</h6>
					<h4 style="font-size:12px;" id="kaj_sesh"><u>- Hide Traselation</u></h4>
						<div class="col-md-8">
						<h6 style="color:#cccccc;">Question</h6>
						<div class="form-group">
                    
                    <input class="form-control" style="background:#cccccc;" placeholder="E.g i feel trusted to do my job">
                  </div>
					</div>
					<div class ="col-md-4">
						<h6 style="color:#cccccc;">Frequency</h6>
						<select class="form-control">
						  <option>Always</option>
						  <option>Once</option>
						  <option>Weekly</option>
						  <option>Monthly</option>
						  <option>Quarterly</option>
						</select>
					</div>
					
					</div>
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
<script>
	$("#kaj_suru").click(function () {
        $("#bondho").css("display","none")
        $("#khulbe").css("display","block")
        // $("#").show();   
    });

    $("#kaj_sesh").click(function () {
        $("#bondho").css("display","block")
        $("#khulbe").css("display","none")
        // $("#").show();   
    });

</script>
</body>
</html>
