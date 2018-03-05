<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Settings | NZPolice</title>
<?php include("metalinks.php");?>
<link href="css/dataTables.bootstrap.css" rel="stylesheet">
<link href="css/dataTables.responsive.css" rel="stylesheet">
<style>
.hov:hover{
	 background-color: #F1FBF4 !important;
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
      <li class="active">Settings</li>
    </ol>
    </div>
	<form method="POST">
		<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default"> 
          <!-- /.panel-heading -->
          <div class="panel-body"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home1" data-toggle="tab" aria-expanded="false"> <span class="fa fa-home icon"></span>Dashboard</a> </li>
              <li class=""><a href="#profile1" data-toggle="tab" aria-expanded="true"> <span class="fa fa-user icon"></span>Data aggregation</a> </li>
              <li class=""><a href="#messages1" data-toggle="tab" aria-expanded="false"> <span class="fa fa-envelope-o icon"></span>Sharing</a> </li>
              <li class=""><a href="#settings1" data-toggle="tab" aria-expanded="false"> <span class="fa fa-gear icon"></span>Benchmark</a> </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade padding active in" id="home1">
                <div class="col-md-6">
					<div class="form-group">
						<label>Driver sorting</label>
						<div class="radio">
						  <label><input type="radio" value=""><span style="color:#D0D1D5;">Priority (standard)</span><p>Drivers that Peakon has identified as having a high influence on engagement are</p></label>
						</div>
						<div class="radio"><label><input type="radio" value=""><span style="color:#D0D1D5;">By score</span><p>Drivers on the histogram are listed in highest to lowest scoring order.</p></label>
						</div>
						<div class="radio">
							<label><input type="radio" value=""><span style="color:#D0D1D5;">By difference from benchmark</span> <p>Drivers on the histogram are ordered based on their difference from the industry or company benchmarks.</p></label>
						</div>
                  </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Engagement score</label>
						<div class="radio">
						  <label><input type="radio" value=""><span style="color:#D0D1D5;">Average (standard)</span><p>Shows the average engagement score of the team, department or organisation as the dashboard's default.</p></label>
						</div>
						<div class="radio"><label><input type="radio" value=""><span style="color:#D0D1D5;">eNPS</span><p>Shows the employee Net Promoter Score of the team, department or organisation as the dashboard's default.</p></label>
						</div>
                  </div>
				</div>
              </div>
              <div class="tab-pane fade padding" id="profile1">
                <div class="col-md-6">
				  <div class="panel-body">
				  <h4>Data aggregation</h4>
					<h5>Time for all data</h5>
					<p>The longest amount of time answers will be included in the current score</p>
					<div class="row show-grid" style="text-align:center;">
					  <div class="col-md-4 hov" style="padding-top: 25px;padding-bottom: 25px;">3 months</div>
					  <div class="col-md-4 hov" style="padding-top: 25px;padding-bottom: 25px;">6 months</div>
					  <div class="col-md-4 hov" style="padding-top: 14px;padding-bottom: 14px;border:2px solid #27C17D;color:#27C17D;background-color:#F1FBF4 !important;"><code style="background-color:#D7F4E0;color:#27C17D;">DEFAULT</code><br>1 year</div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
					</br>
					<h5>Time for each driver of engagement</h5>
					<p>The longest amount of time answers for a specific employee and driver will be included in the current score</p>
					<div class="row show-grid" style="text-align:center;">
					  <div class="col-md-4 hov" style="padding-top: 25px;padding-bottom: 25px;">3 months</div>
					  <div class="col-md-4 hov" style="padding-top: 14px;padding-bottom: 14px;border:2px solid #27C17D;color:#27C17D;background-color:#F1FBF4 !important;"><code style="background-color:#D7F4E0;color:#27C17D;">DEFAULT</code><br>3 months</div>
					   <div class="col-md-4 hov" style="padding-top: 25px;padding-bottom: 25px;">6 months</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
					</br>
					<h5>Time for former employees</h5>
					<p>The longest amount of time answers for a former employee will be included in the current score</p>
					<div class="row show-grid" style="text-align:center;">
					  <div class="col-md-4 hov" style="padding-top: 25px;padding-bottom: 25px;">1 month</div>
					  <div class="col-md-4 hov" style="padding-top: 14px;padding-bottom: 14px;border:2px solid #27C17D;color:#27C17D;background-color:#F1FBF4 !important;"><code style="background-color:#D7F4E0;color:#27C17D;">DEFAULT</code><br>3 months</div>
					   <div class="col-md-4 hov" style="padding-top: 25px;padding-bottom: 25px;">6 months</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
				  <div class="panel-body">
				  <h4>Data anonymity</h4>
					<h5>Minimum segment size</h5>
					<p>Controls the minimum number of responses required to break out a segment for comparison. Lower numbers mean less relative anonymity, but may be required for small teams.</p>
					<div class="row show-grid" style="text-align:center;">
					  <div class="col-md-3 hov" style="width:12.5% !important;">3
						</div> 
						<div class="col-md-3 hov" style="width:12.5% !important;">4
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">5
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;border:2px solid #27C17D;background-color:#F1FBF4 !important;">6
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">7
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">8
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">9
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">10
						</div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
					</br>
					</br>
					<h5>Data visibility threshold</h5>
					<p>Controls the minimum number of responses to a question that are required for results to appear on the dashboard. This setting, as opposed to the segment size setting, does not affect anonymity.</p>
					<div class="row show-grid" style="text-align:center;">
						<div class="col-md-3 hov" style="width:12.5% !important;">3
						</div> 
						<div class="col-md-3 hov" style="width:12.5% !important;">4
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">5
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;border:2px solid #27C17D;background-color:#F1FBF4 !important;">6
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">7
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">8
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">9
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">10
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6">
				  <div class="panel-body">
					<h5>Difference anonymity level</h5>
					<p>A minimum difference of e.g. 2 would stop a user comparing a segment of 5 employees against a segment of 4 in an attempt to identify an individual.</p>
					<div class="row show-grid" style="text-align:center;">
					  <div class="col-md-3 hov" style="width:12.5% !important;border:2px solid #27C17D;background-color:#F1FBF4 !important;">off
						</div> 
						<div class="col-md-3 hov" style="width:12.5% !important;">4
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">5
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">6
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">7
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">8
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">9
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">10
						</div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
					</br>
					<h5>Comment anonymity level</h5>
					<p>Controls the minimum number of responses required to display comments. Lower numbers mean less relative anonymity, but may be required for small teams.</p>
					<div class="row show-grid" style="text-align:center;">
						<div class="col-md-3 hov" style="width:12.5% !important;">3
						</div> 
						<div class="col-md-3 hov" style="width:12.5% !important;">4
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">5
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;border:2px solid #27C17D;background-color:#F1FBF4 !important;">6
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">7
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">8
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">9
						</div>
						<div class="col-md-3 hov" style="width:12.5% !important;">10
						</div>
					</div>
				</div>
              </div>
              <div class="tab-pane fade padding" id="messages1">
				<div class="col-md-8">
					<h4>No shared dashboards</h4>
					<p>Use a shared dashboard to give employees a better understanding of their culture and to show your commitment to creating a great workplace together.</p>
					<p>Click the share icon on the front page of your dashboard. Send the URL out to your employees, or add the dashboard to a big screen in your offices.</p>
				</div>
				<div class="col-md-4">
					<img src="images/setting.png" style="height:155px !important;">
				</div>
              </div>
              <div class="tab-pane fade padding" id="settings1">
				  <div class="row">
					<h4>Attributes used in benchmark</h4>
					<p>Across Peakon we see general trends related to how these attributes influence engagement and driver scores. By toggling on an attribute, Peakon will correct for these trends in the calculation of a True Benchmark.</p>
				</div>
				<div class="row">
					<div class="list-group-item withswitch col-md-3">
						<p class="list-group-item-text"><i class="fa fa-calendar" style="font-size:20px;;"></i><code style="background-color:#2C2F37;color:white;">Date of Birth</code></p>
					    <div class="switch">
						  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
						  <label for="cmn-toggle-1"></label>
						</div>
                    </div>
					<div class="list-group-item withswitch col-md-3">
						<p class="list-group-item-text"><i class="fa fa-briefcase" style="font-size:20px;"></i><code style="background-color:#2C2F37;color:white;">Department</code></p>
					    <div class="switch">
						  <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
						  <label for="cmn-toggle-2"></label>
						</div>
                    </div>
					<div class="list-group-item withswitch col-md-3">
						<p class="list-group-item-text"><i class="fa fa-clock-o" style="font-size:20px;"></i><code style="background-color:#2C2F37;color:white;">Employed since</code></p>
					    <div class="switch">
						  <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
						  <label for="cmn-toggle-3"></label>
						</div>
                    </div>
				</div>
				<br>
				<div class="row">
					<div class="list-group-item withswitch col-md-3">
						<p class="list-group-item-text"><i class="fa fa-calendar" style="font-size:20px;;"></i><code style="background-color:#2C2F37;color:white;">Date of Birth</code></p>
					    <div class="switch">
						  <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
						  <label for="cmn-toggle-4"></label>
						</div>
                    </div>
					<div class="list-group-item withswitch col-md-3">
						<p class="list-group-item-text"><i class="fa fa-briefcase" style="font-size:20px;"></i><code style="background-color:#2C2F37;color:white;">Department</code></p>
					    <div class="switch">
						  <input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
						  <label for="cmn-toggle-5"></label>
						</div>
                    </div>
				</div>
				<br>
				<br>
				<div class="row">
				  <div class="list-group col-md-8">
                    <label>Industry benchmark</label>
                    <p>Select the industry benchmark that's most relevant for your business as a whole.</p>
                  </div>
				  <div class="clearfix"></div>
				  <div class="list-group col-md-4">
                    <label>Benchmark</label>
                    <select class="form-control">
                      <option>Automatic</option>
                      <option>Peakon</option>
                      <option>Industry</option>
                    </select>
                  </div>
				</div>
				<div class="row">
				  <div class="list-group col-md-12">
                    <label>Segment-specific benchmark</label>
                    <p>If an area of your business could be categorised more accurately as part of another industry, then choose the segment and select a different industry benchmark for it below. For example, a financial services company may wish to use the technology industry benchmark for its fintech business unit.</p>
                  </div>
				  <div class="clearfix"></div>
				  <div class="list-group col-md-3">
				    <label>Segment</label>
					<div class="input-group">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style="background-color:#8BC34A;" type="button"><i class="fa fa-group" style="color:white;"></i> </button>
                    </span> 
					<input type="text" class="form-control">
				  </div> 
				  </div>
				  <div class="list-group col-md-3">
					<label>Benchmark</label>
					<div class="input-group">
					<select class="form-control" style="width:200%;">
					  <option>Automatic</option>
                      <option>Peakon</option>
                      <option>Industry</option>
					<select>
				  </div>
				  </div>
				  <div class="list-group col-md-3">
					<label>Segment to use as benchmark</label>
					<div class="input-group">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style="background-color:#8BC34A;" type="button"><i class="fa fa-group" style="color:white;"></i> </button>
                    </span> 
					<input type="text" class="form-control">
				  </div>
				  </div>
				  <!-- <div class="col-md-4">
					<label>Segment to use as benchmark</label>
					<div class="input-group">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style="background-color:#8BC34A;" type="button"><i class="fa fa-group" style="color:white;"></i> </button>
                    </span> 
					<input type="text" class="form-control">
				  </div>
				  </div> -->
				</div>
				<div class="row">
					<button type="button" class="btn btn-success disabled">Add specific benchmark</button>
				</div>
              </div>
            </div>
          </div>
          <!-- /.panel-body --> 
        </div>
        <!-- /.panel --> 
      </div>
    </div>
	</form>
    <!-- /.row -->
     
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
