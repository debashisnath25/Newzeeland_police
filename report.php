<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Report | TeamGraph</title>
<?php include("metalinks.php");?>
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
      <li class="active">Report</li>
    </ol>
   </div>
    <div class="row">
      <div class="col-md-12  header-wrapper" ></div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    
    <!-- /.row -->
    <div class="row">
	  <div class="col-lg-12">
        <!-- /.panel -->
        <div class="panel panel-default">
          <div class="panel-heading text-center" ><h3>Report on Culture and Process </h3><h4> Conducive Culture </h4></div>
          <div class="panel-body text-center">
			<div class="col-lg-12">
			<p>Workplace norms, attitudes, and behaviors that support and enable effective functioning of teams. Interpersonal attitudes, relationships and the resulting workplace dynamics. The invisible glue that holds an organization together as it moves fast and grows large. Healthy collaboration and teamwork, energy and positive vibes in the workplace leads to a happier, more engaged and productive workforce.</p>
			<div class="row">
				<div class="col-md-8" style="margin-top:60px;">
					<div id="morris-donut-chart"></div>
				</div>
				  <div class="col-md-4">
					<div class="panel panel-default">
					  <!-- /.panel-heading -->
					  <div class="panel-body">
						<div class="list-group"> 
						  <a href="javascript:void(0)" class="list-group-item"> 
							<p class="text-left"><i class="fa fa-bar-chart-o fa-fw"></i> 
							Conducive Culture
							<span class="pull-right text-muted small">
							  <em>Overall Metric</em> 
							</span> </p> 
						  </a> 
						  <a href="javascript:void(0)" class="list-group-item"> 
							<p class="text-left"><i class="fa fa-users fa-fw"></i> 
							 7 Employees
							<span class="pull-right text-muted small">
							  <em>No. of Survey Responders</em> 
							</span> </p> 
						  </a> 
						  <a href="javascript:void(0)" class="list-group-item"> 
							<p class="text-left"><i class="fa fa-clock-o fa-fw"></i> 
							Tue Nov 21 2017
							<span class="pull-right text-muted small">
							  <em>Start Date of Survey</em> 
							</span> </p> 
						  </a>
						</div>
						<div id="morris-line-chart" style="height:200px;"></div>
					  </div>
					</div>
				  </div>
			   </div>
            </div>
         </div>
       </div>

		<div class="row" style="display:none;">
			<div class="panel-body">
				<div id="morris-area-chart"></div>
			</div>
			<div class="panel-body">
				<div id="morris-bar-chart"></div>
			</div>
		</div>

	    <div class="row">
		  <div class="col-lg-6 col-md-6">
			<div class="panel ">
			  <div class="panel-body">
				<div class="row">
				  <div class="col-xs-12 text-left">
					<div class="colorlight">Component #1</div>
					<br>
				  </div>
				  <div id="morris-line-chart"></div>
				  <div class="huge text-center">Healthy Colaboration<br/>
					  <span> <img src="images/5-512.png" alt="" style="height:80px;border-radius:50%;background:#5fa5e3;"> </span>
					  <h5 class="colorlight center">Mutual support among employees towards shared outcomes. Barnraising behaviors, teamwork and cooperation.</h5>
				  </div>
					 <div id="morris-bar-chart"></div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-6 col-md-6">
			<div class="panel ">
			  <div class="panel-body">
				<div class="row">
				  <div class="col-xs-12 text-left">
					<div class="colorlight">Component #2</div>
					<br>
				  </div>
				  <div id="morris-line-chart"></div>
				   <div class="huge text-center">Vibes<br/>
						<span> <img src="images/Emoji_u26a1.svg.png"  alt="" style="height:80px;border-radius:50%;background:#007f00;"> </span>
						<h5 class="colorlight center">The level of comfort and energy in the workplace in general that contributes to a positive and supportive work environment.</h5>
				   </div>
					 <div id="morris-bar-chart"></div>
				</div>
			  </div>
			</div>
		  </div>
		</div>

		<div class="row">
			<div class="col-sm-12">
			<div class="panel" style="background:none;">
			  <div class="panel-heading">
				<h1 class="page-header small text-center">Factors that influence Conducive Culture</h1>
			  </div>
			 
			</div>
		  </div>
		</div>

		<div class="row">
		  <div class="col-sm-4">
			<div class="panel panel-default" style="height:350px;">
				  <div class="panel-heading text-center">
					<h1 class="page-header small">Free and open communication</h1>
					<i class="fa fa-comments" style="font-size:50px;"></i>
				  </div>
				  <div class="col-md-12 center">
					<div class="text-center">
					  <div class="progress-radial progress-25">
						  <div class="overlay">25%</div>
						</div>
					  <div class="text-muted">of your employees believe that the general communication between colleagues is positive and healthy.</div>
					</div>
				  </div>
				  
			</div>
		  </div>
		  <div class="col-sm-4">
			<div class="panel panel-default" style="height:350px;">
				  <div class="panel-heading text-center">
					<h1 class="page-header small">Peer relationships</h1>
					<i class="fa fa-users" style="font-size:50px;"></i>
				  </div>
				   <div class="col-md-12 center">
					<div class="text-center">
					  <div class="progress-radial progress-90">
						  <div class="overlay">90%</div>
						</div>
					  <div class="text-muted">of your employees have good friends and healthy workplace relationships in the office.</div>
					</div>
				  </div>
				  <div class="clearfix"></div>
			</div>
		  </div>
		  <div class="col-sm-4">
			<div class="panel panel-default" style="height:350px;">
				  <div class="panel-heading text-center">
					<h1 class="page-header small">Relationship with manager</h1>
					<i class="fa fa-chain" style="font-size:50px;"></i>
				  </div>
				   <div class="col-md-12 center">
					<div class="text-center">
					  <div class="progress-radial progress-75">
						  <div class="overlay">75%</div>
						</div>
					  <div class="text-muted">of your employees have nurturing and supportive relationships with their managers.</div>
					</div>
				  </div>
				  <div class="clearfix"></div>
			</div>
		  </div>
		</div>
    </div>
    
    <!-- /.row -->
    
    <!-- /.row -->

    <!-- /.row -->
    
    <!-- /.row -->

   <!-- <div class="row blockspanel">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-blue">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div class="colorlight">Best Achieved</div>
                <div class="huge">London</div>
                <div class="colorlight">Sales growth 50% highter!</div>
                <br>
              </div>
              <div class="col-xs-12 text-center"> <img src="images/citrus-1299776_640.png" alt="" class="responsiveimg"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div class="colorlight">World Growth</div>
                <div class="huge">+ 25 million</div>
                <div class="colorlight">jVectormap-paid</div>
                <br>
              </div>
              <div class="col-xs-12 text-center">
                <div class="worldmap" id="mapwrap" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel  panel-red">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div class="colorlight">What our customers say</div>
                <div  class="huge">Clientele</div>
                <br>
              </div>
              <div class="col-xs-12 text-center">
                <div id="mycarousal" class="carousel slide tsetimonialslide" data-ride="carousel"> 
                  <ol class="carousel-indicators">
                    <li data-target="#mycarousal" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousal" data-slide-to="1"></li>
                    <li data-target="#mycarousal" data-slide-to="2"></li>
                  </ol>
                  
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <p class=" ">"I can't wait to test this out. <span class="glyphicon glyphicon-thumbs-up"></span> This is a testimonial window. Feedback of user can be displayed here."</p>
                      <img class="img-responsive media-object" src="images/pic1.png" alt="">
                      <h4>John Doe</h4>
                      <div>UX/UI designer</div>
                    </div>
                    <div class="item">
                      <p class=" ">"I can't wait to test this out. <span class="glyphicon glyphicon-thumbs-up"></span> This is a testimonial window. Feedback of user can be displayed here."</p>
                      <img class="img-responsive media-object" src=".images/pic3.png" alt="">
                      <h4>Asths Smith</h4>
                      <div>Frontend developer</div>
                    </div>
                  </div>
                  
                  <a class="left carousel-control" href="#mycarousal" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#mycarousal" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- /.row --> 
  </div>
  <!-- /#page-wrapper --> 
</div>
<!-- jQuery --> 
<?php include("footer.php");?>
<script>
$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        lineColors: ["#8BC34A", "#FFC107", "#F44336"],
        pointFillColors: [ "#8BC34A", "#FFC107", "#F44336"],
        fillOpacity: 1.0
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "",
            value: 12
        }, {
            label: "Conducive Culture",
            value: 30
        }, ],
        resize: true,
        colors: ["#03A9F4","#FFC107"]
    });

    Morris.Bar({
        element: 'morris-bar-chart',
          data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
          ],
         resize: true,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Series A', 'Series B'],
          barColors: ["#03A9F4", "#8BC34A", "#FFC107", "#F44336"]
        });
    
    
    
    
    Morris.Line({
      element: 'morris-line-chart',
      data: [
        { y: '2006', a: 100, b: 90 },
        { y: '2007', a: 75,  b: 65 },
        { y: '2008', a: 50,  b: 40 },
        { y: '2009', a: 75,  b: 65 },
        { y: '2010', a: 50,  b: 40 },
        { y: '2011', a: 75,  b: 65 },
        { y: '2012', a: 100, b: 90 }
      ],
      resize: true,
      xkey: 'y',
      ykeys: ['a', 'b'],
      lineColors: [ "#FFC107", "#F44336"],
      labels: ['Series A', 'Series B']
    });
    
    
    
    
});
</script>
</body>
</html>
