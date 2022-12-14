<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Upgrade to Premium</title>
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
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/css/line/line.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-switch/css/bootstrap-switch.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/switchery/css/switchery.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/awesome-bootstrap-checkbox/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/radio_checkbox.css">
    <!--end of page level css-->
    <style>
      #table4_wrapper .row:nth-child(2n+1) {display: none;}
      .panel-body form .checkbox label::before { display: none !important }
      .panel-body form .checkbox { padding-left: 0; margin-bottom: 20px;}
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
                        <li>
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
                <h1>Upgrade to Premium</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">Upgrade</li>
                </ol>
            </section>
            <section class="content">
              <div class="row">
                <h1 style="color: #363636; text-align: center; font-size: 28px; font-weight: 600; margin-bottom: 35px;">
                  14 Day Money Back Guarantee On All Call Back Plans
                </h1>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="panel panel-info" id="hidepanel1">
                    <div class="panel-heading" style="background-color: #aa4dc8; border-color: #aa4dc8; padding: 20px 15px;">
                        <h3 class="panel-title" style="text-align: center;">
                            Freelancer
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal text-center" action="#" method="post">
                            <fieldset>
                                <div class="" style="font-weight: bold;">
                                    <label>
                                        $0 / month
                                    </label>
                                </div>
                                <div class="checkbox" style="">
                                    <label>
                                        <input type="radio" name="r1" class="square" checked/>
                                    </label>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-responsive btn-info btn-sm">Upgrade Now</button>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        50 Call Requests
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        GPS caller location on the map.
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--panel body ends-->
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="panel panel-info" id="hidepanel2">
                    <div class="panel-heading" style="background-color: #449fed; border-color: #449fed; padding: 20px 15px;">
                        <h3 class="panel-title" style="text-align: center;">
                            Small Office
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal text-center" action="#" method="post">
                            <fieldset>
                                <div class="" style="font-weight: bold;">
                                    <label>
                                        $12 / month
                                    </label>
                                </div>
                                <div class="checkbox" style="">
                                    <label>
                                        <input type="radio" name="r1" class="square"/>
                                    </label>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" disabled class="btn btn-responsive btn-info btn-sm">Upgrade Now</button>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        150 Call Requests
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        GPS caller location on the map.
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        Google Callendar Integration
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--panel body ends-->
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="panel panel-info" id="hidepanel3">
                    <div class="panel-heading" style="background-color: #449fed; border-color: #449fed; padding: 20px 15px;">
                        <h3 class="panel-title" style="text-align: center;">
                            Growing Business
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal text-center" action="#" method="post">
                            <fieldset>
                                <div class="" style="font-weight: bold;">
                                    <label>
                                        $29 / month
                                    </label>
                                </div>
                                <div class="checkbox" style="">
                                    <label>
                                        <input type="radio" name="r1" class="square"/>
                                    </label>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" disabled class="btn btn-responsive btn-info btn-sm">Upgrade Now</button>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        300 Call Requests
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        GPS caller location on the map.
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        Google Callendar Integration
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        Aircall Integration
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--panel body ends-->
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="panel panel-info" id="hidepanel4">
                    <div class="panel-heading" style="background-color: #449fed; border-color: #449fed; padding: 20px 15px;">
                        <h3 class="panel-title" style="text-align: center;">
                            Enterprise
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal text-center" action="#" method="post">
                            <fieldset>
                                <div class="" style="font-weight: bold;">
                                    <label>
                                        $39 / month
                                    </label>
                                </div>
                                <div class="checkbox" style="">
                                    <label>
                                        <input type="radio" name="r1" class="square"/>
                                    </label>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" disabled class="btn btn-responsive btn-info btn-sm">Upgrade Now</button>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        500 Call Requests
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        GPS caller location on the map.
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        Google Callendar Integration
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        Aircall Integration
                                    </label>
                                </div>
                                <div class="" style="margin-bottom: 5px;">
                                    <label>
                                        3 months call history
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--panel body ends-->
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
              <div class="row">
                <div class="text-center" style="margin-bottom: 50px;">
                    <h3>
                      Need More? We offer larger plans for companies with even more usage. You can check
                    </h3>
                    <h3><a href="https://call-back.io/">https://call-back.io/</a><h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                  <img style="width: 100%" src="<?PHP echo base_url(); ?>asset/template/img/secure1.png">
                  <div class="text-center" style="margin-top: -80px; display: none;">
                    <label>SSL SECURE PAYMENT <br> Your information is protected by 256-bit SSL encryption</label>
                  </div>
                </div>
                <div class="col-md-4 text-center" style="min-height: 103px;">
                  <img style="width: 100%" src="<?PHP echo base_url(); ?>asset/template/img/cards1.png">
                  <div class="text-center" style="margin-top: -115px; display: none;">
                    <label>We accept all of the following debit & credit cards</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <img style="width: 100%" src="<?PHP echo base_url(); ?>asset/template/img/guarante1.png">
                  <div class="text-center" style="margin-top: -55px; display: none;">
                    <label>14 Day Money Back Guarantee<br>On All Free Call Premium Plans</label>
                  </div>
                </div>
                <div class="col-md-2">
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
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/iCheck/js/icheck.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-switch/js/bootstrap-switch.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/switchery/js/switchery.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/js/pages/radio_checkbox.js"></script>
    <!-- end of page level js -->
</body>

</html>
