<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Registration - AMI</title>

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
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />


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
              AMI - Registration
            </small>
          </a><!--/.brand-->

          
        </div><!--/.container-fluid-->
      </div><!--/.navbar-inner-->
    </div>

    <div class="container-fluid" id="main-container">
    
      <a id="menu-toggler" href="#">
        <span></span>
      </a>

      <div id="sidebar">

        <ul class="nav nav-list">
          
          <li class="">
            <a href="<?php echo base_url();?>Registration">
              <i class="icon-bar-chart"></i>
              <span>Registration</span>
            </a>
          </li>

          <li >
            <a href="<?php echo base_url();?>Registration/Site_map">
                  <i class="icon-map-marker"></i>
                 Site Map
                </a>
          </li>
            <li  class="">
              <a href="#" class="dropdown-toggle">
                <i class="icon-shield"></i>
                <span>Requirements</span>

                <b class="arrow icon-angle-down"></b>
              </a>

              <ul class="submenu">
                <li  >
                  <a href="<?php echo base_url();?>Registration/photo_requirement">
                    <i class="icon-user"></i>
                    Photograph
                  </a>
                </li>
                <li  >
                  <a href="<?php echo base_url();?>Registration/required_documents">
                    <i class="icon-user"></i>
                   Documents
                  </a>
                </li>
                <li class="">
                  <a href="<?php echo base_url();?>Registration/expenses">
                    <i class="icon-user"></i>
                   Expenses
                  </a>
               </li>
              </ul>
            </li>
            <li class="active open">
              <a href="#" class="dropdown-toggle">
                <i class="icon-shield"></i>
                <span>Screening</span>

                <b class="arrow icon-angle-down"></b>
              </a>

              <ul class="submenu">
                <li class="" >
                  <a href="<?php echo base_url();?>Registration/prelim_exam">
                    <i class="icon-user"></i>
                    Preliminary Examination
                  </a>
                </li>
                <li class="" >
                  <a href="<?php echo base_url();?>Registration/interview_screen">
                    <i class="icon-user"></i>
                   Interview Screening
                  </a>
                </li>
                <li class="active">
                  <a href="<?php echo base_url();?>Registration/medical_referral">
                    <i class="icon-user"></i>
                   Medical Referral 
                  </a>
                </li>
              </ul>
            </li>
          <!--<li>
            <a href="">
              <i class="icon-question-sign"></i>
              <span>Help</span>
            </a>
          </li>-->

          <li>
            <a href="">
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
        <!--
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
          </ul><!--.breadcrumb

          <div id="nav-search">
            <form class="form-search">
              <span class="input-icon">
                <input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
                <i class="icon-search" id="nav-search-icon"></i>
              </span>
            </form>
          </div><!--#nav-search
        </div>
        -->

        <div id="page-content" class="clearfix">
          

          <div class="row-fluid">
            <!--PAGE CONTENT STARTS HERE-->
              <div class="span12">

         
              <div class="box-content">
                <div class="row-fluid">
                 <div class="well">      
                  <h1>Medical Referral</h1>
                  <br>
                  <p>
                  After passing the interview, you will be referred to a hospital/clinic where you need to take your medical examination. The HR staff will hand you a Medical Slip for you to give to the medical nurse upon arriving the hospital/clinic. After all the tests, you will be asked to go home and will be notified through phone about the result.
                  </p>
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
    <script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>


    <!--ace scripts-->

    <script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/style.min.js"></script>

    <!--inline scripts related to this page-->
s
    <script type="text/javascript"> 

    

      $("#student").submit(function(){
               var dataString = $("#student").serialize();
               $.ajax({ 
                 url: "<?php echo base_url(); ?>ajax/user",
               async: false,
                 type: "POST",                
                 data: dataString, 
                 dataType: 'json',
       
                 success: function(output_string){
                     //alert(dataString);
                      $('#result_table').html(output_string);
                 }
       
               });
       
               return false;  //stop the actual form post !important!
      });
 
                     
    </script>
  </body>
</html>