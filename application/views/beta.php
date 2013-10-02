
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8"/>
  <title>Messages - AMI</title>
  <meta name="description" content="overview &amp; stats"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

  <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
  <![endif]-->

  <!--page specific plugin styles-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />


  <!--fonts-->

  <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

  <!--ace styles-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.full.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace/ace.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />

  <style type="text/css">
    input[type=checkbox],
    input[type=radio] {
      opacity: 100;
      position: relative;
      z-index: 12;
      width: 18px;
      height: 18px;
      display:inline; margin:0px; padding:0px;
    }
    .ui-dialog .ui-dialog-content {
  position: relative;
  border: 0;
  padding: .5em 1em;
  background: 0;
  overflow: visible;
  }

  </style>
</head>

  <body>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a href="#" class="brand">
          <small>
          <img src="<?php echo base_url();?>assets/images/logo.png">
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
          
          
          <div class="row-fluid">
            <div class="span12">
              <h3 class="header smaller lighter blue">AMI Mailer </h3>
              <div class="btn-toolbar pull-right">
                <div class="btn-group">
                  <button class="btn btn-small btn-purple" id="btn-compose"><i class="icon-edit"></i> Compose</button> 
                </div>
                <div class="btn-group">
                  <button class="btn btn-small btn-primary"><i class="icon-refresh"></i> Refresh</button>
                </div>
                
              </div>


              <br>
              <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active">
                    <a data-toggle="tab" href="#inbox">
                      <i class="blue icon-envelope"></i>
                      Inbox
                      <span class="badge badge-important">4</span>
                    </a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#sent">
                      <i class="green icon-ok"></i>
                      Sent
                    </a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#draft">
                      <i class="purple icon-pencil"></i>
                      Draft
                    </a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#trash">
                      <i class="red icon-trash"></i>
                      Trash
                    </a>
                  </li>


                </ul>

                <div class="tab-content">
                  <div id="inbox" class="tab-pane in active">
                    
                    

                    <!--<div class="center table-header">Inbox (# Unread Messages)</div>-->
                    <div class="table-header">
                      <div class="btn-group">
                        <button class="btn btn-small btn-purple"><i class="icon-reply"></i> Reply</button>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-small btn-success"><i class="icon-mail-forward"></i> Forward</button>
                      </div>
                      <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-info btn-small dropdown-toggle">
                          Actions
                          <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu dropdown-info pull-right">
                          <li>
                            <a href="#"><i class="icon-eye-open green"></i> Mark As Read</a>
                          </li>

                          <li>
                            <a href="#"><i class="icon-eye-close blue"></i> Mark As Unread</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#"><i class="icon-flag red"></i> Flag</a>
                          </li>
                      
                        </ul>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-small btn-danger"><i class="icon-trash"></i> Delete</button>
                      </div>
                    </div>
                    <table class="inbox-table table">
                      <thead>
                        <tr role="row">
                          <th style="width: 50px;" class="center sorting_disabled" role="columnheader" colspan="1" rowspan="1"><input type="checkbox"></th>
                          <th style="width: 200px;">From</th>
                          <th>Messages</th>
                          <th style="width: 200px;" >Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="center sorting_1" colspan="1" rowspan="1"><input type="checkbox"></td>
                          <td><a><b>asdf</b></a></td>
                          <td><i class="icon-flag red"></i> <a><b>asdf</b></a></td>
                          <td><a><b>asdf</b></a></td>
                        </tr>
                        <tr>
                          <td class="center sorting_1" colspan="1" rowspan="1"><input type="checkbox"></td>
                          <td>asdf</td>
                          <td>asdf</td>
                          <td>asdf</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div id="sent" class="tab-pane">
                    <p>[sent]</p>
                  </div>

                  <div id="draft" class="tab-pane">
                    <p>[draft]</p>
                  </div>

                  <div id="trash" class="tab-pane">
                    <p>[trash]</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
                
        </div>
        <!--/#page-content-->
      </div>
      <!--/#main-content-->
    </div>
    <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
      <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>

    <!--basic scripts-->

   
    <script type="text/javascript">
      window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
    </script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
    



    <!--page specific plugin scripts-->
    
    

    <script src="<?php echo base_url();?>assets/js/jquery.hotkeys.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>

    <!--ace scripts-->

    <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>



    <!--inline scripts related to this page-->

    <script type="text/javascript">
      $(function(){

        $("#mailer").hide();

        function initToolbarBootstrapBindings() {

          var fonts = ['Arial', 'Courier', 'Comic Sans MS', 'Helvetica', 'Open Sans', 'Tahoma', 'Verdana'],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function (idx, fontName) {
              fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
          });
          $('a[title]').tooltip({container:'body',animation:false});
          $('.dropdown-menu input').click(function() {return false;})
            .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
            .keydown('esc', function () {this.value='';$(this).change();});


          $('.wysiwyg-toolbar input[type=file]').prev().on('click', function () { 
            $(this).next().click();//the image icon
          });

          $('#colorpicker').ace_colorpicker({pull_right:true,caret:false}).change(function(){
          $(this).nextAll('input').eq(0).val(this.value).change();
          }).next().tooltip({title: $('#colorpicker').attr('title'), container:'body',animation:false}).next().hide();


          if ("onwebkitspeechchange"  in document.createElement("input")) {
            var editorOffset = $('#editor1').offset();
            $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor1').innerWidth()-35});
          } else {
            $('#voiceBtn').hide();
          }
        };

        function showErrorAlert (reason, detail) {

          var msg='';
          if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
          else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
           '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
        };

        initToolbarBootstrapBindings();  

        $('#editor1').wysiwyg( { fileUploadError: showErrorAlert , activeToolbarClass: 'active' , toolbarSelector : '#editor-toolbar-1'} );
        $('#editor2').wysiwyg( { fileUploadError: showErrorAlert , activeToolbarClass: 'active' , toolbarSelector : '#editor-toolbar-2' } );

        $('[data-toggle="buttons-radio"]').on('click', function(e){
          var target = $(e.target);
          var which = parseInt(target.html());
          var toolbar = $('#editor-toolbar-1').get(0);
          if(which == 1 || which == 2 || which == 3) {
            toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
            if(which == 1) $(toolbar).addClass('wysiwyg-style1');
            else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
          }
        });

        $("#btn-compose").click(function() {

          $("#mailer").fadeIn(250);

        });

        $("#close-message").click(function () {

          $("#mailer").fadeOut(250);

        });

        $("#to").click(function(e) {



          $("#contacts").offset({left:e.pageX,top:e.pageY});

        });
        
      });
    </script>


    

  </body>
  <div id="mailer" style="z-index: 99; position:absolute; bottom:0; right:25px; width:50%;">
    <div class="widget-box light-border">
      <div class="widget-header header-color-dark" id="min-header">
        <h5 class="smaller"><i class="icon-plus"></i> New Message</h5>

        <div class="widget-toolbar">

          <a href="#" data-action="collapse">
            <i style="display:none;" class="icon-chevron-down"></i> <img style="margin-top: 5px;" src="<?php echo base_url();?>assets/images/min.png">
          </a>

          <a href="#" data-action="" id="close-message">
            <i class="icon-remove red"></i>
          </a>
        </div>
      </div>

      <div class="widget-body">
        <div class="widget-main padding-0">

            
            <input type="text" style="width:98%;" placeholder="Recipient" id="to">
          
            <div id="editor-toolbar-1" class="wysiwyg-toolbar wysiwyg-style1 btn-toolbar center" data-target="#editor">
              <div class="btn-group">
                <a class="btn btn-small  dropdown-toggle" data-toggle="dropdown" title="Font">
                  <i class=" icon-font"></i>

                  <i class="icon-angle-down icon-on-right"></i>
                </a>
                <ul class="dropdown-menu dropdown-light">  </ul>
              </div>

              <div class="btn-group">
                <a class="btn btn-small  dropdown-toggle" data-toggle="dropdown" title="Font Size">
                  <i class=" icon-text-height"></i>

                  &nbsp;
                  <i class="icon-angle-down icon-on-right"></i>
                </a>

                <ul class="dropdown-menu dropdown-light">
                  <li>
                    <a data-edit="fontSize 5">
                      <font size="5">Huge</font>
                    </a>
                  </li>

                  <li>
                    <a data-edit="fontSize 3">
                      <font size="3">Normal</font>
                    </a>
                  </li>

                  <li>
                    <a data-edit="fontSize 1">
                      <font size="1">Small</font>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="btn-group">
                <a class="btn btn-small btn-info " data-edit="bold" title="Bold (Ctrl/Cmd+B)">
                  <i class=" icon-bold"></i>
                </a>

                <a class="btn btn-small btn-info " data-edit="italic" title="Italic (Ctrl/Cmd+I)">
                  <i class=" icon-italic"></i>
                </a>

                <a class="btn btn-small btn-info " data-edit="strikethrough" title="Strikethrough">
                  <i class=" icon-strikethrough"></i>
                </a>

                <a class="btn btn-small btn-info " data-edit="underline" title="Underline (Ctrl/Cmd+U)">
                  <i class=" icon-underline"></i>
                </a>
              </div>

              <div class="btn-group">
                <a class="btn btn-small btn-success " data-edit="insertunorderedlist" title="Bullet list">
                  <i class=" icon-list-ul"></i>
                </a>

                <a class="btn btn-small btn-success " data-edit="insertorderedlist" title="Number list">
                  <i class=" icon-list-ol"></i>
                </a>

                <a class="btn btn-small btn-purple " data-edit="outdent" title="Reduce indent (Shift+Tab)">
                  <i class=" icon-indent-left"></i>
                </a>

                <a class="btn btn-small btn-purple " data-edit="indent" title="Indent (Tab)">
                  <i class=" icon-indent-right"></i>
                </a>
              </div>
              <br>
              <div class="btn-group">
                <a class="btn btn-small btn-primary " data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)">
                  <i class=" icon-align-left"></i>
                </a>

                <a class="btn btn-small btn-primary " data-edit="justifycenter" title="Center (Ctrl/Cmd+E)">
                  <i class=" icon-align-center"></i>
                </a>

                <a class="btn btn-small btn-primary " data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)">
                  <i class=" icon-align-right"></i>
                </a>

                <a class="btn btn-small btn-inverse " data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)">
                  <i class=" icon-align-justify"></i>
                </a>
              </div>

              <div class="btn-group">
                <a class="btn btn-small btn-pink dropdown-toggle" data-toggle="dropdown" title="Hyperlink">
                  <i class=" icon-link"></i>
                </a>

                <div class="dropdown-menu dropdown-caret input-append pull-right">
                  <input placeholder="URL" type="text" data-edit="createLink" />
                  <button class="btn btn-small btn-primary" type="button">Add</button>
                </div>

                <a class="btn btn-small btn-pink " data-edit="unlink" title="Remove Hyperlink">
                  <i class=" icon-unlink"></i>
                </a>
              </div>

              <div class="btn-group">
                <a class="btn btn-small btn-success" title="Insert picture (or just drag & drop)" id="pictureBtn">
                  <i class=" icon-picture"></i>
                </a>

                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
              </div>

              <div class="btn-group">
                <select id="colorpicker" class="hidden" title="Change Color">
                  <option value="#ac725e">#ac725e</option>
                  <option value="#d06b64">#d06b64</option>
                  <option value="#f83a22">#f83a22</option>
                  <option value="#fa573c">#fa573c</option>
                  <option value="#ff7537">#ff7537</option>
                  <option value="#ffad46">#ffad46</option>
                  <option value="#42d692">#42d692</option>
                  <option value="#16a765">#16a765</option>
                  <option value="#7bd148">#7bd148</option>
                  <option value="#b3dc6c">#b3dc6c</option>
                  <option value="#fbe983">#fbe983</option>
                  <option value="#fad165">#fad165</option>
                  <option value="#92e1c0">#92e1c0</option>
                  <option value="#9fe1e7">#9fe1e7</option>
                  <option value="#9fc6e7">#9fc6e7</option>
                  <option value="#4986e7">#4986e7</option>
                  <option value="#9a9cff">#9a9cff</option>
                  <option value="#b99aff">#b99aff</option>
                  <option value="#c2c2c2">#c2c2c2</option>
                  <option value="#cabdbf">#cabdbf</option>
                  <option value="#cca6ac">#cca6ac</option>
                  <option value="#f691b2">#f691b2</option>
                  <option value="#cd74e6">#cd74e6</option>
                  <option value="#a47ae2">#a47ae2</option>
                  <option value="#444" selected="">#444</option>
                </select>

                <input style="display:none;" disabled="" class="hidden" type="text" data-edit="foreColor" />
              </div>

              <div class="btn-group">
                <a class="btn btn-small btn-grey " data-edit="undo" title="Undo (Ctrl/Cmd+Z)">
                  <i class=" icon-undo"></i>
                </a>

                <a class="btn btn-small btn-grey " data-edit="redo" title="Redo (Ctrl/Cmd+Y)">
                  <i class=" icon-repeat"></i>
                </a>
              </div>

              
            </div>

            <div class="wysiwyg-editor" id="editor1">Type Your Message Here</div>
            <div class="well well-small" style="margin:0;">

              <div class="btn-group" style="margin-bottom:5px;">
                <button class="btn btn-primary btn-small">Send</button> 
              </div>
              <div class="btn-group" style="margin-bottom:5px;">
                <button class="btn btn-primary btn-small">Save To Drafts</button> 
              </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
  <div id="temp">
    
  </div>

  

</html>