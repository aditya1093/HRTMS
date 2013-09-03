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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/applicant/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
		<script src="<?php echo base_url();?>assets/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-barcode.js"></script>

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
			.mandatory_star{
	  	color:red;

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
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Control Panel</li>
					</ul><!--.breadcrumb-->

					
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Edit Profile
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<?php if(isset($records)) : foreach($records as $row) : ?>
						<div id="user-profile-2" class="user-profile row-fluid">
									<div class="tabbable">
								
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

																		$mid = $row->middle_name;
																	if($mid != null)	{$m = $row->middle_name[0].'.';} else { $m = $mid;}
																		

																		echo $row->first_name.' '.$m.' '.$row->last_name;?></span>
																</a>
															</div>
														</div>

														<div class="space space-4"></div>

													</div><!--/span-->

													<div class="span9">
													<form class="form-horizontal" method="POST" action="<?php echo base_url();?>profile/edit_profile">
														<div class="alert alert-info">
										                  <p>Items marked with an asterisk (<span class="mandatory_star">*</span>) are required.</p>  
										              	</div>
										               
											              <div id="infoMessage" align="center"><?php
											              $success = $this->session->flashdata('success');

											              if ($message == null){

											              }
											              else{
											              echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
											              echo '<div class="alert alert-error">';
											              echo $message;
											              echo '</div>';
											              }

											              if($success != null){
												              echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
												              echo '<div class="alert alert-success">';
												              echo $success;
												              echo '</div>';

											              }
											              else
											              {

											              }
											              

											              ?>

											              
											              </div>

														<div class="profile-user-info">
													
															<div class="profile-info-row">
																<div class="profile-info-name">Full Name </div>
																
																<div class="profile-info-value">
																	
																	<div class="control-group">
																		<label class="control-label" for="first_name" >First Name</label>

																		<div class="controls">
																			<input type="text" id="first_name" name="first_name" value="<?php echo $row->first_name;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="last_name" >Last Name</label>

																		<div class="controls">
																			<input type="text" id="last_name" name="last_name" value="<?php echo $row->last_name;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="middle_name">Middle Name</label>

																		<div class="controls">
																			<input type="text" id="middle_name"  name="middle_name" value="<?php echo $row->middle_name;?>">
																		</div>
																	</div>

																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Location </div>
																<div class="profile-info-value">
																	
																	<div class="control-group">
																		<label class="control-label" for="address" >Address</label>

																		<div class="controls">
																			<input type="text" id="address" name="address" value="<?php echo $row->address;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="city" >City</label>

																		<div class="controls">
																			<input type="text" id="city" name="city" value="<?php echo $row->city;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="province" >Province</label>

																		<div class="controls">
																			<input type="text" id="province" name="province" value="<?php echo $row->province;?>">
																		</div>
																	</div>

																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Birthday </div>

																<div class="profile-info-value">
																		<div class = "controls" nowrap="nowrap"><?php
														                        echo $birth_date_day;
														                        echo $birth_date_month;
														                        echo $birth_date_year;
														                        ?>
														          		</div>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Height </div>

																<div class="profile-info-value">
																	<input type="text" name="height" class="controls span2" value="<?php echo $row->height;?>">
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Civil Status </div>

																<div class="profile-info-value">
																	<div class="control-group">
																		<label class="control-label" for="" ></label>

																		<div class="controls">
																			 <select id="" name = "civil_status">
													                          <option disabled = "disabled" selected = "selected" value="">Select Status..</option>
													                          <option value = "Single" <?php if($row->civil_status=='Single') echo 'selected';?>>Single</option>
													                          <option value = "Married" <?php if($row->civil_status=='Married') echo 'selected';?>>Married</option>
													                          <option value = "Separated" <?php if($row->civil_status=='Separated') echo 'selected';?>>Separated</option>
													                          <option value = "Widowed" <?php if($row->civil_status=='Widowed') echo 'selected';?>>Widowed</option>
													                          <option value = "Divorced" <?php if($row->civil_status=='Divorced') echo 'selected';?>>Divorced</option>
													                        </select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Phone </div>

																<div class="profile-info-value">
																	<input type="text" name="phone" class="controls" value="<?php echo $row->phone;?>">
																</div>
															</div>
															<div class="form-actions">
															<button class="btn btn-info btn-small" type="submit">
																<i class="icon-ok bigger-110"></i>
																Submit
															</button>

															&nbsp; &nbsp; &nbsp;
															</div>
													</form>
													<form method="POST" action="<?php echo base_url();?>profile/">
															<div class="profile-info-row">
																<div class="profile-info-name"> Account </div>

																<div class="profile-info-value">
																	<div class="control-group">
																		<label class="control-label" for="username" name="username">Username</label>

																		<div class="controls">
																			<input type="text" id="username" value="<?php echo $row->username;?>">
																		</div>
																	</div>
																	<div class="control-group">
																		<label class="control-label" for="email" name="email">Email</label>

																		<div class="controls">
																			<input type="text" id="email" value="<?php echo $row->email;?>">
																		</div>
																	</div>
																</div>
																
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Password </div>

																<div class="profile-info-value">
																	<div class="control-group">
																		<label class="control-label" for="oldPass" name="oldPass">Old Password</label>

																		<div class="controls">
																			<input type="password" id="oldPass" value="<?php echo $row->password;?>">
																		</div>
																	</div>
																	<div class="control-group">
																		<label class="control-label" for="newPass" name="newPass">New Password</label>

																		<div class="controls">
																			<input type="text" id="newPass">
																		</div>
																	</div>
																</div>
																
															</div>


														
														
														
														<div class="form-actions">
															<button class="btn btn-info btn-small" type="submit">
																<i class="icon-ok bigger-110"></i>
																Submit
															</button>

															&nbsp; &nbsp; &nbsp;
														</div>
													</form>
														<div class="hr hr-8 dotted"></div>

												
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20"></div>

											</div><!--#home-->

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
