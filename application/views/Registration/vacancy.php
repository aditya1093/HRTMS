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
          <a href="<?php echo base_url();?>" class="brand">
            <small>
              <img src="<?php echo base_url();?>assets/images/logo.png">
              AMI
            </small>
          </a><!--/.brand-->

          
        </div><!--/.container-fluid-->
      </div><!--/.navbar-inner-->
    </div>

    <div class="container-fluid" id="main-container">
    
      <a id="menu-toggler" href="#">
        <span></span>
      </a>

    <div id="main-content" class="clearfix">  
    </div><!--/#main-content-->

      <div id="page-content" class="clearfix">
        

        <div class="row-fluid">
          <!--PAGE CONTENT STARTS HERE-->
            <div class="span12">

       
            <div class="box-content">

            <?php if(isset($records)) : foreach($records as $row) : 
                  
                $client_name = $row->company;
          
                $emp_type = $row->emp_type;

                if($emp_type == 1){
                  $emp_type = "Contractual";
                }
                if($emp_type == 2){

                  $emp_type = "Regular";
                }
                if($emp_type == 3){

                  $emp_type = "Probation";
                }

                $emp_department = $row->emp_department;

                $emp_gender = $row->emp_gender;
                
                if($emp_gender == 1) {

                  $emp_gender  = "Male Only";
                }
                if($emp_gender == 2) {

                  $emp_gender  = "Female Only";
                }
                if($emp_gender == 3) {

                  $emp_gender  = "Male / Female";
                }
 
                $remarks = $row->remarks;
                $remarks = $remarks. ", $emp_gender";
                $remarks = preg_replace('/\.$/', '', $remarks); //Remove dot at end if exists
                $array = explode(',', $remarks); //split string into array seperated by ', '
                $remarks = "";

                foreach($array as $value) //loop over values
                {
                  $remarks .= $value ."<br>"; //print value
                }

                $emp_reqdocuments = $row->emp_reqdocuments;
                $emp_reqdocuments = preg_replace('/\.$/', '', $emp_reqdocuments); //Remove dot at end if exists
                $array = explode(',', $emp_reqdocuments); //split string into array seperated by ', '
                $emp_reqdocuments ="";

                foreach($array as $value) //loop over values
                {
                  $emp_reqdocuments .= $value ."<br>"; //print value
                }
                $i = 1;

                if ($i++ % 2) { 
        
              ?>
              <div class="row-fluid">
              <div class="span6">
               <div class="well">
                  <table class="table table-striped" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">
                    <colgroup>
                    <col span="1" style="width: 40%;">
                    <col span="1" style="width: 60%;">
                    </colgroup> 
                    <tr>
                      <td>Company</td>
                      <td><?php echo $client_name;?></td>
                    </tr> 
                    <tr>
                      <td>Type</td>
                      <td><?php echo $emp_type;?></td>
                    </tr>

                    <tr>
                      <td>Department</td>
                      <td><?php echo $emp_department;?></td>
                    </tr>
                    <tr>
                      <td>Qualifications</td>
                      <td><?php echo $remarks;?></td>
                    </tr>
                    <tr>
                      <td>Documents</td>
                      <td><?php echo $emp_reqdocuments;?></td>
                    </tr>

                    
                  </table>
               </div>
                
              </div>
              </div>   
            <?php 
            }endforeach;?>
            <?php endif; ?>
              

            </div> 
            </div>
          <!--PAGE CONTENT ENDS HERE-->
        </div><!--/row-->

      
      </div><!--/#page-content-->
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
  </body>
</html>