<!DOCTYPE html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- bootstrap-css -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" >
   <!-- //bootstrap-css -->
   <!-- Custom CSS -->
   <link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css' />
   <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet"/>
   <!-- font CSS -->
   <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
   <!-- font-awesome icons -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/font.css" type="text/css"/>
   <link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo base_url();?>css/morris.css" type="text/css"/>
   <!-- calendar -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/monthly.css">
   <!-- //calendar -->
   <!-- //font-awesome icons -->
   <script src="<?php echo base_url();?>js/jquery2.0.3.min.js"></script>
   <script src="<?php echo base_url();?>js/raphael-min.js"></script>
   <script src="<?php echo base_url();?>js/morris.js"></script>
</head>
<body>
   <section id="container">
      <!--header start-->
      <header class="header fixed-top clearfix">
         <!--logo start-->
         <div class="brand">
            <a href="<?php echo base_url(); ?>welcome/index" class="logo">
            VISITORS
            </a>
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars"></div>
            </div>
         </div>
         <!--logo end-->
         <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
               <!-- settings start -->
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="fa fa-tasks"></i>
                  <span class="badge bg-success">8</span>
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                     <li>
                        <p class="">You have 8 pending tasks</p>
                     </li>
                     <li>
                        <a href="#">
                           <div class="task-info clearfix">
                              <div class="desc pull-left">
                                 <h5>Target Sell</h5>
                                 <p>25% , Deadline  12 June’13</p>
                              </div>
                              <span class="notification-pie-chart pull-right" data-percent="45">
                              <span class="percent"></span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="task-info clearfix">
                              <div class="desc pull-left">
                                 <h5>Product Delivery</h5>
                                 <p>45% , Deadline  12 June’13</p>
                              </div>
                              <span class="notification-pie-chart pull-right" data-percent="78">
                              <span class="percent"></span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="task-info clearfix">
                              <div class="desc pull-left">
                                 <h5>Payment collection</h5>
                                 <p>87% , Deadline  12 June’13</p>
                              </div>
                              <span class="notification-pie-chart pull-right" data-percent="60">
                              <span class="percent"></span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="task-info clearfix">
                              <div class="desc pull-left">
                                 <h5>Target Sell</h5>
                                 <p>33% , Deadline  12 June’13</p>
                              </div>
                              <span class="notification-pie-chart pull-right" data-percent="90">
                              <span class="percent"></span>
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See All Tasks</a>
                     </li>
                  </ul>
               </li>
               <!-- settings end -->
               <!-- inbox dropdown start-->
               <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-important">4</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                     <li>
                        <p class="red">You have 4 Mails</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>images/3.png"></span>
                        <span class="subject">
                        <span class="from">Jonathan Smith</span>
                        <span class="time">Just now</span>
                        </span>
                        <span class="message">
                        Hello, this is an example msg.
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>images/1.png"></span>
                        <span class="subject">
                        <span class="from">Jane Doe</span>
                        <span class="time">2 min ago</span>
                        </span>
                        <span class="message">
                        Nice admin template
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>images/3.png"></span>
                        <span class="subject">
                        <span class="from">Tasi sam</span>
                        <span class="time">2 days ago</span>
                        </span>
                        <span class="message">
                        This is an example msg.
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo base_url();?>images/2.png"></span>
                        <span class="subject">
                        <span class="from">Mr. Perfect</span>
                        <span class="time">2 hour ago</span>
                        </span>
                        <span class="message">
                        Hi there, its a test
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">See all messages</a>
                     </li>
                  </ul>
               </li>
               <!-- inbox dropdown end -->
               <!-- notification dropdown start-->
               <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="fa fa-bell-o"></i>
                  <span class="badge bg-warning">3</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                     <li>
                        <p>Notifications</p>
                     </li>
                     <li>
                        <div class="alert alert-info clearfix">
                           <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                           <div class="noti-info">
                              <a href="#"> Server #1 overloaded.</a>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="alert alert-danger clearfix">
                           <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                           <div class="noti-info">
                              <a href="#"> Server #2 overloaded.</a>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="alert alert-success clearfix">
                           <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                           <div class="noti-info">
                              <a href="#"> Server #3 overloaded.</a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="top-nav clearfix">
            <ul class="nav pull-right top-menu">
               <!-- <li>
                  <input type="text" class="form-control search" placeholder=" Search">
               </li> -->
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <img alt="" src="<?php echo base_url();?>images/2.png">
                  <span class="username">John Doe</span>
                  <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu extended logout">
                     <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                     <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                     <li><a href="<?php echo base_url();?>welcome/login"><i class="fa fa-key"></i> Log Out</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </header>
      <aside>
         <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
               <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                     <a href="<?php echo base_url();?>ad_admission/index">
                     <i class="fa fa-dashboard"></i>
                     <span>Dashboard</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo base_url();?>ad_admission/ad_form">
                     <i class="fa fa-user"></i>
                     <span>Add student</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo base_url();?>ad_admission/course_add">
                     <i class="fa fa-bookmark-o"></i>
                     <span>Add course</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo base_url();?>ad_admission/basic_table">
                     <i class="fa fa-database"></i>
                     <span>Certificate Requests</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- sidebar menu end-->
         </div>
      </aside>
      <section id="main-content">
         <section class="wrapper">
            <div class="table-agile-info">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     admission Records
                  </div>
                  <div>
                     <table id="table2" class="table table-striped income-table no-spacing padding-0" ui-jq="footable" ui-options='{"paging": {"enabled": true },"filtering": {"enabled": true},"sorting": {  "enabled": true}}' style = "display: block; overflow-y : auto ; white-space: normal;">
                        <thead  >
                           <tr><button class="btn btn-md "><a class="btn btn-success text-white" href="<?php echo base_url(); ?>ad_admission/basic_table" > All <span
                              class="badge badge-transparent"><?php echo $count_all_data; ?></span></a></button>
                              <button class="btn btn-md"><a class=" btn btn-info text-white" href="<?php echo base_url(); ?>ad_admission/filter_by_status" > Confirmed <span
                                 class="badge badge-transparent"><?php echo $count_con_data; ?></span></a></button>
                              <button class="btn btn-md"><a class="btn btn-danger text-white" href="<?php echo base_url(); ?>ad_admission/filter_by_status_panding" > Request <span class="badge badge-transparent"><?php echo $count_pan_data; ?></span></a></button>
                           </tr>
                           <tr >
                              <th class=" table padding-0">Sn</th>
                              <th>Department</th>
                              <th>Reg no</th>
                              <th>Student Name</th>
                              <th>GR ID</th>
                              <th>contect no</th>
                              <th>Course</th>
                              <th>branch</th>
                              <th>Starting Date</th>
                              <th>duration</th>
                              <th>End Date</th>
                              <th>Issue date</th>
                              <th>Grade</th>
                              <th>status</th>
                              <th>Type</th>
                              <th>Request</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $sno = 1;
                              foreach ($all_adms as $val) { ?>
                           <tr>
                              <td><?php echo $sno ?></td>
                              <td><?php echo $val->depart; ?></td>
                              <td><?php echo $val->regno; ?></td>
                              <td><?php echo $val->sname; ?></td>
                              <td><?php echo $val->gr_id; ?></td>
                              <td><?php echo $val->con_no; ?></td>
                              <td><?php echo $val->course; ?> </td>
                              <td><?php echo $val->branch; ?></td>
                              <td><?php echo $val->start_date; ?></td>
                              <td><?php echo $val->duration; ?></td>
                              <td><?php echo $val->end_date; ?></td>
                              <td><?php echo $val->issue_date; ?></td>
                              <td><?php echo $val->grade; ?></td>
                              <td><?php echo $val->status; ?></td>
                              <td><?php echo $val->type; ?></td>
                              <?php if($val->status == 'PANDING' ){?>
                              <td>
                                 <?php $xx = $val->ad_id; ?>
                                 <a href="<?php echo base_url(); ?>ad_admission/updateStatus/<?php echo $val->ad_id; ?>" class="btn btn-info text-white" > confirm </a>
                              </td>
                              <?php } else if ($val->status == 'APROOVED' ){?>
                              <td>
                                 <?php $xx = $val->ad_id; ?> 
                                 <?php if($val->type == "new") {?>
                                 <a href="<?php echo base_url(); ?>ad_admission/print/<?php echo $val->ad_id; ?>"  class="btn btn-success text-white" target="_blank"> Print </a>
                                 <?php } else if ($val->type == "Old") {?>
                                 <a href="<?php echo base_url(); ?>ad_admission/Print_old/<?php echo $val->ad_id; ?>"  class="btn btn-success text-white" target="_blank">  Print </a>
                                 <?php } else if($val->type == "fd") {?>
                                 <a href="<?php echo base_url(); ?>ad_admission/Print_fd/<?php echo $val->ad_id; ?>"  class="btn btn-success text-white" target="_blank">  Print </a>
                                 <?php }?>
                              </td>
                              <?php  }?>
                           </tr>
                           <?php $sno++;
                              } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </section>
   </section>
   <script src="<?php echo base_url();?>js/bootstrap.js"></script>
   <script src="<?php echo base_url();?>js/jquery.dcjqaccordion.2.7.js"></script>
   <script src="<?php echo base_url();?>js/scripts.js"></script>
   <script src="<?php echo base_url();?>js/jquery.slimscroll.js"></script>
   <script src="<?php echo base_url();?>js/jquery.nicescroll.js"></script>
   <script src="<?php echo base_url();?>js/jquery.scrollTo.js"></script>
   <script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
   <script src="<?php echo base_url(); ?>js/dataTables.bootstrap4.min.js"></script>
   <script src="<?php echo base_url(); ?>js/datatables.js"></script>
   <script type="text/javascript">
      $('#table2').DataTable({
            'stateSave': true,
            "lengthMenu": [ 10, 40, 60, 80, 100 ], 
        "pageLength": 10
        })
      function resetval() {
      $("#mid_menu_add")[0].reset();
      }
   </script>
</body>
</html>