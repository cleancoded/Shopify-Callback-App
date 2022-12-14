<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Integration</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?PHP echo base_url(); ?>asset/template/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/Buttons/css/buttons.css">
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/advbuttons.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/select2/css/select2-bootstrap.css" />
    <link href="<?PHP echo base_url(); ?>asset/template/css/pages/tables.css" rel="stylesheet" type="text/css">
    <!--end of page level css-->
    <style>
      #table4_wrapper .row:nth-child(2n+1) {display: none;}
    </style>
</head>

<body class="skin-josh">
    <header class="header">
      <a href="<?PHP echo base_url(); ?>" class="logo">
          <img src="<?PHP echo base_url(); ?>asset/template/img/logo.png" alt="Logo">
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div>
              <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                  <div class="responsive_nav"></div>
              </a>
          </div>
          <div class="navbar-right">
              <ul class="nav navbar-nav">
                  <!--<li class="dropdown messages-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                          <span class="label label-success">4</span>
                      </a>
                      <ul class="dropdown-menu dropdown-messages pull-right">
                          <li class="dropdown-title">4 New Messages</li>
                          <li class="unread message">
                              <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>Riot Zeast</strong>
                                      <br>Hello, You there?
                                      <br>
                                      <small>8 minutes ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="unread message">
                              <a href="javascript:;" class="message">
                                  <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>John Kerry</strong>
                                      <br>Can we Meet ?
                                      <br>
                                      <small>45 minutes ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="unread message">
                              <a href="javascript:;" class="message">
                                  <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                      <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                  </i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>Jenny Kerry</strong>
                                      <br>Dont forgot to call...
                                      <br>
                                      <small>An hour ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="unread message">
                              <a href="javascript:;" class="message">
                                  <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                      <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                  </i>
                                  <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                  <div class="message-body">
                                      <strong>Ronny</strong>
                                      <br>Hey! sup Dude?
                                      <br>
                                      <small>3 Hours ago</small>
                                  </div>
                              </a>
                          </li>
                          <li class="footer">
                              <a href="#">View all</a>
                          </li>
                      </ul>
                  </li>-->
                  <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                          <span class="label label-warning"><?php echo count($todayList->result()); ?></span>
                      </a>
                      <ul class=" notifications dropdown-menu">
                          <li class="dropdown-title">You have <?php echo count($todayList->result()); ?> notifications</li>
                          <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                <?php $livicons = array("pending"=>"warning", "blocked"=>"danger", "suspended"=>"bg-aqua", "completed"=>"success"); ?>
                                <?php $data_ns = array("general"=>"timer", "corporate"=>"image", "sales"=>"dashboard", "order"=>"shopping-cart-in", "complaint"=>"hand-right", "other"=>"thumbs-up"); ?>
                                <?php foreach($todayList->result() as $not) { ?>
                                  <li>
                                      <i class="livicon <?php echo $livicons[$not->status]; ?>" data-n="<?php echo $data_ns[$not->call_type]; ?>" data-s="20" data-c="white" data-hc="white"></i>
                                      <a href="<?php echo base_url() . 'callrequest/#' . $not->id; ?>"><?php echo $not->note; ?></a>
                                      <small class="pull-right">
                                          <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                          <?php echo $not->time; ?>
                                      </small>
                                  </li>
                                <?php } ?>
                              </ul>
                          </li>
                          <li class="footer">
                              <a href="<?php echo base_url() . 'callrequest/'; ?>">View all</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="<?PHP echo base_url(); ?>asset/template/img/authors/admin.png" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                          <div class="riot">
                              <div>
                                  Admin
                                  <span>
                                      <i class="caret"></i>
                                  </span>
                              </div>
                          </div>
                      </a>
                      <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header bg-light-blue">
                              <img src="<?PHP echo base_url(); ?>asset/template/img/authors/admin.png" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                              <p class="topprofiletext">Administrator</p>
                          </li>
                          <!-- Menu Body -->
                          <li style="display: none;">
                              <a href="view_user.html">
                                  <i class="livicon" data-name="user" data-s="18"></i> My Profile
                              </a>
                          </li>
                          <li role="presentation" style="display: none;"></li>
                          <li style="display: none;">
                              <a href="adduser.html">
                                  <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                              </a>
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                              <div class="pull-left">
                                  <a href="<?PHP echo base_url(); ?>upgrade">
                                      <i class="livicon" data-name="lock" data-s="18"></i> Upgrade
                                  </a>
                              </div>
                              <div class="pull-right" style="display: none;">
                                  <a href="login.html">
                                      <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                  </a>
                              </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="<?PHP echo base_url(); ?>home">
                                    <i class="livicon" data-name="home" title="Dashboard" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>callrequest">
                                    <i class="livicon" data-c="#EF6F6C" title="Requests" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>settings">
                                    <i class="livicon" data-name="gears" title="Settings" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>integration">
                                    <i class="livicon" data-name="connect" title="Integration" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="">
                            <a href="<?PHP echo base_url(); ?>home">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>callrequest">
                                <i class="livicon" data-name="list-ul" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                <span class="title">Call Requests</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>settings">
                                <i class="livicon" data-name="gears" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                                <span class="title">Settings</span>
                            </a>
                        </li>
                        <li  class="active">
                            <a href="<?PHP echo base_url(); ?>integration">
                                <i class="livicon" data-name="connect" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Integration</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Integration</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">Integration</li>
                </ol>
            </section>
            <section class="content">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="panel panel-primary filterable">
                          <div class="panel-heading clearfix  ">
                              <div class="panel-title pull-left">
                                  <div class="caption">
                                      <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Notification E-mails
                                  </div>
                              </div>
                          </div>
                          <div class="panel-body">
                            <form id="email-form" method="POST" action="<?PHP echo base_url(); ?>integration/saveEmail">
                              <div class="panel-body table-responsive">
                                  <table class="table table-striped table-bordered" id="table4">
                                      <thead>
                                          <tr>
                                              <th>Email</th>
                                              <th>Type</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                <input type="text" class="form-control" id="row-general-email" name="row-general-email" value="<?php echo isset($emails[0])? $emails[0]->generalEmail : ''; ?>">
                                              </td>
                                              <td>
                                                  <select size="1" disabled id="row-1-type" name="row-1-type">
                                                      <option value="General" selected="selected">
                                                          General
                                                      </option>
                                                      <option value="Corporate Quotes">
                                                          Corporate Quotes
                                                      </option>
                                                      <option value="Sales">
                                                          Sales
                                                      </option>
                                                      <option value="Existing Order">
                                                          Existing Order
                                                      </option>
                                                      <option value="Complaint">
                                                          Complaint
                                                      </option>
                                                      <option value="Other">
                                                          Other
                                                      </option>
                                                  </select>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                <input type="text" class="form-control" id="row-coporate-email" name="row-coporate-email" value="<?php echo isset($emails[0])? $emails[0]->coporateEmail : ''; ?>">
                                              </td>
                                              <td>
                                                  <select size="1" disabled id="row-2-type" name="row-2-type">
                                                      <option value="General">
                                                          General
                                                      </option>
                                                      <option value="Corporate Quotes" selected="selected">
                                                          Corporate Quotes
                                                      </option>
                                                      <option value="Sales">
                                                          Sales
                                                      </option>
                                                      <option value="Existing Order">
                                                          Existing Order
                                                      </option>
                                                      <option value="Complaint">
                                                          Complaint
                                                      </option>
                                                      <option value="Other">
                                                          Other
                                                      </option>
                                                  </select>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                <input type="text" class="form-control" id="row-sales-email" name="row-sales-email" value="<?php echo isset($emails[0])? $emails[0]->salesEmail : ''; ?>">
                                              </td>
                                              <td>
                                                  <select size="1" disabled id="row-3-type" name="row-3-type">
                                                      <option value="General">
                                                          General
                                                      </option>
                                                      <option value="Corporate Quotes">
                                                          Corporate Quotes
                                                      </option>
                                                      <option value="Sales" selected="selected">
                                                          Sales
                                                      </option>
                                                      <option value="Existing Order">
                                                          Existing Order
                                                      </option>
                                                      <option value="Complaint">
                                                          Complaint
                                                      </option>
                                                      <option value="Other">
                                                          Other
                                                      </option>
                                                  </select>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                <input type="text" class="form-control" id="row-order-email" name="row-order-email" value="<?php echo isset($emails[0])? $emails[0]->orderEmail : ''; ?>">
                                              </td>
                                              <td>
                                                  <select size="1" disabled id="row-4-type" name="row-4-type">
                                                      <option value="General">
                                                          General
                                                      </option>
                                                      <option value="Corporate Quotes">
                                                          Corporate Quotes
                                                      </option>
                                                      <option value="Sales">
                                                          Sales
                                                      </option>
                                                      <option value="Existing Order" selected="selected">
                                                          Existing Order
                                                      </option>
                                                      <option value="Complaint">
                                                          Complaint
                                                      </option>
                                                      <option value="Other">
                                                          Other
                                                      </option>
                                                  </select>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                <input type="text" class="form-control" id="row-complaint-email" name="row-complaint-email" value="<?php echo isset($emails[0])? $emails[0]->complaintEmail : ''; ?>">
                                              </td>
                                              <td>
                                                  <select size="1" disabled id="row-5-type" name="row-5-type">
                                                      <option value="General">
                                                          General
                                                      </option>
                                                      <option value="Corporate Quotes">
                                                          Corporate Quotes
                                                      </option>
                                                      <option value="Sales">
                                                          Sales
                                                      </option>
                                                      <option value="Existing Order">
                                                          Existing Order
                                                      </option>
                                                      <option value="Complaint" selected="selected">
                                                          Complaint
                                                      </option>
                                                      <option value="Other">
                                                          Other
                                                      </option>
                                                  </select>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                <input type="text" class="form-control" id="row-other-email" name="row-other-email" value="<?php echo isset($emails[0])? $emails[0]->otherEmail : ''; ?>">
                                              </td>
                                              <td>
                                                  <select size="2" disabled id="row-6-type" name="row-6-type">
                                                      <option value="General">
                                                          General
                                                      </option>
                                                      <option value="Corporate Quotes">
                                                          Corporate Quotes
                                                      </option>
                                                      <option value="Sales">
                                                          Sales
                                                      </option>
                                                      <option value="Existing Order">
                                                          Existing Order
                                                      </option>
                                                      <option value="Complaint">
                                                          Complaint
                                                      </option>
                                                      <option value="Other" selected="selected">
                                                          Other
                                                      </option>
                                                  </select>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <a id="button_save" class="button button-rounded button-primary">Save</a>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
            </section>

        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?PHP echo base_url(); ?>asset/template/js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/select2/js/select2.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/js/pages/table-advanced2.js"></script>
    <script>
      $(document).ready(function(){

        $('#button_save').click(function(e){
          e.preventDefault();
          var url = $('#email-form').attr('action');
               $.ajax({
               url: url,
               data: $("#email-form").serialize(),
               type: $("#email-form").attr('method')
             }).done(function(data) {
               location.reload();
             });
        });

      });
    </script>
    <!-- end of page level js -->
</body>

</html>
