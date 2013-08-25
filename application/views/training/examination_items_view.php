
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Examination - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" />
		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->

		<style type="text/css">
			input[type=checkbox],
			input[type=radio] {
				opacity: 100;
				position: relative;
				z-index: 12;
				width: 18px;
				height: 18px;
				display:inline; margin:0px; padding:0px;
			}

		</style>
	</head>

	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - Training Center Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
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
									8 Notifications
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
										Bob just signed up as an editor ...
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
									User
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
									<a href="<?php echo base_url();?>index.php/logout">
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
							<i class="icon-ok"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-puzzle-piece"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-star"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-print"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-danger"></span>

						<span class="btn btn-warning"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>modules">
							<i class="icon-folder-open"></i>
							<span>Manage Modules</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>presenter">
							<i class="icon-desktop"></i>
							<span>Classroom Presenter</span>
						</a>
					</li>

					<li class="active">
						<a href="<?php echo base_url();?>examination">
							<i class="icon-puzzle-piece"></i>
							<span>Manage Examination</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>attendance">
							<i class="icon-ok"></i>
							<span>Attendance Checker</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>class_record">
							<i class="icon-star"></i>
							<span>Class Record</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>reports">
							<i class="icon-print"></i>
							<span>Reports</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>about">
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
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="<?php echo base_url();?>dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Edit Examination Items</li>
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
							Edit Examination Items
							<small>
								<i class="icon-double-angle-right"></i>
								{Name of Exam}
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span8">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Examination Items
										<small>Test Modules</small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<div class="loader">
											<h4 align="center" class="smaller lighter grey">
												<i class="icon-spinner icon-spin orange bigger-125"></i>
												Loading Items..
												<small></small>
											</h4>
										</div>
										<table id="item_table" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th class="center" width="30px">
														Item No.
													</th>
													<th class="center">
														Item
													</th>
													
												</tr> 
											</thead>
											<tbody>
												<tr>
													<td>
														1
													</td>
													<td>
														<div class="pull-right">

															<button id="" class="btn-edit btn btn-minier btn-mini btn-info"><i class="icon-pencil"></i></button>
														   	<button id="" class="btn-delete btn btn-minier btn-mini btn-danger"><i class="icon-trash"></i></button>
														</div>
														<p>
															asdfasdfas asdfasd fasdf asdf asdf asd fasf asdf asdf asd fasdf asdf  fasf asdf 
															asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  
															fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf asdf asd fas
														</p>
														<label><input disabled name="mult_1" type="radio"> asdfasdf</label><br>
														<label><input disabled checked name="mult_1" type="radio"> asdfasdf</label><br>
														<label><input disabled name="mult_1" type="radio"> asdfasdf</label><br>
														<label><input disabled name="mult_1" type="radio"> asdfasdf</label><br>
														
													</td>
												</tr>
												<tr>
													<td>
														2
													</td>
													<td>
														<div class="pull-right">

															<button id="" class="btn-edit btn btn-minier btn-mini btn-info"><i class="icon-pencil"></i></button>
														   	<button id="" class="btn-delete btn btn-minier btn-mini btn-danger"><i class="icon-trash"></i></button>
														</div>
														<p>
															asdfasdfas asdfasd fasdf asdf asdf asd fasf asdf asdf asd fasdf asdf  fasf asdf 
															asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  
															fasf asdf asdf asd fasdf burat asdf  fasf asdf asdf asd fasdf asdf asdf asd fas
														</p>
														<label><input disabled name="tf_2" type="radio"> True</label><br>
														<label><input disabled checked name="tf_2" type="radio"> False</label><br>
														
													</td>
												</tr>
												<tr>
													<td>
														3
													</td>
													<td>
														<div class="pull-right">

															<button id="" class="btn-edit btn btn-minier btn-mini btn-info"><i class="icon-pencil"></i></button>
														   	<button id="" class="btn-delete btn btn-minier btn-mini btn-danger"><i class="icon-trash"></i></button>
														</div>
														<p>
															asdfasdfas asdfasd fasdf asdf asdf asd fasf asdf asdf asd fasdf asdf  fasf asdf 
															asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  
															fasf asdf asdf asd fasdf burat asdf  fasf asdf asdf asd fasdf asdf asdf asd fas
														</p>
														<textarea id="" disabled style="width:90%;">asdfasdfas asdfasd fasdf asdf asdf asd fasf 
														</textarea>
														
													</td>
												</tr>
												<tr>
													<td>
														4
													</td>
													<td>
														<div class="pull-right">

															<button id="" class="btn-edit btn btn-minier btn-mini btn-info"><i class="icon-pencil"></i></button>
														   	<button id="" class="btn-delete btn btn-minier btn-mini btn-danger"><i class="icon-trash"></i></button>
														</div>
														<p>
															asdfasdfas asdfasd fasdf asdf asdf asd fasf asdf asdf asd fasdf asdf  fasf asdf 
															asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  
															fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf asdf asd fas
														</p>
														<label><input disabled name="mult_2" type="checkbox"> asdfasdf</label><br>
														<label><input disabled checked name="mult_2" type="checkbox"> asdfasdf</label><br>
														<label><input disabled checked name="mult_2" type="checkbox"> asdfasdf</label><br>
														<label><input disabled name="mult_2" type="checkbox"> asdfasdf</label><br>
														
													</td>
												</tr>
												<tr>
													<td>
														5
													</td>
													<td>
														<div class="pull-right">

															<button id="" class="btn-edit btn btn-minier btn-mini btn-info"><i class="icon-pencil"></i></button>
														   	<button id="" class="btn-delete btn btn-minier btn-mini btn-danger"><i class="icon-trash"></i></button>
														</div>
														<p>
															asdfasdfas asdfasd fasdf asdf asdf asd fasf asdf asdf asd fasdf asdf  fasf asdf 
															asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf  
															fasf asdf asdf asd fasdf asdf  fasf asdf asdf asd fasdf asdf asdf asd fas
														</p>
														<ul class="item-list ui-sortable" style="width:90%;">
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">Item 1</span></li>
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">2</span></li>
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">3</span></li>
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">4</span></li>
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">5</span></li>
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">6</span></li>
														  <li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">7</span></li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="widget-box">
								<div class="widget-header widget-hea1der-small header-color-dark">
									<h4 class="smaller">
										Add Items
										<small>Test Modules</small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<p>
										<b>Item Type: </b><br>
										
										<select class="item_type">
											<option value="0">Please Select Type..</option>
											<option value="1">Multiple Choice</option>
											<option value="2">True or False</option>
											<option value="3">Identification</option>
											<option value="4">Select Multiple</option>
											<option value="5">Arrange By Order</option>
										</select>
										<br>
										</p>

										<span class="multiple_setting" style="display: none;">
											<p>
											<b>Number of Choices: </b>
											<br>

											<select class="no_of_choices">
												<option valuee="0">--</option>
												<option valuee="2">2</option>
												<option valuee="3">3</option>
												<option valuee="4">4</option>
												<option valuee="5">5</option>
												<option valuee="6">6</option>
												<option valuee="7">7</option>
												<option valuee="8">8</option>
												<option valuee="9">9</option>
												<option valuee="10">10</option>
											</select>
											<br>
											</p>
										</span>
										<p>
										<b>Question: </b>

										<textarea id="question" style="width:95%"></textarea>
										</p>
										<p>
										<b>Answers: </b>

										<span class="answers">
											
										</span>
										<!-- End of Answers -->

										<br>
										</p>
										
										<hr>
										<button class="btn btn-purple add_item"><i class="icon-arrow-left"></i> Add Item</button>

									</div>
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
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>


		<!--inline scripts related to this page-->

		<script type="text/javascript">

			var separator = "~/&^%-";
			var items = ""; //for reference only

			var question;
			var answers;
			var key_answer;
			var question_type;
			var no_of_choices;

			$(document).ready(function() {
				
				$(".answers").html("<pre>(Please specify the item type)</pre>");

				//hide settings on document load
				$(".multiple_setting").hide();

				load_items();

				$('#item_table').dataTable();

				$(".item-list").sortable();


			});

			//add elements
			$(".add_item").click(function(){

				items = "";

				question = $.trim($("#question").val());
				question_type = $(".item_type").val();
				no_of_choices =  $(".no_of_choices").val();
				answers = "";
				key_answer = "";

				//if multiple choice
				if($(".item_type").val() == 1 || $(".item_type").val() == 4 || $(".item_type").val() == 5) {

					//get textbox values to an array
					var text_array = $('textarea[name="multiple_answers[]"]').map(function() {

					  return $(this).val()

					}).get();

					for (var i = 0; i < text_array.length; i++) {

						//multiple choices
						if($.trim(text_array[i])=="") {
							//gritter
							alert("Please fill the answers!");
							return;
						}

						answers += $.trim(text_array[i]) + separator;
					};

					var k = 0;

					//select multiple
					if($(".item_type").val() == 4) {

						items += "\n";

						var l = "";
						//var values = new Array();
						$.each($("#choices:checked"), function() {
							
							l = $.trim($(this).val());
							//values.push($(this).val());
							key_answer += $(this).val() + separator;
						});

						if(l=="") {

							alert("Please specify the correct answer!");
						    return;
						}
					}
					//arrange
					else if($(".item_type").val() == 5) {

						items += "\n";

						var m = "";

						for (var i = 0; i < text_array.length; i++) {

							m += $.trim(text_array[i]);

							key_answer += text_array[i] + separator;
						};

						if(m=="") {

							alert("Please specify the correct answer!");
						    return;
						}
					}
					//multiple choice
					else {

						key_answer += $("#choices:checked").val();

						if (!$("#choices:checked").val()) {

						    alert("Please specify the correct answer!");
						    return;
						}
					}

					/*if(k == no_of_choices) {

						//gritter
						alert("Please specify the correct answer");
						return;
					}*/

				}
				//true or false
				else if($(".item_type").val() == 2) {

					no_of_choices = 2;
					answers = "true" + separator + "false";
					key_answer = $("#tf").val();
				}
				//identification
				else if($(".item_type").val() == 3) {

					no_of_choices = 0;
					//will not set answers value for identification
					key_answer = $("#id_text").val();

					if($.trim(key_answer)=="") {

						alert("Please enter the correct answer!");
						return;
					}

				}

				items += "Question: " + question;
				items += "\nType: " + question_type;
				items += "\nNo. of Choices: " + no_of_choices;
				items += "\nAnswer(s): " + answers;
				items += "\nKey Answer(s): " + key_answer;

				//gritter this alerts here
				if($(".item_type").val()==0) {
									
					alert("Please select the type of question!");	
					return;	
				}
				if($.trim(question)=="") {

					alert("Please enter a question!");
					return;
				}

				//send data
				var request = $.ajax({
		        	url: "<?php echo base_url();?>examination/add_item",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1',
		        		question: question,
						answers: answers,
						key_answer: key_answer,
						question_type: question_type,
						no_of_choices: no_of_choices
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	console.log(items);
					reset_field();
			    });
				
			});

			//specify element properties
			$(".item_type").change(function(){

				//clear answers
				$(".answers").html("");

				if($(".item_type").val() == 0 || $(".item_type").val() == 2 || $(".item_type").val() == 3) {

					if($(".item_type").val() == 0) {

						$(".answers").html("<pre>(Please specify item type)</pre>");
					}

					//hide for single answer questions
					$(".multiple_setting").hide();

					if($(".item_type").val() == 2) {
						
						var choices_str = "<input id=\"tf\"  type=\"radio\" class=\"ace\" value=\"true\" name=\"tf\"> True<br><input id=\"tf\" type=\"radio\" class=\"ace\" value=\"false\" name=\"tf\"> False";
						choices_str = "<pre>" + choices_str + "</pre>";
						$(".answers").html(choices_str);
					}
					else if($(".item_type").val() == 3) {
						
						var choices_str = "<textarea id=\"id_text\" style=\"width:95%\"></textarea>";
						choices_str = "<pre>" + choices_str + "</pre>";
						$(".answers").html(choices_str);
					}
					
				}
				else {		

					$(".multiple_setting").show(function(){

						$(".no_of_choices").val("0");
					});

					$(".answers").html("<pre>(Please specify the number of choices)</pre>");

				}
			});

			//initialization of choices
			var init_choices = function (input_type) {

				var choices_str = "";
				var bracket = "";

				if(input_type=="order") {

					for (var i = 0; i < parseInt($(".no_of_choices").val()); i++) {

						choices_str += (i+1) + ") <textarea  style=\"width:90%\" name=\"multiple_answers[]\"></textarea><br>";

					};

					choices_str = "<pre>" + choices_str + "</pre>";
					return choices_str;
				}

				for (var i = 0; i < parseInt($(".no_of_choices").val()); i++) {

					if(input_type=="checkbox") {

						bracket = "[]";
					}

					choices_str += "<input id=\"choices\" value=\""+(i+1)+"\" class=\"ace\" name=\"choices"+bracket+"\" type=\"" + input_type + "\"><textarea  style=\"width:90%\" name=\"multiple_answers[]\"></textarea><br>";

				};

				if(choices_str=="") {

					//clear answers
					choices_str = "<pre>(Please specify the number of choices)</pre>";
				}

				choices_str = "<pre>" + choices_str + "</pre>";
				return choices_str;

			};

			//specify number of choices
			$(".no_of_choices").change(function() {	

				if ($(".item_type").val() == 1) { 

					$(".answers").html(init_choices("radio"));
				}
				if ($(".item_type").val() == 4) { 
					
					$(".answers").html(init_choices("checkbox"));

				}
				if ($(".item_type").val() == 5) { 
					
					$(".answers").html(init_choices("order"));

				}
				else {
					
				}
			});

			//clear fields
			var reset_field  = function() {

				$("textarea").val("");
				$("input:radio").removeAttr("checked");
				$("input:checkbox").removeAttr("checked");
				//gritter here successfully added an item
				alert("You successfully added an item!");

			}

			var load_items = function() {

				var request = $.ajax({
		        	url: "<?php echo base_url();?>examination/load_items",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1'
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	console.log(response);
		        	$(".loader").hide();
					
			    });
			}

			//var alert_str = "";
			var alert = function(alert_str) {

				$.extend($.gritter.options, { 
				    position: 'bottom-right', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
					fade_in_speed: 'medium', // how fast notifications fade in (string or int)
					fade_out_speed: 2000, // how fast the notices fade out
					time: 4000 // hang on the screen for...
				});

				$.gritter.add({
					//title: '',
					text: alert_str,
					//image: $path_assets+'/avatars/avatar3.png',
					sticky: false,
					before_open: function() {

						if($('.gritter-item-wrapper').length >= 6)
						{
							return false;
						}
					}
				});

			}
		</script>
	</body>
</html>
