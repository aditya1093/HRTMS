<?php if($this->session->userdata('permission') != 'Trainee') { redirect(base_url() . '404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>HRIS - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/ace.min.css" media="PRINT,SCREEN"/>
	
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/custom.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
		<!--<script src="<?php echo base_url();?>assets/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-barcode.js"></script>
		/*Barcode
		-->

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
		.tags{display:inline-block;padding:4px 6px;color:#777;vertical-align:middle;background-color:#FFF;border:1px solid #d5d5d5;width:50%}
		</style>
	</head>

	<body>
		<div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a href="#" class="brand">
					<small>
						<i class="icon-group"></i>
						AMI - HRTMS Training
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
					
					<li class="">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>profile">
							<i class="icon-user"></i>
							<span>Profile</span>
						</a>
					</li>

					<li class="active">
						<a href="<?php echo base_url();?>profile/HRIS">
							<i class="icon-user"></i>
							<span>HRIS</span>
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
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">HRIS</li>
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
							HRIS
							<small>
								<i class="icon-double-angle-right"></i>
								Dependent/ Beneficiary/ Character Reference
							</small>
						</h1>
					</div><!--/.page-header-->

				
					<div class="row-fluid">
						  <!-- Tab 1 -->
					  	<div class="tabbable tabs-left">
							<ul class="nav nav-tabs" id="myTab3">
								<li class="active">
									<a data-toggle="tab" href="#tab_dependent">
										<i class="pink icon-dashboard bigger-110"></i>
										Dependent
									</a>
								</li>

								<li class="">
									<a data-toggle="tab" href="#tab_beneficiary">
										<i class="blue icon-user bigger-110"></i>
										Beneficiary
									</a>
								</li>

								<li class="">
									<a data-toggle="tab" href="#tab_character_reference">
										<i class="icon-rocket"></i>
										Character Reference
									</a>
								</li>
							</ul>

							<div class="tab-content">
								<div id="tab_dependent" class="tab-pane active">
									<div class="table-header">
										<b>Name(s) of Dependent</b>
				                      	<i>(if none, proceed to the next step)</i> 
									</div>
									<table id="table_dependent" class="table table-striped table-bordered table-hover">
			               			<thead>
			               				<tr>
			               					<th>Name</th>
			               					<th>Birthday</th>
			               					<th>Relationship</th>
			               					<th></th>
			               				</tr>
			               			</thead>
			               			<tbody>
									<?php if(isset($records)) : foreach($records as $row) : ?>
		                    		
		                    			<tr>
		                    				<td><?php echo $row->dependent_name;?></td>
		                    				<td><?php echo $row->dependent_birthdate;?></td>
		                    				<td><?php echo $row->dependent_relationship?></td>
		                    				<td><button class="btn btn-mini btn-info">
													<i class="icon-edit bigger-120"></i>
												</button>
												<button class="btn btn-mini btn-danger">
													<i class="icon-trash bigger-120"></i>
												</button>
											</td>
		                    			</tr>
		                    	
					                <?php endforeach;?>
									<?php endif; ?>
									</tbody>
									</table>
									<small>Page rendered in: {elapsed_time} seconds</small>
			                      	
				                  	<div id="dependentDiv" style="display:none">
										<h2>Dependent's Information</h2>

					               		<form id="dependent" class="form-horizontal">
					               			<div class="control-group">
												<label class="control-label" for="dependent_name">Full Name</label>

												<div class="controls">
													<input type="text" id="dependent_name" name="dependent_name">
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="dependent_dob">Date of Birth</label>

												<div class="controls">
													 <input type ="date"  id="dependent_dob"  class="input-medium" name="dependent_dob">
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="dependent_relationship">Relationship to Dependent</label>

												<div class="controls">
													<input type="text" id="dependent_relationship" name="dependent_relationship">
												</div>
											</div>
					                      	<div class="form-actions">
												<button class="btn btn-info btn-small" type="submit">
													<i class="icon-ok bigger-110"></i>
													Submit
												</button>

												&nbsp; &nbsp; &nbsp;
												<button class="btn btn-small" type="reset">
													<i class="icon-undo bigger-110"></i>
													Reset
												</button>
											</div>
						                </form>
									</div>
									<div class="pager" >    
				   	         		<div class="btn-group" id="addDependentDiv" >
			                       		<a href="#" id="addDependent" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
			                      		<span class="help-inline">Click Add+ to add more Dependent's Information.</span>
			                       	</div>
			                       	<div class="btn-group" id="cancelDependentDiv" style="display:none">
			                       		<a href="#" id="cancelDependent" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
		                       		</div>
									</div> 
								</div>

								<div id="tab_beneficiary" class="tab-pane">
									<div class="table-header">
										<b>Name(s) of Beneficiary</b>
					                    <i>(if none, proceed to the next step)</i> 
									</div>
									<table id="table_beneficiary" class="table table-striped table-bordered table-hover">
			               			<thead>
			               				<tr>
			               					<th>Name</th>
			               					<th>Birthday</th>
			               					<th>Relationship</th>
			               					<th></th>
			               				</tr>
			               			</thead>
			               			<tbody>
									<?php if(isset($records2)) : foreach($records2 as $row) : ?>
		                    		
		                    			<tr>
		                    				<td><?php echo $row->beneficiary_name;?></td>
		                    				<td><?php echo $row->beneficiary_birthdate;?></td>
		                    				<td><?php echo $row->beneficiary_relationship?></td>
		                    				<td><button class="btn btn-mini btn-info">
													<i class="icon-edit bigger-120"></i>
												</button>
												<button class="btn btn-mini btn-danger">
													<i class="icon-trash bigger-120"></i>
												</button>
											</td>
		                    			</tr>
		                    		
					                <?php endforeach;?>
									<?php endif; ?>
									</tbody>
									</table>
									<small>Page rendered in: {elapsed_time} seconds</small>
				                  	
					               <div id="beneficiaryDiv" style="display:none">
										<h2>Beneficiary's Information</h2>

					               		<form id="beneficiary" class="form-horizontal">
					               			<div class="control-group">
												<label class="control-label" for="beneficiary_name">Full Name</label>

												<div class="controls">
													<input type="text" id="beneficiary_name" name="beneficiary_name">
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="beneficiary_dob">Date of Birth</label>

												<div class="controls">
													 <input type ="date"  id="beneficiary_dob"  class="input-medium" name="beneficiary_dob">
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="beneficiary_relationship">Relationship to beneficiary</label>

												<div class="controls">
													<input type="text" id="beneficiary_relationship" name="beneficiary_relationship">
												</div>
											</div>
					                      	<div class="form-actions">
												<button class="btn btn-info btn-small" type="submit">
													<i class="icon-ok bigger-110"></i>
													Submit
												</button>

												&nbsp; &nbsp; &nbsp;
												<button class="btn btn-small" type="reset">
													<i class="icon-undo bigger-110"></i>
													Reset
												</button>
											</div>
						                </form>
									</div>
									<div class="pager" >    
				   	         		<div class="btn-group" id="addBeneficiaryDiv" >
			                       		<a href="#" id="addBeneficiary" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
			                      		<span class="help-inline">Click Add+ to add more Beneficiary's Information.</span>
			                       	</div>
			                       	<div class="btn-group" id="cancelBeneficiaryDiv" style="display:none">
			                       		<a href="#" id="cancelBeneficiary" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
		                       		</div>
									</div> 
								</div>

								<div id="tab_character_reference" class="tab-pane">
									<div class="table-header">
										<b>Character Reference</b>
										<i>(except family and relatives)</i> 
									</div>
									<table id="table_character_reference" class="table table-striped table-bordered table-hover">
			               			<thead>
			               				<tr>
			               					<th>Name</th>
			               					<th>Company</th>
			               					<th>Contact No</th>
			               					<th></th>
			               				</tr>
			               			</thead>
			               			<tbody>
					              	<?php if(isset($records3)) : foreach($records3 as $row) : ?>
					              			
			                    			<tr>
			                    				<td><?php echo $row->character_name;?></td>
			                    				<td><?php echo $row->character_company;?></td>
			                    				<td><?php echo $row->character_contact_no?></td>
			                    				<td><button class="btn btn-mini btn-info">
													<i class="icon-edit bigger-120"></i>
												</button>
												<button class="btn btn-mini btn-danger">
													<i class="icon-trash bigger-120"></i>
												</button>
												</td>
			                    			</tr>
			                    			
					                <?php endforeach;?>
									<?php endif; ?>
									</tbody>
									</table>
									<small>Page rendered in: {elapsed_time} seconds</small>
	
		                    	    <div id="characterReferenceDiv" style="display:none">
									<h2>Character Reference's Information</h2>

				               		<form id="character_reference" class="form-horizontal">
				               			<div class="control-group">
											<label class="control-label" for="CR_name">Full Name</label>

											<div class="controls">
												<input type="text" id="CR_name" name="CR_name">
											</div>
										</div>

				               			<div class="control-group">
											<label class="control-label" for="CR_company_name">Name of Company</label>

											<div class="controls">
												 <input type ="text"  id="CR_company_name"  class="" name="CR_company_name">
											</div>
										</div>

				               			<div class="control-group">
											<label class="control-label" for="CR_contact_no">Contact No</label>

											<div class="controls">
												<input type="text" id="CR_contact_no" name="CR_contact_no">
											</div>
										</div>
				                      	<div class="form-actions">
											<button class="btn btn-info btn-small" type="submit">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-small" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
					                </form>
									</div>
									<div class="pager" >    
				   	         		<div class="btn-group" id="addCharacterReferenceDiv" >
			                       		<a href="#" id="addCharacterReference" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
			                      		<span class="help-inline">Click Add+ to add more Character Reference's Information.</span>
			                       	</div>
			                       	<div class="btn-group" id="cancelCharacterReferenceDiv" style="display:none">
			                       		<a href="#" id="cancelCharacterReference" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
		                       		</div>
									</div> 
								</div>
							</div>
						</div>
			
		             
		               
                <!-- End of Tab 1 -->
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
		<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-tag.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

	
		<script src="<?php echo base_url();?>assets/js/relCopy.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>

		<!--inline scripts related to this page-->
		<script type="text/javascript">
		
		$( document ).ready(function() {

		/** Add Dependent **/	
			$("#addDependent").click(function() {
			  $("#dependentDiv").slideDown();
			  $("#addDependentDiv").slideUp();
			  $('#cancelDependentDiv').slideDown();

			});

			$("#cancelDependent").click(function() {
	      		$('#cancelDependentDiv').hide();
			 	$('#dependentDiv').slideUp();
				$("#addDependentDiv").slideDown();

			});
		/** **/
		/** Add Beneficiary **/	
			$("#addBeneficiary").click(function() {
			  $("#beneficiaryDiv").slideDown();
			  $("#addBeneficiaryDiv").slideUp();
			  $('#cancelBeneficiaryDiv').slideDown();

			});

			$("#cancelBeneficiary").click(function() {
	      		$('#cancelBeneficiaryDiv').hide();
			 	$('#beneficiaryDiv').slideUp();
				$("#addBeneficiaryDiv").slideDown();

			});
		/** **/	
		/** Add Character Reference **/	
			$("#addCharacterReference").click(function() {
			  $("#characterReferenceDiv").slideDown();
			  $("#addCharacterReferenceDiv").slideUp();
			  $('#cancelCharacterReferenceDiv').slideDown();

			});

			$("#cancelCharacterReference").click(function() {
	      		$('#cancelCharacterReferenceDiv').hide();
			 	$('#characterReferenceDiv').slideUp();
				$("#addCharacterReferenceDiv").slideDown();

			});
		/** **/	
//other
			var removeLink = '<a class="remove btn btn-mini btn-danger" src ="<?php echo base_url();?>assets/images/cross.png" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';
	        var removeLink2 = '<img class="remove" src ="<?php echo base_url();?>assets/images/cross.png" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">';
	      	$('a.copy1').relCopy({append: removeLink});
	      	$('a.copy2').relCopy({append: removeLink2});

      		$('.dialogs,.comments').slimScroll({
		        height: '300px'
		    });
			
			$('#tasks').sortable();
			$('#tasks').disableSelection();
			$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
				if(this.checked) $(this).closest('li').addClass('selected');
				else $(this).closest('li').removeClass('selected');
			});

			//datatable initializatino
			var oTable1 = $('#table_dependent').dataTable( {
			"aoColumns": [
		     	null, null, null,
			  { "bSortable": false }
			] } );
			
			
			$('table th input:checkbox').on('click' , function(){
				var that = this;
				$(this).closest('table').find('tr > td:first-child input:checkbox')
				.each(function(){
					this.checked = that.checked;
					$(this).closest('tr').toggleClass('selected');
				});
					
			});

			//datatable initializatino
			var oTable1 = $('#table_beneficiary').dataTable( {
			"aoColumns": [
		     	null, null, null,
			  { "bSortable": false }
			] } );
			
			
			$('table th input:checkbox').on('click' , function(){
				var that = this;
				$(this).closest('table').find('tr > td:first-child input:checkbox')
				.each(function(){
					this.checked = that.checked;
					$(this).closest('tr').toggleClass('selected');
				});
					
			});

			//datatable initializatino
			var oTable1 = $('#table_character_reference').dataTable( {
			"aoColumns": [
		     null, null, null,
			  { "bSortable": false }
			] } );
			
			
			$('table th input:checkbox').on('click' , function(){
				var that = this;
				$(this).closest('table').find('tr > td:first-child input:checkbox')
				.each(function(){
					this.checked = that.checked;
					$(this).closest('tr').toggleClass('selected');
				});
					
			});
		
			$('[data-rel=tooltip]').tooltip();

			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
		
//other

	      	$( "#dependent" ).on( "submit", function( event ) {
			
			  event.preventDefault();
			  var sData = $(this).serialize();
			  console.log(sData);
			  $.ajax({
	               url:"<?php echo base_url();?>hris/insertDependent",
	                type:'POST',
	                data:sData,
	               	//dataType:"json",
	                success:function(result){
	    
			                $.gritter.add({
								title: 'Human Resource Information Update',
								text: '<i class="icon-spinner icon-spin green icon-2x"></i> Dependent/Dependents has been updated.',
								class_name: 'gritter-success gritter-center gritter-light'
							});

			                $( '#dependent' ).each(function(){
							    this.reset();
							});
							$('#dependentDiv').slideUp();
							$("#addDependentDiv").slideDown();
							$('#cancelDependentDiv').hide();

							console.log(result);
							var str,str2="";
							var obj = $.parseJSON(result);
				                $.each(obj, function(){
				                	//var str = "<button class=\"btn btn-mini btn-info\" id="+this['id']+"><i class=\"icon-edit bigger-120\"></i></button><button class=\"btn btn-mini btn-danger\"> <i class=\"icon-trash bigger-120\"></i></button>";
								   		str =	'<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>';
										str2 =	'<button class="btn btn-mini btn-danger"><i class="icon-trash bigger-120"></i></button>';
									
												
								   $('#table_dependent').dataTable().fnAddData([
										this['dependent_name'],
										this['dependent_birthdate'],
									   	this['dependent_relationship'],
									 	str + " " +str2 ]
									 	);
				                });
					}
	                //$("html, body").animate({ scrollTop: 0 }, "slow");

	               

	            });


			});

			$( "#beneficiary" ).on( "submit", function( event ) {
			
			  event.preventDefault();
			  var sData = $(this).serialize();
			  console.log(sData);
			  $.ajax({
	               url:"<?php echo base_url();?>hris/insertBeneficiary",
	                type:'POST',
	                data:sData,
	               	dataType:"json",
	                success:function(result){
	    
	                $.gritter.add({
						title: 'Human Resource Information Update',
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Beneficiary/Beneficiaries has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
	                $( '#beneficiary' ).each(function(){
					    this.reset();
					});
					$('#beneficiaryDiv').slideUp();
					$("#addBeneficiaryDiv").slideDown();
					$('#cancelBeneficiaryDiv').hide();

					console.log(result);
	               
					var substr = result.split('&&');
					console.log();
					console.log();
					console.log();
					$('#table_beneficiary').dataTable().fnAddData( [
						substr[0],
						substr[1],
					   substr[2],
					   "" ] );
					
			
	                //$("html, body").animate({ scrollTop: 0 }, "slow");

	                }

	            });


			});
 			
			
			$( "#character_reference" ).on( "submit", function( event ) {
			  event.preventDefault();
			  var sData = $(this).serialize();
			  console.log(sData);
			   $.ajax({
	                url:"<?php echo base_url();?>hris/insertCharacterReference",
	                type:'POST',
	                data:sData,
	                dataType:"json",
	               
	                success:function(result){
	                //$("#success").show();
	                //$("#success").attr('class', 'alert alert-success');
	                //var output_string = "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button><p><strong><i class=\"icon-ok\"></i>Well done!</strong> You successfully added an applicant.</p><p><a class=\"btn btn-small btn-success\" href=\"<?php echo base_url();?>training\">Trainee List</a><button class=\"btn btn-small\">Or This One</button></p></div>";
	               // $("#success").html(output_string);
	                //$("#result_table").hide();
	                // location.reload();
	                $.gritter.add({
						title: 'Human Resource Information Update',
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Character Reference has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					
		           	$( '#character_reference' ).each(function(){
					    this.reset();
					});
					$('#characterReferenceDiv').slideUp();
					$("#addCharacterReferenceDiv").slideDown();
					$('#cancelCharacterReferenceDiv').hide();

					console.log(result);
	                //$("html, body").animate({ scrollTop: 0 }, "slow");
	               /* */
					var substr = result.split('&&');
					console.log();
					console.log();
					console.log();
					$('#table_character_reference').dataTable().fnAddData( [
						substr[0],
						substr[1],
					   substr[2],
					   "" ] );

	                }

	            });

			});

		});

		</script>
	</body>
</html>
