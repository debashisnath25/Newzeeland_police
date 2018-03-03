

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | NZPolice</title>
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
      <li><a href="dashboard.php">NZPolice</a></li>
      <li class="active">Dashboard</li>
    </ol>
   </div>
    <div class="row">
      <div class="col-md-12  header-wrapper" >
        <h1 class="page-header">Dashboard</h1>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    
    <!-- /.row -->
    
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="panel panel-blue">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <div id="morris-bar-chart2" ></div>
              </div>
              <div class="col-xs-6 text-right">
                <div class="huge">26</div>
                <div>Comments!</div>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)">
          <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"> <i class="fa fa-tasks fa-2x"></i> </div>
              <div class="col-xs-9 text-right">
                <div class="huge">12</div>
                <div>New Tasks!</div>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)">
          <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"> <i class="fa fa-shopping-cart fa-2x"></i> </div>
              <div class="col-xs-9 text-right">
                <div class="huge">124</div>
                <div>New Orders!</div>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)">
          <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"> <i class="fa fa-support fa-2x"></i> </div>
              <div class="col-xs-9 text-right">
                <div class="huge">113</div>
                <div>Raised issue!</div>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)">
          <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a> </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <table class="table " id="dataTables-userlist">
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
    <!-- /.row -->
    <br>
    <br>
    <!--<div class="row blockspanel">
      <div class="col-lg-3 col-md-6">
        <div class="panel ">
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
      <div class="col-lg-3 col-md-6">
        <div class="panel ">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div class="colorlight">Global Reach</div>
                <div class="huge">Switzerland</div>
                <div class="colorlight">Market growth 50% highter!</div>
                <br>
              </div>
              <div class="col-xs-12 text-center"> <img src=".images/orange-158258_640.png" alt="" class="responsiveimg"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel ">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div class="colorlight">Best Prices</div>
                <div class="huge">+ 3652 up</div>
                <div class="colorlight">Covered All over</div>
                <br>
              </div>
              <div class="col-xs-12 text-center"> <img src="images/strawberry-34066_640.png" alt="" class="responsiveimg"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel ">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div class="colorlight">What our customers say</div>
                <div  class="huge">Clientele</div>
                <br>
              </div>
              <div class="col-xs-12 text-center">
                <div id="carousel-example-generic" class="carousel slide tsetimonialslide" data-ride="carousel"> 
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <p class=" ">"I can't wait to test this out. <span class="glyphicon glyphicon-thumbs-up"></span> This is a testimonial window. Feedback of user can be displayed here."</p>
                      <img class="img-responsive media-object" src="images/pic2.png" alt="">
                      <h4>John Doe</h4>
                      <div>UX/UI designer</div>
                    </div>
                    <div class="item">
                      <p class=" ">"I can't wait to test this out. <span class="glyphicon glyphicon-thumbs-up"></span> This is a testimonial window. Feedback of user can be displayed here."</p>
                      <img class="img-responsive media-object" src="images/pic3.png" alt="">
                      <h4>Astha Smith</h4>
                      <div>Frontend developer</div>
                    </div>
                  </div>
                  
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading"> <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown"> <span class="dots"></span> </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="javascript:void(0)">Action</a> </li>
                  <li><a href="javascript:void(0)">Another action</a> </li>
                  <li><a href="javascript:void(0)">Something else here</a> </li>
                  <li><a href="javascript:void(0)">Separated link</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div id="morris-area-chart"></div>
          </div>
          <!-- /.panel-body --> 
        </div>
        <!-- /.panel -->
        <div class="panel panel-default">
          <div class="panel-heading"> <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown"> <span class="dots"></span> </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="javascript:void(0)">Action</a> </li>
                  <li><a href="javascript:void(0)">Another action</a> </li>
                  <li><a href="javascript:void(0)">Something else here</a> </li>
                  <li><a href="javascript:void(0)">Separated link</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <div id="morris-bar-chart"></div>
              </div>
              <!-- /.col-lg-12 (nested) --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.panel-body --> 
        </div>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-4">
        <!-- /.panel -->
        <div class="panel panel-default">
          <div class="panel-heading"> <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example </div>
          <div class="panel-body">
            <div id="morris-donut-chart"></div>
          </div>
          <!-- /.panel-body --> 
        </div>
        <!-- /.panel --> 
        
      </div>
      <!-- /.col-lg-4 --> 
        
        <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading"> Line Chart Example </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div id="morris-line-chart"></div>
          </div>
          <!-- /.panel-body --> 
        </div>
        <!-- /.panel --> 
      </div>
        
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-sm-6 ">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Today's Task
              <button type="button" class="btn btn-default pull-right"><span class="fa fa-plus" aria-hidden="true"></span> Add</button>
            </h1>
            <p class="page-subtitle small">15 of 10 Task completed</p>
          </div>
          <div class="todolist">
            <table class=" table">
              <tbody>
                <tr>
                  <td class="primary statusmail"><input type="checkbox" id="check6" class="checkbox" checked="">
                    <label for="check6"></label>
                    <div class="textmail"> <strong><s>Collect Data</s></strong> <span class="pull-right text-muted"> <a href="javascript:void(0)" data-toggle="modal" data-target="#addtodo" class="btn btn-link"><i class="fa fa-edit"></i></a> <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a> </span>
                      <p>12 Jul 16 | 11:00 am </p>
                    </div></td>
                </tr>
                <tr>
                  <td class="important statusmail"><input type="checkbox" id="check4" class="checkbox">
                    <label for="check4"></label>
                    <div class="textmail"> <strong>Send Salery</strong> <span class="pull-right text-muted"> <a href="javascript:void(0)" data-toggle="modal" data-target="#addtodo" class="btn btn-link"><i class="fa fa-edit"></i></a> <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a> </span>
                      <p>12 Jul 16 | 11:00 am </p>
                    </div></td>
                </tr>
                <tr>
                  <td class="low statusmail"><input type="checkbox" id="check2" class="checkbox">
                    <label for="check2"></label>
                    <div class="textmail"> <strong>Interview taking</strong> <span class="pull-right text-muted"> <a href="javascript:void(0)" data-toggle="modal" data-target="#addtodo" class="btn btn-link"><i class="fa fa-edit"></i></a> <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a> </span>
                      <p>12 Jul 16 | 11:00 am </p>
                    </div></td>
                </tr>
                <tr>
                  <td class="low statusmail "><input type="checkbox" id="check7" class="checkbox">
                    <label for="check7"></label>
                    <div class="textmail"> <strong>John Smith</strong> <span class="pull-right text-muted"> <a href="javascript:void(0)" data-toggle="modal" data-target="#addtodo" class="btn btn-link"><i class="fa fa-edit"></i></a> <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a> </span>
                      <p>12 Jul 16 | 11:00 am </p>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="page-header small">My Publications</h1>
                <p class="page-subtitle small">Limited information is visible</p>
              </div>
              <div class="col-md-12">
                <dl class="border-bottom">
                  <dt>Book of Eye</dt>
                  <dd>A description list is perfect for defining terms.<br>
                    <span class="text-muted">January 2001</span> </dd>
                </dl>
                <dl class="border-bottom">
                  <dt>Creative fire wings</dt>
                  <dd>A description list is perfect for defining terms.<br>
                    <span class="text-muted">January 2001</span> </dd>
                </dl>
                <dl class="">
                  <dt>My lost art</dt>
                  <dd>A description list is perfect for defining terms.<br>
                    <span class="text-muted">January 2001</span> </dd>
                </dl>
              </div>
              <div class="clearfix"></div>
        </div>
      </div>
    </div>
    
    <!-- /.row --> 
  </div>
  <!-- /#page-wrapper --> 
</div>
<!-- jQuery --> 
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

</body>
</html>
