<?php if($this->session->userdata('permission') != 'Trainee') { redirect(base_url() . '404');} ?>
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

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />


		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />

		

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
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<?php if(isset($records)) : foreach($records as $row) : $this->session->set_userdata('civil_status', $row->civil_status);endforeach;endif; ?>
	</head>

	<body>
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - Training
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

					<!--
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
						-->

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
							<span>Control Panel</span>
						</a>
					</li>

					
					
					<li class="">
						<a href="<?php echo base_url();?>profile/HRIS">
							<i class="icon-user"></i>
							<span>HRIS</span>
						</a>
					</li>

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
						<a href="#">Home</a>

						<span class="divider">
							<i class="icon-angle-right"></i>
						</span>
					</li>
					<li class="active">Control Panel</li>
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
						AMI Trainee 
						<small>
							<i class="icon-double-angle-right"></i>
							
						</small>
					</h1>
				</div><!--/.page-header-->
				<?php if(isset($score)) {?>
				<div class="alert alert-info">
					

				</div>
				<?php }?>
				<?php if($this->session->userdata("is_active")==0) { ?>
				<div class="row-fluid">
					<!--PAGE CONTENT STARTS HERE-->
					
					<div class="span8">
						<div class="widget-box">
							<div class="widget-header">
								<h4 class="smaller">
									Viewer
									<small>by Google Docs</small>
								</h4>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<span class="presenter">
										<iframe src="http://docs.google.com/viewer?url=http://jemnuine.com/elfinder/files/GDOCS.pptx&amp;embedded=true" width="100%" height="400" style="border: none;"></iframe>
									</span>
									
								</div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget-box">
							<div class="widget-header">
								<h4 class="smaller">
									Modules
									<small>Select</small>
								</h4>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<table class="table">
										<tbody><tr>
											<td>
												<label>Company: </label>
												<select required="" name="company_name" id="company_name">
													<option value="" selected="selected" style="color:#ddd;">Select Company...</option>
														
														<option value="TOSHIBA">TOSHIBA</option>
														
														<option value="TOTOKU">TOTOKU</option>
														
														<option value="SHINETSU">SHINETSU</option>
														
														<option value="AMI">AMI</option>
														
														<option value="HP">HP</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<label>Module Name: </label>
												<select required="" name="module_name" id="module_name">
													<option value="" selected="selected" style="color:#ddd;">Select Module...</option>
													
												</select>

												<i style="margin-left: 5px; display: none;" id="loading_file" class="icon-spinner icon-spin orange icon-2x"></i>
											</td>
										</tr>
										<tr>	
											<td>
												<button id="view_module" class="btn btn-success"><i class="icon-arrow-left icon-white"></i> View Module</button>
											</td>
										</tr>
										
										
									</tbody></table>
								</div>
							</div>
						</div>
						<p></p>
						<div class="widget-box">
							<div class="widget-header widget-header-small header-color-dark">
								<h4 class="smaller">
									Information
									<small></small>
								</h4>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									<address>
										<b>Module Name: </b><span id="dmodule"></span><br>
										<b>Company Name: </b><span id="dcompany"></span><br>
										<b>Path: </b><span id="dfile"></span><br>

									</address>
									<a id="download" class="btn btn-mini btn-info tooltip-error" data-rel="tooltip" data-placement="top" title="" data-original-title="Top Danger">
										<i class="icon-cloud-download"></i>
										Download File
									</a>
								</div>
							</div>
						</div>
					</div>
					<!--PAGE CONTENT ENDS HERE-->
				<!--/row-->

				</div>
				<?php } else { ?>

				<div class="row-fluid">

					<div class="span8">
						<div class="widget-box">
							<div class="widget-header">
								<h4 class="smaller">
									Examination Items
									<small>Test Modules</small>
								</h4>
							</div>
							<form id='answers_form' >
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
														#
													</th>
													<th class="center">
														Item
													</th>					
												</tr> 
											</thead>
											<tbody id="item_data">
												
											</tbody>
										</table>
									</div>
								</div>
								<br>
								<button class="btn btn-info btn-large" type="submit"><i class="icon-check"></i> Submit</button>
							</form>
						</div>
					</div>

					<div class="span4">
						
						<div class="row-fluid">

							<div class="widget-box">
								<div class="widget-header header-color-dark">
									<h5 class="bigger lighter"><i class="icon-info"></i> Examination Progress</h5>

									<div class="widget-toolbar">

									</div>
								</div>
								
								<div class="widget-body">
									<div class="widget-main">
										
										<div>
											
											<b>Overall Progess</b> (60%): 
											<div class="progress progress-mini progress-warning progress-striped active">
												<div class="bar" style="width: 60%"></div>

											</div>
											
										</div>
										<div>
											
											<b>Overall Score</b> 90/100 (90%): 
											<div class="progress progress-mini progress-info progress-striped active">
												<div class="bar" style="width: 90%"></div>

											</div>
											
										</div>
									</div>
								</div>
									
							</div>
						</div>

						<div class="row-fluid">
							<div class="widget-box">
								<div class="widget-header header-color-dark">
									<h5 class="bigger lighter"><i class="icon-book"></i> Examination Set</h5>

									<div class="widget-toolbar">
									<span class="label label-important">TOSHIBA</span>
									</div>
								</div>
								
								<div class="widget-body">
									<div class="widget-main">
										<table class="table table-striped">
											
											<tr>
												<td>
													Sample Exam 1
													<span class="pull-right">
														<button class="btn btn-purple btn-mini"><i class="icon-pencil"></i> Take Exam</button>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													Sample Exam 2
													<span class="pull-right">
														<button class="btn btn-purple btn-mini"><i class="icon-pencil"></i> Take Exam</button>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													Sample Exam 2
													<span class="pull-right">
														<button class="btn btn-purple btn-mini"><i class="icon-pencil"></i> Take Exam</button>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													Sample Exam 2
													<span class="pull-right">
														<button class="btn btn-purple btn-mini"><i class="icon-pencil"></i> Take Exam</button>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													Sample Exam 2
													<span class="pull-right">
														<button class="btn btn-purple btn-mini"><i class="icon-pencil"></i> Take Exam</button>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													Sample Exam 3 - 90%  <i class="icon-ok green"></i> 
													<span class="pull-right">
														Passed
													</span>
												</td>
											</tr>
											<tr>
												<td>
													Sample Exam 4 - 50% <i class="icon-remove red"></i> 
													<span class="pull-right">
														Failed
													</span>
												</td>
											</tr>
										</table>
									</div>
								</div>
									
							</div>
						</div>
					</div>


				</div>

				<?php } ?>
			<!--/#page-content-->

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
		<script src="<?php echo base_url();?>assets/js/spin.min.js"></script>



		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>


		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">	

			var separator = "~/&^%-";

			/********************** SERIALIZE ******************************/

			$( "#answers_form" ).on( "submit", function( event ) {

			  event.preventDefault();
			  var sData = $(this).serialize();
			  //console.log(sData);

			  $.ajax({

	               	url:"examination/submit_answers",
	                type: 'POST',
	                data: sData,
	                success:function(result){
	                	
	                	console.log(result);
	                }

	            });

			});

			$(document).ready(function() {

				$('#item_table').dataTable({
					"aoColumns": [
						{ "bSortable": false },
						{ "bSortable": false }
					],
					'iDisplayLength': -1
				});

				load_items("");

				$(".dataTables_filter").hide();
				$("#item_table_wrapper").find(".row-fluid").remove();
			});

		
			/********************** LOAD ITEMS FROM DB ******************************/

			var load_items = function(id) {
				
				var request = $.ajax({
		        	url: "<?php echo base_url();?>examination/load_items/"+id,
		        	type: 'POST',
		        	data: { 
		        		ajax: '1'
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	$(".loader").hide();
		        	strip_data(response);
		        	console.log(response);
					
			    });
			}


			/************************* STUDENT DECODER ENGINE ********************************/

			var strip_data = function(data) {

				console.log(data);

				obj = jQuery.parseJSON(data);

				var len = 0, key;

			    for (key in obj) {

			        if (obj.hasOwnProperty(key)) len++;
			    }

			    var str = "";

				for (var i = 0; i < len; i++) {

					//obj[i].module_name
					str += '<p id="q'+obj[i].question_id+'">'+obj[i].question+'</p>'


					if(obj[i].question_type==1) {

						var a = obj[i].answers.split(separator);
						var c = "", e = obj[i].key_answer;

						for (var j = 0; j < a.length - 1; j++) {
							
							/*if((j+1)==e) {

								c = "checked";
							}*/
							str += '<label><input '+c+' name="'+obj[i].question_id+'" type="radio" value="'+(j+1)+'">'+a[j]+'</label><br>';
							c="";
						};
					}
					else if(obj[i].question_type==2) {

						var e = obj[i].key_answer, a="", c="";
						/*if(e=="true") {

							a = "checked";
						}
						else {

							c = "checked";
						}*/
						str += '<label><input '+a+' name="'+obj[i].question_id+'" type="radio" value="true"> True</label><br>';
						str += '<label><input '+c+' name="'+obj[i].question_id+'" type="radio" value="false"> False</label><br>';
					}
					else if(obj[i].question_type==3) {

						var e = ""; //obj[i].key_answer;
						str += '<textarea id="'+obj[i].question_id+'" style="width:90%;" name="'+obj[i].question_id+'">'+e+'</textarea>';
						
					}
					else if(obj[i].question_type==4) {

						var a = obj[i].answers.split(separator);
						var c = "", e = obj[i].key_answer.split(separator);

						for (var j = 0; j < a.length - 1; j++) {
							
							for (var k = 0; k < e.length; k++) {

								if(e[k]==j+1) {

									//c = "checked";
								}
							};
							
							str += '<label><input '+c+' name="'+obj[i].question_id+'_'+(j+1)+'" type="checkbox" value="'+(j+1)+'">'+a[j]+'</label><br>';
							c = "";
						};
					}
					else {

						var e = obj[i].key_answer.split(separator);
						str += '<ul class="item-list ui-sortable" style="width:90%;">';

						for (var j = 0; j < a.length - 1; j++) {
							
							str += '<li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">'+e[j]+'</span></li>';
						};
						str += '</ul>';
					}

					$('#item_table').dataTable().fnAddData([(i+1), str]);
					
					str = "";
				};

				$(".loader").hide();
			}
 
										 
		</script>
	</body>
</html>
