
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>HRIS - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="$_SERVER[‘SERVER_NAME’]assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="$_SERVER[‘SERVER_NAME’]assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/font.css" />
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/style.min.css" />
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/jquery.gritter.css">
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/training/ace.min.css" media="PRINT,SCREEN"/>
	
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/training/custom.css" />

		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="$_SERVER[‘SERVER_NAME’]assets/css/chosen.css" />
		<!--<script src="<?php echo base_url();?>assets/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-barcode.js"></script>
		/*Barcode
		-->

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		
	</head>

	<body>
		
		<div class="main-container container-fluid">
			
			
			<div class="error-container">
						<div class="well">
								<?php 
								$heading;
								list($number, $page, $not,$found ) = explode(" ", $heading);
							

								?>
							<h1 class="grey lighter smaller">
								<span class="blue bigger-125">
									<i class="icon-sitemap"></i>
									<?php echo $number;?>
								</span>
									<?php echo $page.' '.$not.' '.$found;?>
							</h1>

							<hr />
							<h3 class="lighter smaller">We looked everywhere but we couldn't find it!</h3>
						
							<?php echo $message; ?>
							<div>
								<form class="form-search" />
									<span class="input-icon">
										<i class="icon-search"></i>

										<input type="text" class="input-medium search-query" placeholder="Give it a search..." />
									</span>
									<button class="btn btn-small" onclick="return false;">Go!</button>
								</form>

								<div class="space"></div>
								<h4 class="smaller">Try one of the following:</h4>

								<ul class="unstyled spaced inline bigger-110">
									<li>
										<i class="icon-hand-right blue"></i>
										Re-check the url for typos
									</li>

									<li>
										<i class="icon-hand-right blue"></i>
										Read the faq
									</li>

									<li>
										<i class="icon-hand-right blue"></i>
										Tell us about it
									</li>
								</ul>
							</div>

							<hr />
							<div class="space"></div>

							<div class="row-fluid">
								<div class="center">
									<a href="#" class="btn btn-grey">
										<i class="icon-arrow-left"></i>
										Go Back
									</a>

									<a href="#" class="btn btn-primary">
										<i class="icon-dashboard"></i>
										Dashboard
									</a>
								</div>
							</div>
						</div>
					</div>
		</div><!--/.main-container-->


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
		<!--inline scripts related to this page-->
		
	</body>
</html>
