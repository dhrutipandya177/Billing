<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
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
	<script src="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css"></script>
	<script src="<?php echo base_url();?>js/raphael-min.js"></script>
	<script src="<?php echo base_url();?>js/morris.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/iziToast.min.css">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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
		<!-- Create course -->
		<div class="modal fade" id="createcourse" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title h3" id="formModal">Add Courses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
			  <input type="hidden" class="form-control" name="ids" id="ids">
                  <div class="form-group">
                    <label>Course</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
					  <input name="names" id="names"  type="text" class="form-control" placeholder="Enter Course....." >
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Duration</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" placeholder="Duration in months...." name="duration" id="duration">
                    </div>
                  </div>
                  <button type="submit" name="course_submit" id="course_submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end course-->
		<section id="main-content">
			<section class="wrapper">
				<div class="table-agile-info">
				
					<div class="panel panel-default course_table">
						<div class="panel-heading">
							admission Records
						</div>
						<div id="msg"></div>
						<div class="table-right-content">
							<button href="#" class="btn btn-info" data-toggle="modal" data-target="#createcourse">
							<span><i class="fa fa-plus" aria-hidden="true"></i></i></span>
							</button> 
							<a class="btn btn-danger text-white" data-placement="bottom" title="Delete Multiple Record" id="multi_row_remove"><i class="fa fa-trash" aria-hidden="true"></i></span>
							</a>
						</div>
						<div>
							<table id="table2" class="table table-striped income-table no-spacing padding-0" ui-jq="footable" ui-options='{"paging": {"enabled": true },"filtering": {"enabled": true},"sorting": {  "enabled": true}}' style = "display: block; overflow-y : auto ; white-space: normal; ">
								<thead>
									<tr>
										<th>
											<div class="custom-checkbox custom-checkbox-table custom-control">
												<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all" for="checkbox-all" name="select-all">
												<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
											</div>
										</th>
										<th>Sn</th>
										<th width="500%">Department</th>
										<th width="200%">Reg no</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $sno = 1;
										foreach ($all_courses as $val) { ?>
									<tr>
										<td>
											<div class="custom-checkbox custom-control">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-<?php echo $sno; ?>" name="mark" value="<?php echo $val->id ; ?>">
												<label for="checkbox-<?php echo $sno; ?>" class="custom-control-label">&nbsp;</label>
											</div>
										</td>
										<td><?php echo $sno; ?></td>
										<td><?php echo $val->name; ?></td>
										<td><?php echo $val->duration; ?></td>
										<td>
											<?php $xx= $val->id; ?>
											<a href="javascript:co_upd(<?php echo $xx; ?>)" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
											<a href="javascript:remove_co(<?php echo $xx; ?>)" class="active" ui-toggle-class=""><i class="fa fa-trash text-danger text"></i></a>
										</td>
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
	<script src="<?php echo base_url();?>js/jquery.scrollTo.js"></script>
	<!-- <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
	<script src="https://demo.rnwmultimedia.com/dist/assets/bundles/datatables/datatables.min.js"></script>
<script src="https://demo.rnwmultimedia.com/dist/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!-- Page Specific JS File -->
<script src="https://demo.rnwmultimedia.com/dist/assets/js/page/datatables.js"></script>
<script src="<?php echo base_url(); ?>js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo base_url(); ?>js/toastr.js"></script>
	<script type="text/javascript">
		 $(document).ready(function() {
         $('#table2').DataTable();
         } )
		function resetval() {
		$("#mid_menu_add")[0].reset();
		}
		$(function(){
		$("table2").largetable({
		enableMaximize: true
		})
		});
	</script>
	<script>
   $('#course_submit').on('click', function() {
    var id = $('#ids').val();
    var name = $('#names').val();
    var duration = $('#duration').val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url() ?>ad_admission/ad_course",
        data: {
			'id' :id,
            'name': name,
            'duration': duration
        },       
        success: function(resp) {
            var data = $.parseJSON(resp);
            var ddd = data['all_record'].status;
			// $('#table2').DataTable().ajax.reload();

            if (ddd == '1') {
                $('#msg').html(iziToast.success({
                    title: 'Success',
                    timeout: 2500,
                    message: 'HI! new course Is Now Inserted.',
                    position: 'topRight'
                }));
				
				$.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });


            } else if (ddd == '2') {
                $('#msg').html(iziToast.success({
                    title: 'success!',
                    timeout: 2500,
                    message: 'This course is updated!',
                    position: 'topRight'
                }));
				$.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });
            }else if (ddd == '3') {
                $('#msg').html(iziToast.error({
                  title: 'Canceled',
                  timeout: 2000,
                  message: 'Something Wrong',
                  position: 'topRight'
                }));

				$.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });

              } 
        }
    });
    return false;
   });


   
   function co_upd(id) {
        $.ajax({
          url: "<?php echo base_url(); ?>ad_admission/get_record_course",
          type: "post",
          data: {
            'id': id
          },
          success: function(resp) {
            $("#createcourse").modal('show');
            var data = $.parseJSON(resp);
            var id = data['single_record'].id;
            var name = data['single_record'].name;
            var duration = data['single_record'].duration;
            
           
            $('#ids').val(id);
            $('#names').val(name);
            $('#duration').val(duration);
			$('#course_submit').text('Update')
           }
        });
      }



	  function remove_co(id) {
          var conf = confirm("Are you sure to delete record?");
          if (conf) {
            $.ajax({
              url: "<?php echo base_url(); ?>ad_admission/delete_course",
              type: "post",
              data: {
                'id': id,
                'table': 'cer_course_list',
                'field': 'id'
              },
              success: function(resp) {
                var data = $.parseJSON(resp);
                var ddd = data['all_record'].status;
				// $('#table2').DataTable().ajax.reload();

                console.log("dddddd", ddd);
                if (ddd == '1') {
                  $('#msg').html(iziToast.success({
                    title: 'Success',
                    timeout: 2000,
                    message: 'HI! This Record Deleted.',
                    position: 'topRight'
                  }));

                  $.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });

                } else if (ddd == '2') {
                  $('#msg').html(iziToast.error({
                    title: 'Canceled!',
                    timeout: 2000,
                    message: '',
                    position: 'topRight'
                  }));

                  $.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });
                }  
              }
            });
          }
        }
		$(document).ready( function() {
        $('#yellow').delay(1000).fadeOut('fast');
      }); 

	  $('#multi_row_remove').on('click', function() {
    alert("Are You Sure This Record Deleted");
    var ids = [];
      $('input[name=mark]:checked').map(function() {
        ids.push($(this).val());
      });

    console.log("idss "+ids);

    $.ajax({
      type: "POST",
      url: "<?php echo base_url() ?>ad_admission/Multiple_rowremove",
      data: { 
        'ids': ids
      },
      success: function(resp) {
        var data = $.parseJSON(resp);
        var ddd = data['all_record'].status;
		// $('#table2').DataTable().ajax.reload();

        console.log(ddd);
        if (ddd == '1') {
          $('#deleted_msg').html(iziToast.success({
            title: 'Success',
            timeout: 2500,
            message: 'Deleted Record!',
            position: 'topRight'
          }));

		  $.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });

        } else if (ddd == '2') {

          $('#deleted_msg').html(iziToast.error({
            title: 'Canceled!',
            timeout: 2500,
            message: 'Someting Wrong!!',
            position: 'topRight'
          }));

		  $.ajax({
                  url: "<?php echo base_url(); ?>ad_admission/course_table",
                  type: "post",
                  data: {
                        'id ': id 
                  },
                  success: function(Resp) {

                        $('.course_table').html(Resp);
                  }
               });
        } 
      }
    });
    return false;
  });
</script>
</body>
</html>