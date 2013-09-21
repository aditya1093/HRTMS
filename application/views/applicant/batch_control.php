<?php if($this->session->userdata('permission') != 'Administrator'&& $this->session->userdata('permission') != 'HR') { redirect(base_url() . 'index.php/404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Batch Control - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
	</head>

	<body>
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - HRTMS Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<!--	
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 1</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 2</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 3</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 4</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-only icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Error Occured
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Members
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
					-->

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="messenger">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="User's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
		<?php } ?>
		<div class="container-fluid" id="main-container">
			<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>

				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li>
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
						<?php if($this->session->userdata("permission") == "Administrator") {?>

							<li class="active">
								<a href="<?php echo base_url();?>applicant/batch_control">
									<i class="icon-user"></i>
								   	<span>Batch Control</span>
								</a>
							</li>
						<?php }?>
							<li  class="">
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>applicant/accept">
									<i class="icon-user"></i>
								   	<span>Accept</span>
								</a>
							</li>
						</ul>
					</li>



					<li>
						<a href="<?php echo base_url();?>training">
							<i class="icon-book"></i>
							<span>Training</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
					<?php if($this->session->userdata("permission")=="Administrator") {?>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>manage/training">
									<i class="icon-user"></i>
									Training Department
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-cog"></i>
							<span>Administrative Tools</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">

							<li>
								<a href="<?php echo base_url();?>administrative/audit">
									<i class="icon-list"></i>
									Audit Logs
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>administrative/backup">
									<i class="icon-download-alt"></i>
									Backup &amp; Maintenance
								</a>
							</li>

							
						</ul>
					</li>
					<?php }?>
					<!--<li>
						
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="about">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul>

				<!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


			
			<?php } ?>

			<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="<?php echo base_url();?>dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Registration</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
								<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Registration
							<small>
								<i class="icon-double-angle-right"></i>
								Batch Control
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
							<div class="span4">
							
								<div class="span12">
									<div class="widget-box">
										<div class="widget-header header-color-dark">
											<h4 class="smaller">
												New Batch of Trainees
												<small></small>
											</h4>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												 <form id="addBatchControl"> 
												 	<div class="control-group">
														<label class="control-label" for="req_id">Request ID</label>
														<div class="controls">
															<select class="chzn-select" id="req_id"  name="req_id">
																	<option selected disabled value=""></option>
																<?php if(isset($records2)) : foreach($records2 as $row) : ?>
																	<option value="<?php echo $row->request_id;?>"><?php echo $row->request_id;?></option>
																<?php endforeach;?>
																<?php endif; ?>
															</select> 
														</div>
													
														<div id="company" style="display:none">
															<label class="control-label" for="company_name">Company</label>
															<div class="controls">
																<input type="text" id="company_name" disabled=""  name="">
																<input type="hidden" id="company_name2" name="client_name">
																<input type="hidden" id="client_id" name="client_id">
															</div>
													
														</div>
													
														<label class="control-label" for="date_start">Date start</label>
														<div class="controls" >
															<span class="input-append">
																<input class="span8 date-picker" name="date_start" id="date_start"  value ="" type="text" data-date-format="yyyy-mm-dd">
																<span class="add-on">	
																	<i class="icon-calendar"></i>
																</span>
																<!--<button class="btn btn-purple">Now</button>-->
															</span>
														</div>
													
														<label class="control-label" for="training_days">Training Days</label>
														<div class="controls">
															<input type="text" id="training_days" name="training_days" placeholder="#" class="input-mini">
														</div>
													
														<label class="control-label" for="limit">Limit</label>
														<div class="controls">
															<input type="text" id="limit" name="limit_no" placeholder="#" class="input-mini">
														</div>
													</div>
													<div class="form-actions">
														<button class="btn span6 btn-info" type="submit">
															<i class="icon-ok bigger-110"></i>
															Submit
														</button>

														
														<button class="btn span6" type="reset">
															<i class="icon-undo bigger-110"></i>
															Reset
														</button>
													</div>
												 </form>

											</div>
										</div>
									</div>
								</div>
						
						</div> 	
						<div class="span8">
							<div class="alert alert-success">
									<b>Note:</b>
									<ul>
										<li>Here you can view the active batch records</li>
										<li>Use the Search bar to filter the information you need</li>
										<li>Click the column name to toggle order by column</li>
									</ul>						
							</div>
							<div class="box-content">
								<div class="row-fluid">
									<table id="table_report" class="table table-striped table-bordered table-hover">
									    <thead>
									        <tr>
									        	<th>Request ID</th>
									            <th>Batch Control No.</th>
												<th>Client</th>
												<th>Date Started</th>
												<th></th>
												 
									        </tr>
									    </thead>
									    <tbody>
									   <?php if(isset($records)) : foreach($records as $row) : ?>

									<tr>
										<?php 
						  					 
						  				?>
						  				<td><?php echo $row->request_id;?></td>
						  				<td><?php echo $row->batch_control_no;?></td>
										<td><?php echo $row->client?></td>
										<td class="hidden-480"><?php echo $row->date_start;?></td>
										<td class="td-actions">
										
											<div class="hidden-phone visible-desktop btn-group">
												<button class="view_batch btn btn-mini btn-success" id="<?php echo $row->id;?>">
													<i class="icon-ok bigger-120"></i>
												</button>

												<button onclick="edit_batch('<?php echo $row->id;?>')" class="btn btn-mini btn-info">
													<i class="icon-edit bigger-120"></i>
												</button>
											</div>

										</td>

										
									</tr>
									<?php endforeach;?>
 
								<?php endif; ?>
									         
									    </tbody>

									</table>

								</div>
							</div>

						</div>
					

						<!--PAGE CONTENT ENDS HERE-->
					</div><!--/row-->
				</div><!--/#page-content-->

			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->

		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>


		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {

				//datatable initialization
				var oTable1 = $('#table_report').dataTable( {
				"aoColumns": [
			      null,null, null, null,
				  { "bSortable": false }] ,
				   "aLengthMenu": [[5, 10,-1], [5, 10, "All"]],
					"iDisplayLength" : 5
				} );
				
				
				$('.date-picker').datepicker().next().on(ace.click_event, function() {
					$(this).prev().focus();
				});
				$(".chzn-select").chosen(); 
				$(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
				

				$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 1000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
				});

				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
				_title: function(title) {
					var $title = this.options.title || '&nbsp;'
					if( ("title_html" in this.options) && this.options.title_html == true )
						title.html($title);
					else title.text($title);
				}
				}));


				$( "#addBatchControl" ).on( "submit", function( event ) {
				  event.preventDefault();
				  var sData = $(this).serialize();
				  console.log(sData);
				  $.ajax({
		               	url:"<?php echo base_url();?>applicant/addBatchControl",
		                type:'POST',
		                data:sData,
		                //dataType: "json",
		                success:function(result){
			    			console.log(result);
			                $.gritter.add({
								title: 'Batch Control',
								text: '<i class="icon-spinner icon-spin green icon-2x"></i> Successfully added batch training .',
								class_name: 'gritter-success gritter-center gritter-light'
							});
							$( '#addBatchControl' ).each(function(){
							    this.reset();
							});
							$('#company').hide();

							var obj = $.parseJSON(result);
			                $.each(obj, function(){
			                str =  	'<div class="hidden-phone visible-desktop btn-group">';			
					   		str +=	'<button class="btn btn-mini btn-success"><i class="icon-ok bigger-120"></i></button>';
							str +=	'<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>';
							str += 	'</div>';
											
							   $('#table_report').dataTable().fnAddData([
									this['request_id'],
									this['batch_control_no'],
								   	this['client'],
								   	this['date_start'],
								 	str  ]
								 	);
			                });	
		                }//End Success

		            	});
						//return false;
					});//End #addBatchControl Submit

				
				$('#req_id').change(function () {
                    //var batch = $(this).attr('value');
                    $('#company').hide();
                    var req_id = $(this).find("option:selected").attr('value')
                    console.log(req_id);
                    $.ajax({    
                        url: "<?php echo base_url();?>applicant/getCompany", //The url where the server req would we made.
                        async: false, 
                        type: "POST", //The type which you want to use: GET/POST
                        data: "req_id="+req_id, //The variables which are going.
                         
                        //This is the function which will be called if ajax call is successful.
                        success: function(e) {
                            //data is the html of the page where the request is made.
                            var obj = $.parseJSON(e);
                            var val ="";
	                		$.each(obj, function(){
	                			val = this['company'];
	                		});
	                		//alert(val);
                      		$('#company').slideToggle('fast');
                        	$("#company_name").val(val);
                        	$("#company_name2").val(val);
                        	$("#client_id").val(val);

                        } 
                    })
                });

				$('.view_batch').on(ace.click_event, function(){
					id = $(this).attr('id');	
					//console.log(id);
					$.ajax({
						url: "<?php echo base_url();?>applicant/batch_info",
						type: "post",
						data: {
							id: id
						},
						dataType: 'json',
						success: function(e) {
							console.log(e);
							$('#view').html(e);
							showDialog(id);
							
						}//Success
					});//End Ajax

				});
			});

			var edit_batch = function(id){
				alert(id);
			
			}

			var showDialog = function(id){
				$( "#dialog" ).removeClass('hide').dialog({
					dialogClass: "no-close",
					resizable: false,
					modal: true,
					closeOnEscape: true,
					title: "<div class='widget-header'><h4 class='smaller'><i class='icon-exchange'></i> "+id+". Batch Details.</h4></div>",
					title_html: true,
					width: 600,
					//maxWidth: 800,
					maxHeight: 500,
					buttons: [
						    {
						      text: "OK",
						      "class" : "btn btn-info btn-mini",
						      click: function() {
						        $( this ).dialog( "close" );
						      }
						    }
						  ]
					
				});

			}
				
		</script>
	</body>
	<div id="dialog">
	   <div id="view"></div>
	</div>
</html>
