
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>My Teams | NZPolice</title>
<?php include("metalinks.php");?>
</head>

<body>
<!-- loader -->
<div class="loader"><img src="images/loader2.gif" alt=""> </div>
<!-- loader ends -->
<div id="wrapper">
  <?php include("sidebar.php");?>
  <!-- /.navbar-static-side --> 
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="row">
    <?php include("header.php");?>
	 <ol class="breadcrumb">
      <li><a href="dashboard.php">NZPolice</a></li>
      <li class="active">My Teams Overview</li>
    </ol>
   </div>
    <div class="row">
      <div class="col-md-12  header-wrapper" >
        <h1 class="page-header">Teams Overview</h1>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <canvas id="barstacked"></canvas>
          </div>
          <!-- /.panel-body --> 
        </div>
        <!-- /.panel --> 
      </div>
    </div>
    <!-- /.row --> 
  </div>
  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper -->

<!-- jQuery --> 
<?php include("footer.php");?>
<script src="js/Chart.bundle.min.js"></script> 

<!-- Bar staked --> 
<script>
        var randomScalingFactor2 = function() {
            return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
        };
        var randomColorFactor2 = function() {
            return Math.round(Math.random() * 255);
        };

        var barChartData2 = {
            labels: ["Commitment and Involvement", "Productive Engagement", "Ownership and Initiative", "Satisfaction", "Conductive Culture", "Effective Enablement"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: "rgba(220,220,220,0.5)",
                data: [randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2()]
            }, {
                label: 'Dataset 2',
                backgroundColor: "rgba(151,187,205,0.5)",
                data: [randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2()]
            }, {
                label: 'Dataset 3',
                backgroundColor: "rgba(151,187,205,0.5)",
                data: [randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2(), randomScalingFactor2()]
            }]

        };
      

    
    window.onload = function() {
        
          var ctx1 = document.getElementById("barstacked").getContext("2d");
            window.myBar = new Chart(ctx1, {
                type: 'bar',
                data: barChartData2,
                options: {
                    title:{
                        display:false,
                        text:"Chart.js Bar Chart - Stacked"
                    },
                    tooltips: {
                        mode: 'label'
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
        });
        var ctx2 = document.getElementById("chart-area").getContext("2d");
    };

    
    </script>
</body>
</html>
