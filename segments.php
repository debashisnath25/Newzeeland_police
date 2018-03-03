
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Segments | NZPolice</title>
<?php include("metalinks.php");?>
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
      <li class="active">Segments</li>
    </ol>
    </div>
    <div class="row">
      <div class="col-md-12  header-wrapper" >
        <h1 class="page-header">Segments</h1>
        <!--<p class="page-subtitle">This is amazing template for all type of admin interfaces.</p>-->
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
      <!--<div class="col-xs-12 no-padding">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" ><a href="javascript:void(0)" class="open-panel link icon-only galleryone"><i class="fa fa-bars"></i></a></li>
          <li role="presentation"><a href="javascript:void(0)" class="open-panel link icon-only gallerytwo"><i class="icon fa fa-th-large"></i></a></li>
        </ul>
      </div>-->
      <div class="col-xs-12">
        <div class=" grid one ">
          <table class="table table-responsive" style="overflow-x: auto;">
           	<thead class="">
				<tr>
				  <th>Segments</th>
				  <th>Engagement</th>
				  <th>Autonomy</th>
				  <th>Flexibility</th>
				  <th>Remote work</th>
				  <th>Growth</th>
				  <th>Learning</th>
				  <th>Mentoring</th>
				  <th>Career Path</th>
				  <th>Recognition</th>
				  <th>Performance</th>
				  <th>Meaningful work</th>
				  <th>Significance</th>
				  <th>Fit</th>
				  <th>Accomplishment</th>
				  <th>Challenging</th>
				  <th>Goal setting</th>
				  <th>Alignment</th>
				  <th>Organizational fit</th>
				  <th>Support</th>
				  <th>Management support</th>
				  <th>Caring</th>
				  <th>Reward</th>
				  <th>Process</th>
				  <th>Fairness</th>
				  <th>Discussion</th>
				  <th>Strategy</th>
				  <th>Communication</th>
				  <th>Mission</th>
				  <th>Peer relationship</th>
				  <th>Quality</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				for($i=0;$i<10;$i++){
			  ?>
				<tr class="odd">
				  <td>NZP</td>
				  <td>92</td>
				  <td>52</td>
				  <td>29</td>
				  <td>16</td>
				  <td>76</td>
				  <td>80</td>
				  <td>45</td>
				  <td>48</td>
				  <td>50</td>
				  <td>-70</td>
				  <td>32</td>
				  <td>49</td>
				  <td>56</td>
				  <td>70</td>
				  <td>80</td>
				  <td>-95</td>
				  <td>85</td>
				  <td>65</td>
				  <td>45</td>
				  <td>-47</td>
				  <td>32</td>
				  <td>23</td>
				  <td>-45</td>
				  <td>78</td>
				  <td>50</td>
				  <td>42</td>
				  <td>65</td>
				  <td>-95</td>
				  <td>100</td>
				  <td>50</td>
				</tr>
				<?php
					}
				?>
			</tbody>
        </table>
        </div>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row --> 
    
  </div>
  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper -->
<?php include("footer.php");?>
<script src="js/morris-data.js"></script>
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/dataTables.bootstrap.min.js"></script> 
<script src="js/dataTables.responsive.js"></script> 
<script src="js/jquery-jvectormap.js"></script> 
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script>
    $(document).ready(function(){
            $('#dataTables-userlist').DataTable({
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
            
             Morris.Bar({
            element: 'morris-bar-chart2',
              data: [
                { y: '2006', a: 100, b: 100},
                { y: '2007', a: 75,  b: 75 },
                { y: '2008', a: 60 , b: 60 },
                { y: '2009', a: 75 , b: 75 },
                { y: '2006', a: 100, b: 100},
                { y: '2007', a: 75,  b: 75 },
                { y: '2008', a: 40,  b: 40 },
                { y: '2009', a: 25,  b: 25 },
                { y: '2006', a: 110, b: 110},
                { y: '2007', a: 75,  b: 75 },
                { y: '2008', a: 60,  b: 60 },
                { y: '2009', a: 75,  b: 75 },
                { y: '2012', a: 100, b: 100}
              ],
               resize: true,
                 axes:'',
                 hideHover: 'auto',
              xkey: 'y',
              padding:1,
              ykeys: ['a', 'b'],
              labels: ['Series A'],
              barColors: ["#ffffff", "#cfdfed"]
            });
            
              $('#mapwrap').vectorMap({map: 'world_mill'});              
                  
    
        $(window).resize(function(){
            
            $('#dataTables-userlist').DataTable();
            
        });
        
    });
    </script>
	<script>
	$('.grid').masonry({
	  itemSelector: '.grid-item'
	});
		
	$('.swipebox').swipebox();

	
	$(".galleryone").click(function(){
	$(".grid").addClass("one");
	$(".grid").removeClass("two");
	$('.grid').masonry({
	  itemSelector: '.grid-item'
	});
});

$(".gallerytwo").click(function(){
	$(".grid").addClass("two");
	$(".grid").removeClass("one");
	$('.grid').masonry({
	  itemSelector: '.grid-item'
	});
});

   $(window).bind("load resize", function(){
	   $('.grid').masonry({
		   itemSelector: '.grid-item'
	   });
   });
	
</script>

</body>
</html>
