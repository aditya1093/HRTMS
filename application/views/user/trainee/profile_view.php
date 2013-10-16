<?php if($this->session->userdata('permission') != 'Trainee') { redirect(base_url() . '404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Profile - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
		<script src="<?php echo base_url();?>assets/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-barcode.js"></script>

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
							<img src="<?php echo base_url();?>assets/images/logo.png">
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
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i> Inbox
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
						<a href="<?php echo base_url();?>profile">
							<i class="icon-user"></i>
							<span>Profile</span>
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
							<a href="<?php echo base_url();?>dashboard">Home</a>

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
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Profile
							</small>
						</h1>
					</div><!--/.page-header-->

				
					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<?php if(isset($records)) : foreach($records as $row) : ?>
						<div id="user-profile-2" class="user-profile row-fluid">
									<div class="tabbable">
										<ul class="nav nav-tabs padding-18">
											<li class="active">
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#home">
													<i class="green icon-user bigger-120"></i>
													Profile
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#feed">
													<i class="orange icon-rss bigger-120"></i>
													Activity Feed
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#friends">
													<i class="blue icon-group bigger-120"></i>
													Friends
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#pictures">
													<i class="pink icon-picture bigger-120"></i>
													Pictures
												</a>
											</li>
										</ul>

										<div class="tab-content no-border padding-24">
											<div id="home" class="tab-pane in active">
												<div class="row-fluid">
													<div class="span3 center">
														<span class="profile-picture">
															<img class="editable" alt="Alex&#39;s Avatar" id="avatar2" src="<?php echo base_url();?>assets/images/profile-pic.jpg">
														</span>
														
														<div class="width-80 label label-info label-large arrowed-in arrowed-in-right">
															<div class="inline position-relative">
																<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-circle light-green middle"></i>
																	&nbsp;
																	<span class="white middle bigger-120"><?php 

																		$m = $row->middle_name[0];

																		echo $row->first_name.' '.$m.'. '.$row->last_name;?></span>
																</a>
															</div>
														</div>
														<div class="space space-4"></div>
														
															<div class="bcTarget"></div>
																<?php
																	
																	echo '<script type="text/javascript">$(".bcTarget").barcode("';
																	echo $row->register_id;
																	echo '", "code39");</script>';

																?> 
														

													</div><!--/span-->

													<div class="span9">

														<div class="profile-user-info">
															<div class="profile-info-row">
																<div class="profile-info-name"> Username </div>

																<div class="profile-info-value">
																	<span><?php echo $row->username;?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Location </div>

																<div class="profile-info-value">
																	<i class="icon-map-marker light-orange bigger-110"></i>
																	<span><?php echo $row->present_address.' '.$row->present_city;?></span>
																	<span><?php echo $row->present_province;?></span>
																	<span>PH</span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Age </div>

																<div class="profile-info-value">
																	<span><?php
																	$birthdate = $row->birthdate;												
																    list($y,$m,$d) = explode('-', $birthdate);
    
																    if (($m = (date('m') - $m)) < 0) {
																        $y++;
																    } elseif ($m == 0 && date('d') - $d < 0) {
																        $y++;
																    }
																    
																    echo date('Y') - $y;
																    ?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Birthday </div>

																<div class="profile-info-value">
																	<span><?php echo $row->birthdate?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Email </div>

																<div class="profile-info-value">
																	<span><?php echo $row->email;?></span>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Phone </div>

																<div class="profile-info-value">
																	<span><?php echo $row->mobile_no;?></span>
																</div>
															</div>
														</div>

														<div class="hr hr-8 dotted"></div>

														<div class="profile-user-info">
															<div class="profile-info-row">
																<div class="profile-info-name"> Website </div>

																<div class="profile-info-value">
																	<a href="" target="_blank">www.<?php echo $row->username;?>.com</a>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-facebook-sign bigger-150 blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="">Find me on Facebook</a>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-twitter-sign bigger-150 light-blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="">Follow me on Twitter</a>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-edit bigger-150 light-blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="<?php echo base_url();?>profile/edit_profile">Edit Profile</a>
																</div>
															</div>
														</div>
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20"></div>

												<div class="row-fluid">
													<div class="span12">
														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h4 class="smaller">
																	<i class="icon-check bigger-110"></i>
																	Little About Me
																</h4>
															</div>

															<div class="widget-body">
																<div class="widget-main">
																	<p>
																		My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
																	</p>
																	<p>
																		Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
																	</p>
																	<p>
																		The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
																	</p>
																	<p>
																		Thanks for visiting my profile.
																	</p>
																</div>
															</div>
														</div>
													</div>

												
												</div>
											</div><!--#home-->

											<div id="feed" class="tab-pane">
												<div class="profile-feed row-fluid">
													<div class="span6">
														<div class="profile-activity clearfix">
															<div>
																<img class="pull-left" alt="Alex Doe&#39;s avatar" src="./User Profile Page - Ace Admin_files/avatar5.png">
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>
																changed his profile photo.
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">Take a look</a>

																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	an hour ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<img class="pull-left" alt="Susan Smith&#39;s avatar" src="./User Profile Page - Ace Admin_files/avatar1.png">
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Susan Smith </a>

																is now friends with Alex Doe.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	2 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<i class="pull-left thumbicon icon-ok btn-success no-hover"></i>
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>
																joined
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">Country Music</a>

																group.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	5 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<i class="pull-left thumbicon icon-picture btn-info no-hover"></i>
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>
																uploaded a new photo.
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">Take a look</a>

																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	5 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<img class="pull-left" alt="David Palms&#39;s avatar" src="./User Profile Page - Ace Admin_files/avatar4.png">
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> David Palms </a>

																left a comment on Alex's wall.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	8 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>
													</div><!--/span-->

													<div class="span6">
														<div class="profile-activity clearfix">
															<div>
																<i class="pull-left thumbicon icon-edit btn-pink no-hover"></i>
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>
																published a new blog post.
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">Read now</a>

																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	11 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<img class="pull-left" alt="Alex Doe&#39;s avatar" src="./User Profile Page - Ace Admin_files/avatar5.png">
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>

																upgraded his skills.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	12 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>

																logged in.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	12 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<i class="pull-left thumbicon icon-off btn-inverse no-hover"></i>
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>

																logged out.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	16 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>

														<div class="profile-activity clearfix">
															<div>
																<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
																<a class="user" href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm"> Alex Doe </a>

																logged in.
																<div class="time">
																	<i class="icon-time bigger-110"></i>
																	16 hours ago
																</div>
															</div>

															<div class="tools action-buttons">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="blue">
																	<i class="icon-pencil bigger-125"></i>
																</a>

																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="red">
																	<i class="icon-remove bigger-125"></i>
																</a>
															</div>
														</div>
													</div><!--/span-->
												</div><!--/row-->

												<div class="space-12"></div>

												<div class="center">
													<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" class="btn btn-small btn-primary">
														<i class="icon-rss bigger-150 middle"></i>

														View more activities
														<i class="icon-on-right icon-arrow-right"></i>
													</a>
												</div>
											</div><!--/#feed-->

											<div id="friends" class="tab-pane">
												<div class="profile-users clearfix">
													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar4.png" alt="Bob Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-online"></span>
																		Bob Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">Content Editor</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 orange"></i>
																		<span class="green"> 20 mins ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar1.png" alt="Rose Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-offline"></span>
																		Rose Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">Graphic Designer</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 grey"></i>
																		<span class="grey"> 30 min ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar.png" alt="Jim Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-busy"></span>
																		Jim Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">SEO &amp; Advertising</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 red"></i>
																		<span class="grey"> 1 hour ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar5.png" alt="Alex Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-idle"></span>
																		Alex Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">Marketing</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 orange"></i>
																		<span class=""> 40 minutes idle </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar2.png" alt="Phil Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-online"></span>
																		Phil Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">Public Relations</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 orange"></i>
																		<span class="green"> 2 hours ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar3.png" alt="Susan Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-online"></span>
																		Susan Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">HR Management</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 orange"></i>
																		<span class="green"> 20 mins ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar1.png" alt="Jennifer Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-offline"></span>
																		Jennifer Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">Graphic Designer</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 grey"></i>
																		<span class="grey"> 2 hours ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="itemdiv memberdiv">
														<div class="inline position-relative">
															<div class="user">
																<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																	<img src="./User Profile Page - Ace Admin_files/avatar3.png" alt="Alexa Doe&#39;s avatar">
																</a>
															</div>

															<div class="body">
																<div class="name">
																	<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																		<span class="user-status status-offline"></span>
																		Alexa Doe
																	</a>
																</div>
															</div>

															<div class="popover">
																<div class="arrow"></div>

																<div class="popover-content">
																	<div class="bolder">Accounting</div>

																	<div class="time">
																		<i class="icon-time middle bigger-120 grey"></i>
																		<span class="grey"> 4 hours ago </span>
																	</div>

																	<div class="hr dotted hr-8"></div>

																	<div class="tools action-buttons">
																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-facebook-sign blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-twitter-sign light-blue bigger-150"></i>
																		</a>

																		<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																			<i class="icon-google-plus-sign red bigger-150"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="hr hr10 hr-double"></div>

												<ul class="pager pull-right">
													<li class="previous disabled">
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">← Prev</a>
													</li>

													<li class="next">
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">Next →</a>
													</li>
												</ul>
											</div><!--/#friends-->

											<div id="pictures" class="tab-pane">
												<ul class="ace-thumbnails">
													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-1.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-2.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-3.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-4.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-5.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-6.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-1.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>

													<li>
														<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm" data-rel="colorbox">
															<img alt="150x150" src="./User Profile Page - Ace Admin_files/thumb-2.jpg">
															<div class="text">
																<div class="inner">Sample Caption on Hover</div>
															</div>
														</a>

														<div class="tools tools-bottom">
															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-link"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-paper-clip"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-pencil"></i>
															</a>

															<a href="./User Profile Page - Ace Admin_files/User Profile Page - Ace Admin.htm">
																<i class="icon-remove red"></i>
															</a>
														</div>
													</li>
												</ul>
											</div><!--/#pictures-->
										</div>
									</div>
						</div>
						<?php endforeach;?>
						<?php endif; ?>
						
							
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
		<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>


		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
    
    	function generateBarcode(){
        var value = $("#barcodeValue").val();
        var btype = $("input[name=btype]:checked").val();
        var renderer = $("input[name=renderer]:checked").val();
        
		var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
		
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
          barWidth: $("#barWidth").val(),
          barHeight: $("#barHeight").val(),
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>
	</body>
</html>
