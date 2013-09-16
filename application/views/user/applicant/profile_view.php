<?php if($this->session->userdata('permission') != 'Applicant') { redirect(base_url() . '404');} ?>
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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/applicant/ace.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" media="screen,print">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-editable.css" media="screen,print">

		<script src="<?php echo base_url();?>assets/js/style-extra.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-barcode.js"></script>

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->
		<style type="text/css">
			#print{display: none;}
		</style>
		<!--inline styles if any-->
		<style type="text/css" media ="print">
			body,td,tr,a{ margin:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:20px;color:#333;background-color:#fff}
			form{ display: none;}
			h1{ color: red !important; }
			a{ color:#005580 !important;}
    		a[href]:after {content: none !important;}
    		.navbar, #sidebar, .nav,#no-print,#breadcrumbs,#space,.page-header,#main-content ,#btn-scroll-up{display:none;}
    		#print{	display: block;
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
							AMI - Applicant
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
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

		<div class="container-fluid" id="main-container">
		
			<a id="menu-toggler" href="#">
				<span></span>
			</a>
		
			<div id="sidebar">
				<!--<div id="sidebar-shortcuts">
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
						<a href="<?php echo base_url();?>Profile">
							<i class="icon-user"></i>
							<span>Profile</span>
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
						<li class="active">Control Panel </li>
					</ul><!--.breadcrumb-->

				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Profile <?php echo $this->session->userdata('user_id');?>
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div class="alert alert-info" data-step="1" data-intro="Let's take a quick guide with the basics!">
							Print this Registration Slip			
								
						</div>
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
											<!--
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
	
											-->							
										</ul>

										<div class="tab-content no-border padding-24">
											<div id="home" class="tab-pane in active ">
												<div class="row-fluid" id="no-print" >
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

																	$mid = $row->middle_name;
																	if($mid != null)	{$m = $row->middle_name[0].'.';} else { $m = $mid;}
																		

																		echo $row->first_name.' '.$m.' '.$row->last_name;?></span>
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
																	<span><?php echo $row->address.' '.$row->city;?></span>
																	<span><?php echo $row->province;?></span>
																	<span><?php echo $row->country;?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Age </div>

																<div class="profile-info-value">
																	<span><?php
																	$birthdate = $row->birth_date;												
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
																	<span><?php echo $row->birth_date?></span>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Height </div>

																<div class="profile-info-value">
																	<span><?php echo $row->height?> cm</span>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Civil Status </div>

																<div class="profile-info-value">
																	<span><?php echo $row->civil_status?></span>
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
																	<span><?php echo $row->phone;?></span>
																</div>
															</div>
														</div>

														<div class="hr hr-8 dotted"></div>

														<div class="profile-user-info">

															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-edit bigger-150 light-blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="<?php echo base_url();?>profile/edit_profile">Edit Profile</a>
																</div>

															</div>
															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-print bigger-150 light-blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="#" onclick="window.print()">Print</a>
																</div>
																
															</div>
														</div>
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20" id="space"></div>
												

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
			<div id="print">
				<div class="row-fluid" >
					<div class="span6 center">
						<a><img width="200px" src="<?php echo base_url();?>assets/images/logo.jpg" alt=""> AMI - Human Resource Training and Management System</a>	
					</div>
				</div>
				<div class="row-fluid" >
					
					<div class="" style="margin-top:0px;margin-bottom:0px">
				
						<span class="pull-right">
							<div class="bcTarget position relative" style="padding: 0px; overflow: auto; width: 253px;"></div>
								<?php
									
									echo '<script type="text/javascript">$(".bcTarget").barcode("';
									echo $row->register_id;
									echo '", "code39");</script>';

								?> 
							<div class="profile-picture "><img class="editable" alt="Alex&#39;s Avatar" id="avatar2" src="<?php echo base_url();?>assets/images/profile-pic.jpg"></div>
							
						</span>	<address class="pull-left" style="margin-left:50px">
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

					
					</div><!--/span-->

					
					<div class="space-20"></div><div class="space-20"></div><div class="space-20"></div><div class="space-20"></div><div class="space-20"></div>
					
					<div class="span9">

						<div class="profile-user-info" style="width:50%">
							<div class="profile-info-row">
								<div class="profile-info-name"> Name </div>

								<div class="profile-info-value">
									<span><?php 
									$mid = $row->middle_name;
									if($mid != null)	{$m = $row->middle_name.'.';} else { $m = $mid;}
										echo $row->first_name.' '.$m.' '.$row->last_name;?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Location </div>

								<div class="profile-info-value">
									<i class="icon-map-marker light-orange bigger-110"></i>
									<span><?php echo $row->address.' '.$row->city;?></span>
									<span><?php echo $row->province;?></span>
									<span><?php echo $row->country;?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Age </div>

								<div class="profile-info-value">
									<span><?php
									$birthdate = $row->birth_date;												
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
									<span><?php echo $row->birth_date?></span>
								</div>
							</div>
							<div class="profile-info-row">
							<div class="profile-info-name"> Height </div>

								<div class="profile-info-value">
									<span><?php echo $row->height?> cm</span>
								</div>
							</div>
							<div class="profile-info-row">
								<div class="profile-info-name"> Civil Status </div>

								<div class="profile-info-value">
									<span><?php echo $row->civil_status?></span>
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
									<span><?php echo $row->phone;?></span>
								</div>
							</div>
						</div>
						<div class="space-20"></div>
						
						<footer>
									<p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> 2013</p>
									<p class="pull-right">Powered by: <a href="">TDC</a></p>
						</footer>

					</div><!--/span-->
				
				</div><!--/row-fluid-->

						
			</div><!-- PRiNT -->
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
		<script src="<?php echo base_url();?>assets/js/style-editable.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-editable.min.js"></script>
	

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
  				


	//editables on first profile page
	$.fn.editable.defaults.mode = 'inline';
	$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
                                '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    

		// *** editable avatar *** //
	try {//ie8 throws some harmless exception, so let's catch it

		//it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
		//so let's have a fake appendChild for it!
		if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}

		var last_gritter
		$('#avatar').editable({
			type: 'image',
			name: 'avatar',
			value: null,
			image: {
				//specify ace file input plugin's options here
				btn_choose: 'Change Avatar',
				droppable: true,
				/**
				//this will override the default before_change that only accepts image files
				before_change: function(files, dropped) {
					return true;
				},
				*/

				//and a few extra ones here
				name: 'avatar',//put the field name here as well, will be used inside the custom plugin
				max_size: 110000,//~100Kb
				on_error : function(code) {//on_error function will be called when the selected file has a problem
					if(last_gritter) $.gritter.remove(last_gritter);
					if(code == 1) {//file format error
						last_gritter = $.gritter.add({
							title: 'File is not an image!',
							text: 'Please choose a jpg|gif|png image!',
							class_name: 'gritter-error gritter-center'
						});
					} else if(code == 2) {//file size rror
						last_gritter = $.gritter.add({
							title: 'File too big!',
							text: 'Image size should not exceed 100Kb!',
							class_name: 'gritter-error gritter-center'
						});
					}
					else {//other error
					}
				},
				on_success : function() {
					$.gritter.removeAll();
				}
			},
		    url: function(params) {
				// ***UPDATE AVATAR HERE*** //
				//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


				var deferred = new $.Deferred

				//if value is empty, means no valid files were selected
				//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
				//so we return just here to prevent problems
				var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
				if(!value || value.length == 0) {
					deferred.resolve();
					return deferred.promise();
				}


				//dummy upload
				setTimeout(function(){
					if("FileReader" in window) {
						//for browsers that have a thumbnail of selected image
						var thumb = $('#avatar').next().find('img').data('thumb');
						if(thumb) $('#avatar').get(0).src = thumb;
					}
					
					deferred.resolve({'status':'OK'});

					if(last_gritter) $.gritter.remove(last_gritter);
					last_gritter = $.gritter.add({
						title: 'Avatar Updated!',
						text: 'Uploading to server can be easily implemented. A working example is included with the template.',
						class_name: 'gritter-info gritter-center'
					});
					
				 } , parseInt(Math.random() * 800 + 800))

				return deferred.promise();
			},
			
			success: function(response, newValue) {
			}
		})
	}catch(e) {}

		$('#avatar2').on('click', function(){
			var modal = 
			'<div class="modal hide fade">\
				<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal">&times;</button>\
					<h4 class="blue">Change Avatar</h4>\
				</div>\
				\
				<form class="no-margin">\
				<div class="modal-body">\
					<div class="space-4"></div>\
					<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
				</div>\
				\
				<div class="modal-footer center">\
					<button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
					<button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
				</div>\
				</form>\
			</div>';
			
			
			var modal = $(modal);
			modal.modal("show").on("hidden", function(){
				modal.remove();
			});
	
			var working = false;
	
			var form = modal.find('form:eq(0)');
			var file = form.find('input[type=file]').eq(0);
			file.ace_file_input({
				style:'well',
				btn_choose:'Click to choose new avatar',
				btn_change:null,
				no_icon:'icon-picture',
				thumbnail:'small',
				before_remove: function() {
					//don't remove/reset files while being uploaded
					return !working;
				},
				before_change: function(files, dropped) {
					var file = files[0];
					if(typeof file === "string") {
						//file is just a file name here (in browsers that don't support FileReader API)
						if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
					}
					else {//file is a File object
						var type = $.trim(file.type);
						if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
								|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
							) return false;
	
						if( file.size > 110000 ) {//~100Kb
							return false;
						}
					}
	
					return true;
				}
			});
	
			form.on('submit', function(){
				if(!file.data('ace_input_files')) return false;
				
				file.ace_file_input('disable');
				form.find('button').attr('disabled', 'disabled');
				form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");
				
				var deferred = new $.Deferred;
				working = true;
				deferred.done(function() {
					form.find('button').removeAttr('disabled');
					form.find('input[type=file]').ace_file_input('enable');
					form.find('.modal-body > :last-child').remove();
					
					modal.modal("hide");
	
					var thumb = file.next().find('img').data('thumb');
					if(thumb) $('#avatar2').get(0).src = thumb;
	
					working = false;
				});
				
				
				setTimeout(function(){
					deferred.resolve();
				} , parseInt(Math.random() * 800 + 800));
	
				return false;
			});
					
		});


		///////////////////////////////////////////////////
		//show the user info on right or left depending on its position
		$('#user-profile-2 .memberdiv').on('mouseenter', function(){
			var $this = $(this);
			var $parent = $this.closest('.tab-pane');
	
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $this.offset();
			var w2 = $this.width();
	
			var place = 'left';
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
			
			$this.find('.popover').removeClass('right left').addClass(place);
		}).on('click', function() {
			return false;
		});
	
    </script>
	</body>
</html>
