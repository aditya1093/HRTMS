
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
						<a href="dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					<li>
						<a href="modules">
							<i class="icon-folder-open"></i>
							<span>Manage Modules</span>
						</a>
					</li>

					<li>
						<a href="presenter">
							<i class="icon-desktop"></i>
							<span>Classroom Presenter</span>
						</a>
					</li>

					<li class="active">
						<a href="examination">
							<i class="icon-puzzle-piece"></i>
							<span>Manage Examination</span>
						</a>
					</li>

					<li>
						<a href="attendance">
							<i class="icon-ok"></i>
							<span>Attendance Checker</span>
						</a>
					</li>

					<li>
						<a href="class_record">
							<i class="icon-star"></i>
							<span>Class Record</span>
						</a>
					</li>

					<li>
						<a href="reports">
							<i class="icon-print"></i>
							<span>Reports</span>
						</a>
					</li>

					<li>
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>

					<li>
						<a href="about">
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
							<a href="dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Manage Examination</li>
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
							Manage Examination
							<small>
								<i class="icon-double-angle-right"></i>
								Training Performance
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span7">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										List of Examinations
										<small>Test Modules</small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
									</div>
								</div>
							</div>
						</div>
						<div class="span5">
							<div class="widget-box">
								<div class="widget-header widget-hea1der-small header-color-dark">
									<h4 class="smaller">
										Add Items
										<small>Test Modules</small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">


										<label><b>Item Type: </b></label>
										

										<select class="item_type">
											<option value="0">Please Select Type..</option>
											<option value="1">Multiple Choice</option>
											<option value="2">True or False</option>
											<option value="3">Identification</option>
											<option value="4">Select Multiple</option>
											<option value="5">Arrange By Order</option>
										</select>
										<br>

										<span class="multiple_setting" style="display: none;">
											<label><b>Number of Choices: </b></label>
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
										</span>

										<label><b>Question: </b></label>
										

										<textarea id="question" style="width:95%"></textarea>
										

										<label><b>Answers: </b></label>
										


										<div class="answers">
											
										</div>
										<!-- End of Answers -->

										<br>
										
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

			$(document).ready(function(){


				//hide settings on document load
				$(".multiple_setting").hide();

				//add elements
				$(".add_item").click(function(){

					var question = $("#question").val();

					var items = "";

					//if multiple choice
					if($(".item_type").val() == 1) {

						items += "<tr><td>";

						//print questions
						items += question + "<br>";

						//get textbox values to an array
						var text_array = $('textarea[name="multiple_answers[]"]').map(function() {
						  return $(this).val()
						}).get();

						for (var i = 0; i < text_array.length; i++) {
							
							items += "<input type=\"radio\" class=\"ace\" name=\"sample\"> <input size=\"100\" type=\"text\" value=\"" + text_array[i] + "\"><br>";
						};

						items += "</td></tr>";

						$(".page_end").before(items);

						alert("An item is added successfully!");

					}
					else if($(".item_type").val() == 2) {

						items += "<tr><td>";

						//print questions
						items += question + "<br>";

						items += "<input type=\"radio\" class=\"ace\" name=\"sample\"> True<br>";

						items += "<input type=\"radio\" class=\"ace\" name=\"sample\"> False<br>";

						items += "</td></tr>";

						$(".page_end").before(items);

						alert("An item is added successfully!");
					}
					else if($(".item_type").val() == 3) {

					}
					else if($(".item_type").val() == 4) {

					}
					else if($(".item_type").val() == 5) {

					}
					else {

						
						alert("Please select the type of question!");		
					}

					//clear textboxes, radio button and checkbox after adding item
					$("#question").val("");

					if($(".item_type").val() != 0 || $(".item_type").val() != 2 || $(".item_type").val() != 3) {
						alert($(".item_type").val());
						$("textarea[name='multiple_answers[]']").val("");
						$(".answers").html(init_choices("radio"));
					}
					
				});

				//specify element properties
				$(".item_type").change(function(){

					//clear answers
					$(".answers").html("");

					if($(".item_type").val() == 0 || $(".item_type").val() == 2 || $(".item_type").val() == 3) {

						//hide for single answer questions
						$(".multiple_setting").hide();

						if($(".item_type").val() == 2) {
							
							var choices_str = "<input type=\"radio\" class=\"ace\" name=\"radio_answer\"> True<br><input type=\"radio\" class=\"ace\" name=\"radio_answer\"> False";
							choices_str = "<pre>" + choices_str + "</pre>";
							$(".answers").html(choices_str);
						}
						else if($(".item_type").val() == 3) {
							
							var choices_str = "<textarea id=\"question\" style=\"width:95%\"></textarea>";
							choices_str = "<pre>" + choices_str + "</pre>";
							$(".answers").html(choices_str);
						}
						
					}
					else {		

						$(".multiple_setting").show(function(){

							$(".no_of_choices").val("--");
						});
						$(".answers").html("(Please specify the number of choices)");

					}
				});

				//initialization of choices
				var init_choices = function (input_type) {

					var choices_str = "";

					for (var i = 0; i < parseInt($(".no_of_choices").val()); i++) {

						choices_str += "<input name=\"choices\" type=\"" + input_type + "\"><textarea  style=\"width:90%\" name=\"multiple_answers[]\"></textarea><br>";

					};

					if(choices_str=="") {

						//clear answers
						choices_str = "(Please specify the number of choices)";
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
					else {
						
					}
				});

			});


			
		</script>
	</body>
</html>
