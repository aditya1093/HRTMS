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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/ace.min.css" />
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
		<!-- Dependencies -->
		<script src="http://yui.yahooapis.com/2.9.0/build/yahoo/yahoo-min.js"></script>
		 
		<!-- Source file -->
		<script src="http://yui.yahooapis.com/2.9.0/build/json/json-min.js"></script>
	
		
		
	</head>

	<body><input type="hidden" value="<?php echo $this->session->userdata('civil_status');?>" id="status">
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
									Marital Information
								</small>
							</h1>
						</div><!--/.page-header-->

					
				<div class="row-fluid">
						
		            
		        <?php if(isset($records)) : foreach($records as $row) : ?>
		                	
		             <div class="" id="profile3">
		                	
		                  	<div class="well" id="single_message">
		                        <p>This section is for 
		                          <b>Married employees only</b> . You're <?php echo $this->session->userdata('civil_status');?>, you can proceed to the last step.
		                          <a class="btn btn-small btn-info" href="<?php echo base_url();?>hris/educational_background" >Proceed</a> 
		                        </p>
		                    </div>
		                	<form id="marital_info">
		                	<div class="marital_div" id="marital">
		                    <h4>Marriage Information</h4>
		                      <label>Date of Marriage</label>
		                        <input type="date" name = "marriage_date"  class="input-medium" value="<?php echo $row->marriage_date;?>">
		                      <label>Place of Marriage</label>
		                        <input type="text" class="input-large" name = "marriage_place" value="<?php echo $row->marriage_place;?>">
		                    <label>
		                      <b>Spouse's Name</b> 
		                      </label>
		                      <label>First Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Middle Name &nbsp; &nbsp; &nbsp; &nbsp;
		                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Last Name</label>
		                        <input type="text" class="input-medium" name = "spouse_first_name" value="<?php echo $row->spouse_first_name;?>">
		                        <input type="text" class="input-medium" name = "spouse_middle_name" value="<?php echo $row->spouse_middle_name;?>">
		                        <input type="text" class="input-medium" name = "spouse_last_name" value="<?php echo $row->spouse_last_name;?>">
		                      <label>Date of Birth</label>
		                        <input type = "date"  class="input-medium" name = "spouse_birthdate" value="<?php echo $row->spouse_birthdate;?>">
		                      <label>Occupation</label>
		                        <input type="text" class="input-medium" name = "spouse_occupation" value="<?php echo $row->spouse_occupation;?>">
		                      <label>Contact No.</label>
		                      <input type="text" class="input-medium" name = "spouse_contact_no" value="<?php echo $row->spouse_contact_no;?>">
		                   
		                      <br>
		                      <br>
		                        <div class = "pager">
		                        <div class="btn-group">
		                           <button type="submit" class="btn btn-info btn-small">Save changes</button>
		                        </div>
		                      	</div>
		                      </form>
		                      <form id="children">
		                      
		                      <label>
		                      <b>Name(s) of Children</b>
		                      <i>(if none, proceed to the last step)</i> 
		                      </label>
		                      <div class="control-group-children">
		                        <label class="control-label">Children's Information</label>
		                        <div class="child">
		                         <hr>
		                          <label>Full Name</label>
		                            <input type="text" class="input-large" name = "child_full_name[]">
		                          <label>Date of Birth</label>
		                            <input  class="input-medium" type = "date" name = "child_DOB[]">
		                          <label>Name of School or Place of Work</label>
		                            <input type="text" class="input-large" name = "child_school_work[]">
		                          <br>
		                         </div>
		                      </div>
		                      <br>
		                      <a href="#" class="btn btn-info copy btn-mini" rel=".child">Add+</a>
		                      <span class="help-inline">Click Add+ to add more Children's Information.</span>
		                       <div class = "pager">
		                       <div class="btn-group">
		                       <button type="submit" class="btn btn-info btn-small">Save changes</button>
		                       </div>
		                  	   </div>
		                      </form>
		                   	<!--
		                      <br><br>
		                      <label>
		                      <b>Name(s) of Dependent</b>
		                      <i>(if none, proceed to the last step)</i> 
		                      </label>
			                    <div class="control-group-dependent">
			                        <label class="control-label">Dependent's Information</label>
			                        <div class="dependent">
			                        <hr>
			                            <label>Full Name</label>
			                              <input type="text" class="input-large" name = "dependent_full_name[]">
			                            <label>Date of Birth</label>
			                              <input type="date" name = "dependent_DOB">                            
			                            <label>Relationship to Employee</label>
			                              <input type="text" class="input-large" name = "dependent_relationship[]">
			                            <br>
			                        </div>
			                    </div>
		                      <br>
		                      <a href="#" class="btn btn-info copy btn-mini" rel=".dependent">Add+</a>
		                      <span class="help-inline">Click Add+ to add more Dependent's Information.</span>
		                      <br><br>
		                      <label>
		                        <b>Name(s) of Beneficiary</b>
		                        <i>(if none, proceed to the last step)</i> 
		                      </label>
		                      <div class="control-group-beneficiary">
		                        <label class="control-label">Beneficiaries' Information</label>
		                        <hr>
		                        <div class="beneficiary">
		                            <label>Full Name</label>
		                              <input type="text" class="input-large" name = "beneficiary_full_name[]">
		                            <label>Date of Birth</label>
		                              <input type = "date" name = "beneficiary_DOB">
		                            <label>Relationship to Employee</label>
		                              <input type="text" class="input-large" name = "beneficiary_relationship[]">
		                            <br>
		                        </div>
		                      </div>
		                      <br>
		                      <a href="#" class="btn btn-info copy btn-mini" rel=".beneficiary">Add+</a>
		                      <span class="help-inline">Click Add+ to add more Beneficiaries' Information.</span>
		                   
		                	</div>-->
		             	</div>
	             	<div class = "pager">
                    <div class="btn-group">
                       <button type="submit" class="btn btn-info btn-small">Save changes</button>
                    </div>
                  	</div>
		               
	                <?php endforeach;?>
					<?php endif; ?>
					</form>
					<div id="result"></div>
				</div>	
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

		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>

		

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>	

		<!--inline scripts related to this page-->

		<script src="<?php echo base_url();?>assets/js/relCopy.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){

				// /var stat = $this->session->flashdata('civil_status');
				var stat = $('#status').val();
				if(stat == 'Single'){
					//$('#single_message').show();
					alert('Show ' + stat );
				    $("#marital a").click(function (e) { 
				        $(this).fadeTo("fast", .5).removeAttr("href"); 
				        //e.preventDefault();
				    });
				    $('#marital').hide();
				    $('#profile3').find(':input:not(:disabled)').prop('disabled',true)
				}
				if(stat == 'Married' || stat == 'Separated' || stat == 'Widowed' || stat == 'Divorced' )
				{
					$('#single_message').hide();
					alert('Hide ' + stat );
					
				}

		
				var removeLink = '<a class="remove btn btn-danger btn-mini" src ="<?php echo base_url();?>assets/images/cross.png" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';
		        var removeLink2 = '<img class="remove" src ="<?php echo base_url();?>assets/images/cross.png" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">';
		      	$('a.copy').relCopy({append: removeLink});
		      	$('a.copy2').relCopy({append: removeLink2});


		      	
			  
			});

          	$( "#marital_info" ).on( "submit", function( event ) {
			  event.preventDefault();
			  var sData = $(this).serialize();
			  console.log(sData);
			  var clicked = this;
			  $.ajax({
	               url:"<?php echo base_url();?>hris/updateMaritalInfo",
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
	                 $(clicked).closest('tr').remove();
	                $.gritter.add({
						title: 'Human Resource Information Update',
						text: ' Marital Information has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					
		            //$('#personal_info').load('<?php echo base_url();?>Hris/personal_info');
		            //$("#personal_info")[0].reset();
	                $("html, body").animate({ scrollTop: 0 }, "slow");

	                }

	            });

			});

			$( "#children" ).on( "submit", function( event ) {
			 var data = {
					foo:  123,
					bar:  456,
					rows: [
					{
					column1 : 'hello',
					column2 : 'hola',
					column3 : 'bonjour',
					},
					{
					column1 : 'goodbye',
					column2 : 'hasta luego',
					column3 : 'au revoir',
					},
					],
					
					};
					data = YAHOO.lang.JSON.stringify(data);
					 
					$.ajax({
					type:           'post',
					cache:          false,
					url:            '<?php echo base_url();?>hris/updateMaritalInfo',
					data:           {myJson:  data},
						success:function(result){

							alert(result);
						}
					});


			});
 			$.fn.serializeObject = function()
			{
			    var o = {};
			    var a = this.serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    return o;
			};

		</script>
		
		
		
	</body>
</html>
