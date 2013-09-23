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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace/ace.min.css"/>
	
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css" />

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
							<span class="badge badge-success"></span>
						</a>

						<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
							<li class="nav-header">
								<i class="icon-envelope"></i>
								Messages
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
					
					<li class="">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					

					<li class="active">
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
							<a href="<?php echo base_url();?>dashboard">Home</a>

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
								Personal Information
							</small>
						</h1>
					</div><!--/.page-header-->

				
					<div class="row-fluid">
			
						  <!-- Tab 1 -->
				<form>
                <div class="" id="personal_info">
                <?php if(isset($records)) : foreach($records as $row) : ?>
                    
                    <!-- Employe Name -->
                        <label>First Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp;Last Name &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Middle Name &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nickname</label>
                          <input type="text" class="input-large" name = "first_name" value="<?php echo $row->first_name;?>">
                          <input type="text" class="input-large" name = "last_name" value="<?php echo $row->last_name;?>">
                          <input type="text" class="input-medium" name = "middle_name" value="<?php echo $row->middle_name;?>">
                          <input type="text" class="input-medium" name = "nickname" value="<?php echo $row->nickname;?>">
                        <label >Date of Birth&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; Place of Birth</label>
                          <input class ="input-medium"  id="dob" type="date" name="birthdate" value="<?php echo $row->birthdate;?>">
                          <input type="text" class="input-large" name = "place_of_birth" value ="<?php echo $row->place_of_birth;?>"> &nbsp;
                    <!-- End of Employee Name -->
                    <!-- Gender -->

                        <label>Gender</label>
                        <div class="form-inline">
                        <label >
			            <input type="radio" value="Male"  name="gender" <?php if($row->gender=='Male') echo 'checked'; else echo 'disabled';?>>
			            <span class = "lbl">Male</span> 
			          	</label>
			          	<label >&nbsp;
			            <input type="radio" value="Female"  name="gender"  <?php if($row->gender=='Female') echo 'checked'; else echo 'disabled';?>>
			            <span class = "lbl">Female</span>
			         	</label>
                        </div>
                        
                    <!-- end of Gender -->
                    <!-- allergy -->
                    <br>
                     <label>If allergic to anything - food, medicine, others - please specify below</label>
                     <input type="text" class="input-medium" name = "allergy"  value="<?php echo $row->allergy;?>">
                    <!-- end of allergy -->
                    <br><br>
                    <!-- Citizenship / Civil Status / Height / Weight / Blood Type / Religion / Home & Mobile No. -->
                        <label>Citizenship &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; &nbsp; &nbsp;Civil Status</label>
                        <input type="text" class="input-medium" name = "citizenship" value="<?php echo $row->citizenship;?>">
                        <select id="" name = "civil_status">
                          <option disabled = "disabled" selected = "selected" value="">Select Status..</option>
                          <option value = "Single" <?php if($row->civil_status=='Single') echo 'selected';?>>Single</option>
                          <option value = "Married" <?php if($row->civil_status=='Married') echo 'selected';?>>Married</option>
                          <option value = "Separated" <?php if($row->civil_status=='Separated') echo 'selected';?>>Separated</option>
                          <option value = "Widowed" <?php if($row->civil_status=='Widowed') echo 'selected';?>>Widowed</option>
                          <option value = "Divorced" <?php if($row->civil_status=='Divorced') echo 'selected';?>>Divorced</option>
                        </select>
                        <label>Height
                          <i>(cm)</i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Weight
                          <i>(kg)</i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Blood Type</label>
                        <input type="text" class="input-medium" name = "height" value="<?php echo $row->height;?>">
                        <input type="text" class="input-medium" name = "weight" value="<?php echo $row->weight;?>">
                        <select name = "blood_type">
                          <option disabled = "disabled" selected = "selected" value="">Select Blood Type...</option>
                          <option value = "A" <?php if($row->blood_type=='A') echo 'selected';?>>A</option>
                          <option value = "B" <?php if($row->blood_type=='B') echo 'selected';?>>B</option>
                          <option value = "O" <?php if($row->blood_type=='O') echo 'selected';?>>O</option>
                          <option value = "AB" <?php if($row->blood_type=='AB') echo 'selected';?>>AB</option>
                        </select>
                        <label for="religion" >Religion</label>
                          <input type="text" class="input-medium" id="religion"  name = "religion" value="<?php echo $row->religion;?>">
                        <label>Home Tel. No. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Mobile no. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; &nbsp; &nbsp; Alternate Contact No.</label>
                          <input class="input-mask-tel input-medium" type="text" id="" name="home_no" value="<?php echo $row->home_no;?>" />
                          <input class="input-mask-phone input-medium" type="text" id="" name="mobile_no" value="<?php echo $row->mobile_no;?>" />
                          <input class="input-mask-alt input-medium" type="text" id="" name="alternative_no" value="<?php echo $row->alternative_no;?>" />
                    <!-- End of Citizenship / Civil Status / Height / Weight / Blood Type / Religion / Home & Mobile No. -->
                    <!-- Employee Address -->
                        <label>Present Home Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Province</label>
                          <input type="text" class="input-xlarge" name="present_address" value="<?php echo $row->present_address;?>">&nbsp;
                          <input type="text" class="input-large" name="present_city" value="<?php echo $row->present_city;?>">&nbsp;
                          <input type="text" class="input-large" name="present_province" value="<?php echo $row->present_province;?>">&nbsp;
                          <label>Provincial Address</label>
                    	  <label>
								<input type="checkbox" class="ace" name="sameashome" value="checkbox" onClick="sameadd(this.form);">
								<span class="lbl"> <i>Same As Present Home Address</i></span>
						  </label>
                          <label class="checkbox">
                           
                            <span>Address &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Province
                            </span>
                          </label>
                            <input type="text" class="input-xlarge" name="provincial_address" value="<?php echo $row->provincial_address;?>">&nbsp;
                            <input type="text" class="input-large" name="provincial_city" value="<?php echo $row->provincial_city;?>">&nbsp;
                            <input type="text" class="input-large" name="provincial_province" value="<?php echo $row->provincial_province;?>">&nbsp;
                          
                          <label>Mailing Address</label>
                           <label>
								<input type="checkbox" class="ace" name="sameashome2" value="checkbox" onClick="sameadd2(this.form);">
								<span class="lbl"> <i>Same As Present Home Address</i></span>
						  </label>
                          <label class="checkbox">
                          
                            Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Province
                          </label>
                            <input type="text" class="input-xlarge" name ="mailing_address" value="<?php echo $row->mailing_address;?>">&nbsp;
                            <input type="text" class="input-large" name ="mailing_city" value="<?php echo $row->mailing_city;?>">&nbsp;
                            <input type="text" class="input-large" name ="mailing_province" value="<?php echo $row->mailing_province;?>">&nbsp;
                    <!-- End of Employee Address -->
                    <!-- Parents Information -->
                      <!-- Father's Information -->
                           <div class="control-group">
                            <label class="control-label">
                              <b>Employee's Father's Information</b> 
                            </label>
                              <div class="controls">
                                <label for="father_name">Full Name</label>
                                <input type="text" class="input-xlarge" id="father_name" name ="father_name" value="<?php echo $row->father_name;?>">
                                <label for="father_age">Age</label>
                                <input type="text" class="input-mini" id="father_age" name="father_age" value="<?php echo $row->father_age?>">
                                <label for="father_occupation" >Occupation</label>
                                <input type="text" class="input-xlarge" id="father_occupation"  name ="father_occupation" value="<?php echo $row->father_occupation;?>">
                               
                                <label for="father_emp_loc" >Address/Location of Employment</label>
                                <input type="text" class="input-xxlarge"  id="father_emp_loc" name = "father_occupation_address" value="<?php echo $row->father_occupation_address;?>">
                                <label for="father_address" >Home Address</label>
                                <label>
								<input type="checkbox" class="ace" name="sameasfather" value="checkbox" onClick="sameaddfather(this.form);">
								<span class="lbl"> <i>Same As Present Home Address</i></span>
						  		</label>
                                <input type="text" class="input-xxlarge"  id="father_address" name ="father_address" value="<?php echo $row->father_address;?>">
                                <label for="father_contact" >Contact No.</label>
                                <input type="text" class="input-mask-phone input-medium" id="father_contact"  name ="father_contact_no" value="<?php echo $row->father_contact_no;?>"> 
                              </div>
                            </div>
                        <!-- End of Father's Information -->
                        <!-- Mother's Information -->
                            <div class="control-group">
                              <label class="control-label">
                                <b>Employee's Mother's Information</b> 
                              </label>
                                <div class="controls">
                                  <label for="mother_name">Full Name</label>
                                  <input type="text" class="input-xlarge" name = "mother_name" id="mother_name"value="<?php echo $row->mother_name;?>">
                                  <label for="mother_age" >Age</label>
                                  <input type="text" name = "mother_age"  id="mother_age" value="<?php echo $row->mother_age;?>">
                                  <label for="mother_occupation" >Occupation</label>
                                  <input type="text" class="input-large" id="mother_occupation" name = "mother_occupation"  value="<?php echo $row->mother_occupation;?>">
                                  <label for="mother_emp_loc" >Address/Location of Employment</label>
                                  <input type="text" class="input-xxlarge" id="mother_emp_loc" name = "mother_occupation_address" value="<?php echo $row->mother_occupation_address;?>">
                                  <label for="mother_address" >Home Address</label>
                                  <label>
								  <input type="checkbox" class="ace" name="sameasmother" value="checkbox" onClick="sameaddmother(this.form);">
							      <span class="lbl"> <i>Same As Present Home Address</i></span>
						  		  </label>
                                   <input type="text" class="input-xxlarge"  id="mother_address" name = "mother_address"  value="<?php echo $row->mother_address;?>">
                                  <label for="mother_contact" >Contact No.</label>
                                  <input type="text" class="input-mask-phone input-medium" id="mother_contact" name = "mother_contact_no"  value="<?php echo $row->mother_contact_no;?>"> 
                               		
                                </div>
                            </div>
                        <!-- End of Mother's Information -->
                      <!-- End of Parents Information -->
                      <!--Skills-->
	                     
	                            <div class="control-group wrapper">
	                            <small class="muted" >Enter for another input</small>
									<label class="control-label" for="skills">Skills</label>
									<div class="controls">
									<input class="" id="skills" name="skills" value="<?php echo $row->skills;?>">
									</div>
									<label class="control-label" for="hobbies">Hobbies</label>
									<div class="controls">
									<input class="" id="hobbies" name="hobbies" value="<?php echo $row->hobbies;?>">
									</div>
									<label class="control-label" for="interests">Interest</label>
									<div class="controls">
									<input class="" id="interests" name="interests" value="<?php echo $row->interests;?>">
									</div>
								</div>


                      <div class = "pager">
                        <div class="btn-group">
                           <button type="submit" class="btn btn-info btn-small">Save changes</button>
                        </div>
                      </div>
                </div>
                <?php endforeach;?>
				<?php endif; ?>
				</form>
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
		<script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>>
		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

	

		<!--inline scripts related to this page-->
		<script type="text/javascript">
		function sameadd(form){
	          	if(form.sameashome.checked){
	                form.provincial_address.value = form.present_address.value;
	                form.provincial_city.value = form.present_city.value;
	                form.provincial_province.value = form.present_province.value;
	                /*form.Mailing_City.value = form.Billing_City.value;
	                form.Mailing_Zip.value = form.Billing_Zip.value;
	               
	                if(form.Billing_State.type == "select-one"){
	                    var bStateIdx = form.Billing_State.selectedIndex;
	                    form.mailing_province.options[bStateIdx].selected = true;
	                }
	                else{
	                    form.mailing_province.value = form.Billing_State.value;
	                }*/

	                

	                }
	                else{
	                     form.provincial_address.value = "";
	                     form.provincial_city.value = "" ;
	                     form.provincial_province.value = "";
	                     /*form.Mailing_City.value = "";
	                     if(form.mailing_province.type == "select-one"){
	                          form.mailing_province.options[0].selected = true;
	                     }
	                     else{
	                          form.mailing_province.value = "";
	                     }
	                     form.Mailing_City.value = "";
	                     form.Mailing_Zip.value = "";*/
	                }
	          }
	        function sameadd2(form){
	          if(form.sameashome2.checked){
	              form.mailing_address.value = form.present_address.value;
	              form.mailing_city.value = form.present_city.value;
	              form.mailing_province.value = form.present_province.value;
	              /*form.Mailing_City.value = form.Billing_City.value;
	              form.Mailing_Zip.value = form.Billing_Zip.value;
	                   if(form.Billing_State.type == "select-one"){
	                        var bStateIdx = form.Billing_State.selectedIndex;
	                        form.mailing_province.options[bStateIdx].selected = true;
	                   }
	                   else{
	                        form.mailing_province.value = form.Billing_State.value;
	                   }*/
	              }
	              else{
	                   form.mailing_address.value = "" ;
	                   form.mailing_city.value = "" ;
	                   form.mailing_province.value = "";
	                   /*form.Mailing_City.value = "";
	                   if(form.mailing_province.type == "select-one"){
	                        form.mailing_province.options[0].selected = true;
	                   }
	                   else{
	                        form.mailing_province.value = "";
	                   }
	                   form.Mailing_City.value = "";
	                   form.Mailing_Zip.value = "";*/
	              }
	            }
	        function sameaddfather(form){
	          if(form.sameasfather.checked){
	                add = form.present_address.value;
	                city = form.present_city.value;
	                prov = form.present_province.value;
	                fulladd = add.concat(", ",city,", ",prov);
	                form.father_address.value = fulladd;

	                }
	                else{
	                     form.father_address.value = "";
	                                         
	                }
	          }
	        function sameaddmother(form){
	          if(form.sameasmother.checked){
	                    form.mother_address.value = form.father_address.value;

	                }
	                else{
	                     form.mother_address.value = "";
	                                         
	                }
	          }
		
		$( document ).ready(function() {

				$.mask.definitions['~']='[+-]';
      			$('.input-mask-tel').mask('999-99-99');
      			$('.input-mask-phone').mask('(999) 999-9999');
      			$('.input-mask-alt').mask('(999) 999-9999');


				var tag_input = $('#skills');	
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#skill').autosize({append: "\n"});
				}

				var tag_input2 = $('#hobbies');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input2.tag(
					  {
						placeholder:tag_input2.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input2.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#hobbies').autosize({append: "\n"});
				}
				var tag_input3 = $('#interests');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input3.tag(
					  {
						placeholder:tag_input3.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input3.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#interest').autosize({append: "\n"});
				}
			


					
			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
		
          
				
			//SEND FORM VIA AJAX
			$( "form" ).on( "submit", function( event ) {
			  event.preventDefault();
			  var sData = $(this).serialize();
			  console.log(sData);
			   $.ajax({
	                url:"<?php echo base_url();?>hris/updatePersonalInfo",
	                type:'POST',
	                data:sData,
	               // dataType:"json",
	               
	                success:function(result){
	                //$("#success").show();
	                //$("#success").attr('class', 'alert alert-success');
	                //var output_string = "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button><p><strong><i class=\"icon-ok\"></i>Well done!</strong> You successfully added an applicant.</p><p><a class=\"btn btn-small btn-success\" href=\"<?php echo base_url();?>training\">Trainee List</a><button class=\"btn btn-small\">Or This One</button></p></div>";
	               // $("#success").html(output_string);
	                //$("#result_table").hide();
	                // location.reload();
	                $.gritter.add({
						title: 'Human Resource Information Update',
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Personal infromation has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					
	
					//$('#personal_info').load('<?php echo base_url();?>Hris/personal_info');
		            //$("#personal_info")[0].reset();
	                $("html, body").animate({ scrollTop: 0 }, "slow");

	                }

	            });
			});

			

		});

		</script>
	</body>
</html>
