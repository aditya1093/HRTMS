
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HRTMS Login</title>

    <!-- Le styles -->
    <link href="<?php echo base_url();?>assets/_login/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/_login/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/_login/css/typica-login.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/messenger.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/messenger-theme-air.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le favicon -->
    <link rel="shortcut icon" href="favicon.ico">

  </head>

  <body>
 
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img width="120px" src="<?php echo base_url();?>assets/images/logo.jpg" alt=""> AMI - Human Resource Training and Management System</a>
        </div>
      </div>
    </div>

    <div class="container">

        <div id="login-wraper">
            <form class="form login-form" action='<?php echo base_url();?>index.php/authenticate' method="post">
                <legend>Sign in to <span class="blue">HRTMS</span></legend>
            
                <div class="body">
                    <label>Username 
                    <input autofocus name="username" id="username" type="text"></label>
                    
                    <label>Password 
                    <input name="password" id="password" type="password">
                    </label>
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Remember me
                    </label>
                    <br>
                    
                </div>
                
                <div class="footer">
                    
                    
                    <a class="btn btn-info">Forgot Password</a>
                    <button type="submit" class="btn btn-success">Login</button>

                </div>
            
            </form>
        </div>

    </div>

    <footer class="white navbar-fixed-bottom">
      <!--Don't have an account yet? <a href="register.html" class="btn btn-black">Register</a>-->
      Copyright <a href="">Alliance Mansols Inc.</a> &copy; 2013
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/_login/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/_login/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/_login/js/backstretch.min.js"></script>
    <script src="<?php echo base_url();?>assets/_login/js/typica-login.js"></script>
    <script src="<?php echo base_url();?>assets/js/messenger.min.js"></script>
    

    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $.backstretch([
              "<?php echo base_url();?>assets/images/bg1.jpg", 
              "<?php echo base_url();?>assets/images/bg2.jpg",
              "<?php echo base_url();?>assets/images/bg1.jpg", 
              "<?php echo base_url();?>assets/images/bg3.jpg"
            ], {duration: 3000, fade: 750});

            /*Messenger().post({
                message: 'There was an explosion while processing your request.',
                type: 'error',
                showCloseButton: true
            });*/
                
        });
    </script>

  </body>
</html>
