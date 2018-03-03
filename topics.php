<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Topics | NZPolice</title>
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
      <li class="active">Topics</li>
    </ol>
    </div>
	<form method="POST">
		<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default"> 
          <!-- /.panel-heading -->
          <div class="panel-body"> 
            <!-- Nav tabs -->
			<h4>Topics from comments</h4>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home1" data-toggle="tab" aria-expanded="false"> <span class="fa fa-home icon"></span>All</a> </li>
              <li class=""><a href="#profile1" data-toggle="tab" aria-expanded="true"> <span class="fa fa-user icon"></span>Driver Topics</a> </li>
              <li class=""><a href="#messages1" data-toggle="tab" aria-expanded="false"> <span class="fa fa-envelope-o icon"></span>Open-ended Topics</a> </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade padding active in" id="home1">
                <div class="col-md-12">
				<h4>What's the one thing that would improve your productivity right now? </h4>
					<div class="media">
					  <div class="media-left"><a href="javascript:void(0)" class="btn btn-default btn-circle btn-lg"><i class="fa fa-comment-o"></i></a></div>
					  <div class="media-body">
						<h4 class="media-heading">Metings(7 comments)</h4>
						We have loads of meetings, but they're pointless because people are talking all day too ... Guess we just need to be more organised so people know what they're meant to be doing without asking all the time ... I really need fewer meetings throughout the week.</div>
					</div>
					<div class="media">
					  <div class="media-left"><a href="javascript:void(0)" class="btn btn-default btn-circle btn-lg"><i class="fa fa-comment-o"></i></a></div>
					  <div class="media-body">
						<h4 class="media-heading">Screen Resolution(4 Comments)</h4>
						With a better resolution I wouldn't be jumping around windows all the time ... For the hundredth time, a better resolution screen ... ... A better resolution screen ... A screen with a decent resolution would make a big difference.</div>
					</div>
					<div class="media">
					  <div class="media-left"><a href="javascript:void(0)" class="btn btn-default btn-circle btn-lg"><i class="fa fa-comment-o"></i></a></div>
					  <div class="media-body">
						<h4 class="media-heading">Chat Room(4 comments)</h4>
						Being able to ignore the chat room for at least half a day without feeling like it's frowned on ... I feel like people to expect me to check it all day.</div>
					</div>
				</div>
				<p>&nbsp;</p>
				<div class="col-md-12">
				<h4>Accomplishment</h4>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-info btn-circle btn-lg">51</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Tasks(5 comments)</h4>
						I feel a sense of accomplishment when I do new things, but unfortunately that's rare these days as I have a lot of repetitive tasks that need doing.</div>
					</div>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-success btn-circle btn-lg">82</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Projects(4 Comments)</h4>
						It's a great feeling when a project you've worked on makes it into the executive report to the company :) recognition and praise are good in my team, and that helps the sense of accomplishment for sure.</div>
					</div>
				</div>
				<p>&nbsp;</p>
				<div class="col-md-12">
				<h4>Autonomy</h4>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-warning btn-circle btn-lg">-61</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Manager(3 comments)</h4>
						I'm basically not doing my work for what I think will resonate best with our audience, it's just whatever I think will please my manager most ... My manager's personal preferences override decisions that I've made based on actually doing the work.</div>
					</div>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-danger btn-circle btn-lg">69</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Decisions(3 Comments)</h4>
						The key to freedom at work is communication, communication, communication ... We're all allowed to work as we see fit, as long as we can justify our decisions and deliver the goods.</div>
					</div>
				</div>
              </div>
              <div class="tab-pane fade padding" id="profile1">
                <div class="col-md-12">
				<h4>Accomplishment</h4>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-info btn-circle btn-lg">51</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Tasks(5 comments)</h4>
						I feel a sense of accomplishment when I do new things, but unfortunately that's rare these days as I have a lot of repetitive tasks that need doing.</div>
					</div>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-success btn-circle btn-lg">82</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Projects(4 Comments)</h4>
						It's a great feeling when a project you've worked on makes it into the executive report to the company :) recognition and praise are good in my team, and that helps the sense of accomplishment for sure.</div>
					</div>
				</div>
				<p>&nbsp;</p>
				<div class="col-md-12">
				<h4>Autonomy</h4>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-warning btn-circle btn-lg">-61</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Manager(3 comments)</h4>
						I'm basically not doing my work for what I think will resonate best with our audience, it's just whatever I think will please my manager most ... My manager's personal preferences override decisions that I've made based on actually doing the work.</div>
					</div>
					<div class="media">
					  <div class="media-left"> <a href="javascript:void(0)" class="btn btn-danger btn-circle btn-lg">69</a></div>
					  <div class="media-body">
						<h4 class="media-heading">Decisions(3 Comments)</h4>
						The key to freedom at work is communication, communication, communication ... We're all allowed to work as we see fit, as long as we can justify our decisions and deliver the goods.</div>
					</div>
				</div>
              </div>
              <div class="tab-pane fade padding" id="messages1">
				<div class="col-md-12">
				<h4>What's the one thing that would improve your productivity right now? </h4>
					<div class="media">
					  <div class="media-left"><a href="javascript:void(0)" class="btn btn-default btn-circle btn-lg"><i class="fa fa-comment-o"></i></a></div>
					  <div class="media-body">
						<h4 class="media-heading">Metings(7 comments)</h4>
						We have loads of meetings, but they're pointless because people are talking all day too ... Guess we just need to be more organised so people know what they're meant to be doing without asking all the time ... I really need fewer meetings throughout the week.</div>
					</div>
					<div class="media">
					  <div class="media-left"><a href="javascript:void(0)" class="btn btn-default btn-circle btn-lg"><i class="fa fa-comment-o"></i></a></div>
					  <div class="media-body">
						<h4 class="media-heading">Screen Resolution(4 Comments)</h4>
						With a better resolution I wouldn't be jumping around windows all the time ... For the hundredth time, a better resolution screen ... ... A better resolution screen ... A screen with a decent resolution would make a big difference.</div>
					</div>
					<div class="media">
					  <div class="media-left"><a href="javascript:void(0)" class="btn btn-default btn-circle btn-lg"><i class="fa fa-comment-o"></i></a></div>
					  <div class="media-body">
						<h4 class="media-heading">Chat Room(4 comments)</h4>
						Being able to ignore the chat room for at least half a day without feeling like it's frowned on ... I feel like people to expect me to check it all day.</div>
					</div>
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
