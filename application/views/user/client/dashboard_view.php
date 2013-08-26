<?php if($this->session->userdata('permission') != 'Client') { redirect(base_url() . 'index.php/404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/client/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
		


		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
	</head>

	<body>
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - HRTMS Client Portal
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						

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
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

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

		<div class="container-fluid" id="main-container">
		
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
					
					<li class="active">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Manpower</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>

					<li>
						<a href="#">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


		<div id="main-content" class="clearfix">
				

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Manpower
							<small>
								<i class="icon-double-angle-right"></i>
								Dashboard
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div class="span6 widget-container-span ui-sortable">
							<div class="widget-box">
								<div class="widget-header">
									<h5 class="smaller"> </h5>

									<div class="widget-toolbar no-border">
										<ul class="nav nav-tabs" id="myTab">
											
											<li class="active">
												<a data-toggle="tab" href="#profile"><i class="icon-phone"></i> Request Manpower</a>
											</li>

											
										</ul>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main padding-6">
										<div class="tab-content">
											

											<div id="profile" class="tab-pane in active">

												<div class="row-fluid">
													<div class="span12"> 
														<div class="control-group">
															<label class="control-label" for="form-field-1">Quoted Number of Manpower:</label>

															<div class="controls">
																<input class="input-mini" type="text" id="form-field-1" placeholder="#">
															</div>
														
															<label class="control-label" for="form-field-1">Date Requested:</label>
															<div class="row-fluid input-prepend">

																<span class="add-on">
																	<i class="icon-calendar"></i>
																</span>

																<input class="span10" type="text" name="date-range-picker" id="id-date-range-picker-1">
															</div>

															<label class="control-label" for="form-field-1">Remarks:</label>

															<div class="controls">
																<textarea style="width:90%"></textarea>
															</div>

															<div class="controls">
																<label>
																	<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
																	<span class="lbl"> We have agreed upon the <a href="">Terms and Condition</a> upon requesting.</span>
																</label>
															</div>
															<p></p>
															<div class="controls">
																<button class="btn btn-success btn-small">
																	<i class="icon-share-alt"></i>
																	Send Request
																</button>
															</div>
														</div>
													</div>

												</div>
												
											</div>

											
										</div>
									</div>
								</div>
							</div>
							<p></p>
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> AMI Info</h5>

									<div class="widget-toolbar">
										<a href="#" data-action="settings">
											<i class="icon-cog"></i>
										</a>

										<a href="#" data-action="reload">
											<i class="icon-refresh"></i>
										</a>

										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>

										<a href="#" data-action="close">
											<i class="icon-remove"></i>
										</a>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										
							                    
					                    <center><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=santa+rosa+laguna+technopark+ems&amp;aq=&amp;sll=14.272868,121.082382&amp;sspn=0.100982,0.158443&amp;ie=UTF8&amp;hq=technopark+ems&amp;hnear=Santa+Rosa+City,+Laguna,+Calabarzon,+Philippines&amp;ll=14.272868,121.082382&amp;spn=0.062077,0.040192&amp;t=m&amp;output=embed"></iframe><br><br>
					                    </center>  
					                    <address>
			                            <strong>Alliance Mansols Inc</strong>

			                            <br>
			                            117 Technology Ave. Laguna Technopark Inc
			                            <br>
			                            Binan City, Laguna
			                            <br>
			                            Philippines
			                            <br>
			                            <abbr title="Phone">P:</abbr>
			                            (123) 456-7890
			                          </address>
									</div>
								</div>
							</div>
						</div><!--/row-->
						<div class="span6">
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> Manpower Request Status</h5>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										
							          <table class="table table-striped table-bordered table-hover">

							          	<thead>
							          		<tr>
							          			<th>Request ID</th>
							          			<th>Date of Request</th>
							          			<th>Requested Number</th>
							          			<th>Status</th>
							          		</tr>
							          	</thead>
							          	<tbody>
							          		<tr>
							          			<td>1</td>
							          			<td>2013-04-20</td>
							          			<td>100</td>
							          			<td><span class="label label-warning">Pending</span></td>
							          		</tr>
							          		<tr>
							          			<td>2</td>
							          			<td>2013-04-01</td>
							          			<td>150</td>
							          			<td><span class="label label-success">Confirmed</span></td>
							          		</tr>
							          		<tr>
							          			<td>3</td>
							          			<td>2013-03-10</td>
							          			<td>100</td>
							          			<td><span class="label label-success">Confirmed</span></td>
							          		</tr>
							          		<tr>
							          			<td>4</td>
							          			<td>2013-02-03</td>
							          			<td>350</td>
							          			<td><span class="label label-success">Confirmed</span></td>
							          		</tr>
							          		<tr>
							          			<td>5</td>
							          			<td>2013-01-22</td>
							          			<td>150</td>
							          			<td><span class="label label-success">Confirmed</span></td>
							          		</tr>
							          	</tbody>

							          </table>
									</div>
								</div>
							</div>
							<p>
							</p>
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> Manpower Information</h5>

									
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<table class="table table-striped table-bordered table-hover">

							          	<thead>
							          		<tr>
							          			<th>Report ID</th>
							          			<th>Name of Report</th>
							          			<th>Date Sent</th>
							          			<th>&nbsp;</th>
							          		</tr>
							          	</thead>
							          	<tbody>
							          		<tr>
							          			<td>1</td>
							          			<td>Masterlist of Passers</td>
							          			<td>2013-02-03</td>
							          			<td><button class="btn btn-info btn-mini"><i class="icon-eye-open"></i> View Report</button></td>
							          		</tr>
							          		<tr>
							          			<td>2</td>
							          			<td>Accomplished Modules</td>
							          			<td>2013-02-03</td>
							          			<td><button class="btn btn-info btn-mini"><i class="icon-eye-open"></i> View Report</button></td>
							          		</tr>
							          		<tr>
							          			<td>3</td>
							          			<td>Masterlist of Passers</td>
							          			<td>2013-01-14</td>
							          			<td><button class="btn btn-info btn-mini"><i class="icon-eye-open"></i> View Report</button></td>
							          		</tr>
							          	</tbody>
							          </table>
							          
									</div>
								</div>
							</div>

						</div>


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
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-datepicker.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">	
							$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
	 
		</script>
	</body>
</html>
