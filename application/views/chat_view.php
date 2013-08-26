<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Messages - AMI</title>
<meta name="description" content="overview &amp; stats"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--basic styles-->
<link href="<?php echo base_url();?>
assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>
assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/font-awesome.min.css" /> 
<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
<!--page specific plugin styles-->
<!--fonts-->
<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->
<!--ace styles-->
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/font.css" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php if($this->session->userdata("permission") == "Client") { echo 'client'; } else if($this->session->userdata("permission") == "Trainer") { echo 'training'; } else if($this->session->userdata("permission") == "HR") { echo 'hr'; } else if($this->session->userdata("permission") == "Trainee") { echo 'manpower'; } else if($this->session->userdata("permission") == "Administrator") { echo 'admin'; } ?>/custom.css" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style-skins.min.css" /> 
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
			AMI - Training Center Administration </small>
			</a>
			<!--/.brand-->
			<ul class="nav ace-nav pull-right">
			
			
				<li class="green">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
				<span class="badge badge-success unread"></span>
				</a>
				<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
					<li class="nav-header">
					<i class="icon-envelope"></i>
					<span class="unread"></span> Messages </li>
					<!--<li>
					<a href="#">
					<img src="<?php echo base_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" /> <span class="msg-body">
					<span class="msg-title">
					<span class="blue">Alex:</span>
					Ciao sociis natoque penatibus et auctor ... </span>
					<span class="msg-time">
					<i class="icon-time"></i>
					<span>a moment ago</span>
					</span>
					</span>
					</a>
					</li>-->
					
					<li>
					<a href="messenger">
					See all messages <i class="icon-arrow-right"></i>
					</a>
					</li>
				</ul>
				</li>
				<li class="light-blue user-profile">
				<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
				<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="User's Photo" /> <span id="user_info">
				<small>Welcome,</small>
				<?php echo $this->session->userdata('username');?></span>
				<i class="icon-caret-down"></i>
				</a>
				<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
					<li>
					<a href="#">
					<i class="icon-cog"></i>
					Settings </a>
					</li>
					<li>
					<a href="#">
					<i class="icon-user"></i>
					Profile </a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="<?php echo base_url();?>index.php/logout"> <i class="icon-off"></i>
					Logout </a>
					</li>
				</ul>
				</li>
			</ul>
			<!--/.ace-nav-->
		</div>
		<!--/.container-fluid-->
	</div>
	<!--/.navbar-inner-->
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
		</div>
		<!--#sidebar-shortcuts-->
		<ul class="nav nav-list">
			<li>
			<a href="dashboard">
			<i class="icon-bar-chart"></i>
			<span>Control Panel</span>
			</a>
			</li>
			
		</ul>
		<!--/.nav-list-->
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
				<li class="active">Messages</li>
			</ul>
			<!--.breadcrumb-->
			<div id="nav-search">
				<form class="form-search">
					<span class="input-icon">
					<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off"/>
					<i class="icon-search" id="nav-search-icon"></i>
					</span>
				</form>
			</div>
			<!--#nav-search-->
		</div>
		<div id="page-content" class="clearfix">
			
			<!--/.page-header-->
			<div class="row-fluid">
				<!--PAGE CONTENT STARTS HERE-->
				<div class="span8">
					<div class="widget-box" style="height: 520px">
						<div class="widget-header widget-header-small header-color-blue">
							<h4 class="smaller">
							<i class="icon-comment blue"></i>
							Conversation <span id="thewho"></span> <small>AMI Messenger</small>
							</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								
								<!-- LOAD MESSAGES HERE -->
								<div class="slimScrollDiv">
									<div id="chat_div" class="dialogs">
										<!--<?php if(isset($records)) : foreach($records as $row) : ?>
								
										
										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="" src="assets/avatars/user.jpg">
											</div>
											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="orange"><?php echo $row->time_sent?></span>
												</div>
												<div class="name">
													<a href="#"><?php echo $row->full_name?></a>
													<span class="label label-info arrowed arrowed-in-right">
														<?php echo $row->permission?>
													</span>
												</div>
												<div class="text">
													<?php echo $row->message?>
												</div>
												
											</div>
										</div>
										<?php endforeach;?>
										<?php endif; ?>-->
									</div>

									<div class="slimScrollBar ui-draggable">
									</div>
									<div class="slimScrollRail">
									</div>
									
								</div>

								<!-- MESSAGES ENDS HERE -->
								
									<div class="form-actions input-append">
										<input placeholder="Type your message here..." type="text" style="width:85%" name="message" id="message">

										<button class="btn btn-small btn-info no-radius" id="send_button">
										<i class="icon-share-alt"></i>
										<span class="hidden-phone">Send</span>
										</button>
									</div>
								
							</div>
							<!--/widget-main-->
						</div>
						<!--/widget-body-->
					</div>
				</div>
				<div class="span4">
					<div class="widget-box" style="height: 520px">
						<div class="widget-header widget-header-small">
							<h4 class="smaller">
							AMI Staffs <small></small>
							</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main">
								<div class="slimScrollDiv">
									<table class="table">

										<?php if(isset($user_records)) : foreach($user_records as $row) : ?>
										<?php if ($row->id == $this->session->userdata('id')) continue;?>
										<tr class="chat_user">
											<td>
												<a style="cursor: pointer;" class="userchat" id="<?php echo $row->id?>">
													<img class="nav-user-photo" src="assets/avatars/user.jpg" style="width: 30px; margin-right: 10px;"><?php echo $row->first_name?> <?php echo $row->last_name?>
													<i class="icon-circle pull-right" style="color:#387038;"></i>
												</a>
											</td>
										</tr>
										<?php endforeach;?>
										<?php endif;?>
										
									</table>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!--PAGE CONTENT ENDS HERE-->
			</div>
			<!--/row-->
		</div>
		<!--/#page-content-->
	</div>
	<!--/#main-content-->
</div>
<!--/.fluid-container#main-container-->
<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
<!--basic scripts-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
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
<!--inline scripts related to this page-->
<script type="text/javascript">
	
	var thewho="";

	var getObjectSize = function(obj) {
   		var len = 0, key;
	    for (key in obj) {
	        if (obj.hasOwnProperty(key)) len++;
	    }
	    return len;
	};

	$(document).ready(function() {

		var id = 0;

		/* Initialize Scroll */
	    $('.slimScrollDiv').slimScroll({
	        height: '400px',
	        size: '10px',
	        alwaysVisible: true,
	        start: 'bottom'
	    });

	    /* Update Per Second */
	    var interval = setInterval(function() { 

	    	load_messages();

		}, 500);

	    notify();

	});

	/* Load notification */
	var notify = function() {

		var form_data = {
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/notify",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			var obj = jQuery.parseJSON(response);

			console.log(obj.unread);
			
			$(".unread").text(obj.unread);
			
	    });
	};

	/* Load specific inbox messages */
	var load_messages = function() {

		var form_data = {
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/load_messages",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			$(".dialogs").html("");

			var obj = jQuery.parseJSON(response);

			var str = "";

			for (var i = 0; i < getObjectSize(obj); i++) {
				
				str += '<div class="itemdiv dialogdiv"><div class="user"><img alt="" src="assets/avatars/user.jpg"></div>';
				str += '<div class="body"><div class="time"><i class="icon-time"></i><span class="orange"> '+obj[i].time_sent+'</span></div>';
				str += '<div class="name"><a class="userchat" id="'+obj[i].id+'" href="#">'+obj[i].full_name+'</a> <span class="label label-info arrowed arrowed-in-right">'+obj[i].permission+'</span></div>';
				str += '<div class="text">'+obj[i].message+'</div></div></div>';
				$("#thewho").text("("+thewho+")");

			};

			

			//var str = str.replace(':)','<img src="<?php echo base_url();?>assets/images/emoticon/smile.jpg">');

			$(".dialogs").html(str);

			$('#chat_div').slimScroll({ scrollBy: $(".dialogs").height()});

	    });
	};
	
	/* Chat Send */
	var send_message = function() {

		if($.trim($("#message").val()) == "") {

			return;
		}

		var form_data = {
        	sender_id: id,
        	receiver_id: '<?php echo $this->session->userdata("id");?>',
        	message: $("#message").val(),
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/send_message",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			$("#message").val("");	
			$(".dialogs").html("");

			$('#chat_div').slimScroll({ scrollTo: $(".dialogs").height()});

	    });
	};

	/* Trigger Send */
	$("#send_button").click(function() {

		send_message();
	});

	$('#message').keyup(function(e) {

		if(e.keyCode == 13) {

		  send_message();
		}
	});

	$(".userchat").click(function() {

		//$(".userchat").css("Font-Weight","Normal");
		$(this).css("Font-Weight","Bold");

		//alert($(this).attr('id'));

		id = $(this).attr('id');
		thewho = $(this).text();

		var form_data = {
        	sender_id: id,
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/switch_chat",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			//alert(response);

	    });
	});

</script>
</body>
</html>