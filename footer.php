


<style>
.footer {
   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #fff;
   color: #000;
   text-align: center;
   height:30px;
}
</style>


      <div class="modal fade" id="myModal_add_for_test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				  <a class="btn btn-default btn-sm" href="add_employee.php"><i class="fa fa-user-plus" ></i> Add employee</a>
				</div>
                  <div class="modal-footer">
			        <div class="panel-body" style="padding:0 !important;width:100%;">
              <table class="table " id="dataTables-example">
				
				  <tbody>
				 
					<tr class="odd">
						<td>
							<div class="form-group" style="margin-left:10px;">
								<div class="checkbox">
									<input type="checkbox" value="" onchange="get_change();" >
								</div>
							</div>
						</td>
					  <td><img src="images/pic1.png" alt="" class="gridpic"></td>
					  <td>John Doe</td>
					  <td>info@maxartkiller.in</td>
					  <td class="center">Marketing,CXO,Customer Support</td>
					  
		
					</tr>
			
				
				  </tbody>
				</table><!-- /.table-responsive -->           
            </div>
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
<div class="footer">
	<strong>Copyright &copy; 2018 <a href="javascript:void(0);">Clickrstop Software Solutions Pvt. Ltd.</a></strong> All rights reserved.
</div>

<script>
	function get_change()
	{
		window.location.assign("listing_employee.php");
	}
</script>
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Custom Theme JavaScript --> 
<script src="js/raphael.js"></script> 
<script src="js/morris.min.js"></script> 
<script src="js/adminnine.js"></script> 
