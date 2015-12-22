<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin Home Page</title>
		<!-- Bootstrap -->
		<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/Public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<link href="/Public/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
		<link href="/Public/assets/styles.css" rel="stylesheet" media="screen">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<script src="/Public/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>


	<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" >Admin Page</a>
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> ADMIN <i class="caret"></i>

						</a>
						<ul class="dropdown-menu">
							<li>
								<a tabindex="-1" href="<?php echo U('changepassword','','');?>">修改密码</a>
							</li>
							<li class="divider">
								<li>
									<a tabindex="-1" href="<?php echo U('logout','','');?>">登出系统</a>
								</li>
						</ul>
						</li>
				</ul>
				<ul class="nav">
					<li class="active">
						<a href="<?php echo U('index','','');?>">首页</a>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">设置 <b class="caret"></b>

                                </a>
						<ul class="dropdown-menu" id="menu1">
							<li>
								<a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
								<ul class="dropdown-menu sub-menu">
									<li>
										<a href="#">Reports</a>
									</li>
									<li>
										<a href="#">Logs</a>
									</li>
									<li>
										<a href="#">Errors</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">SEO Settings</a>
							</li>
							<li>
								<a href="#">Other Link</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Other Link</a>
							</li>
							<li>
								<a href="#">Other Link</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">目录 <i class="caret"></i>

                                </a>
						<ul class="dropdown-menu">
							<li>
								<a tabindex="-1" href="#">Blog</a>
							</li>
							<li>
								<a tabindex="-1" href="#">News</a>
							</li>
							<li>
								<a tabindex="-1" href="#">Custom Pages</a>
							</li>
							<li>
								<a tabindex="-1" href="#">Calendar</a>
							</li>
							<li class="divider"></li>
							<li>
								<a tabindex="-1" href="#">FAQ</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">用户 <i class="caret"></i>

                                </a>
						<ul class="dropdown-menu">
							<li>
								<a tabindex="-1" href="<?php echo U('userlist','','');?>">用户列表</a>
							</li>
							<li>
								<a tabindex="-1" href="#">查找用户</a>
							</li>
						
						</ul>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3" id="sidebar">
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class="active">
					<a href="<?php echo U('index','','');?>"><i class="icon-chevron-right"></i> 首页</a>
				</li>
				<li>
					<a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
				</li>
				<li>
					<a href="stats.html"><i class="icon-chevron-right"></i> 流量</a>
				</li>
				<li>
					<a href="<?php echo U('changepassword','','');?>"><i class="icon-chevron-right"></i> 修改密码</a>
				</li>
				<li>
					<a href="<?php echo U('userlist','','');?>"><i class="icon-chevron-right"></i> 用户列表</a>
				</li>
				<li>
					<a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
				</li>
				<li>
					<a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
				</li>
			</ul>
		</div>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Calendar</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span2">
                                    <div id='external-events'>
                                    <h4>Draggable Events</h4>
                                    <div class='external-event'>My Event 1</div>
                                    <div class='external-event'>My Event 2</div>
                                    <div class='external-event'>My Event 3</div>
                                    <div class='external-event'>My Event 4</div>
                                    <div class='external-event'>My Event 5</div>
                                    <div class='external-event'>My Event 6</div>
                                    <div class='external-event'>My Event 7</div>
                                    <div class='external-event'>My Event 8</div>
                                    <div class='external-event'>My Event 9</div>
                                    <div class='external-event'>My Event 10</div>
                                    <div class='external-event'>My Event 11</div>
                                    <div class='external-event'>My Event 12</div>
                                    <div class='external-event'>My Event 13</div>
                                    <div class='external-event'>My Event 14</div>
                                    <div class='external-event'>My Event 15</div>
                                    <p>
                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
                                    </p>
                                    </div>

                                </div>
                                <div class="span10">
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
			
<hr>
<footer>
	<p>power by phantomer 2016</p>
</footer>
</div>


        <style>
        #external-events {
            float: left;
            width: 150px;
            padding: 0 10px;
            border: 1px solid #ccc;
            background: #eee;
            text-align: left;
            }
            
        #external-events h4 {
            font-size: 16px;
            margin-top: 0;
            padding-top: 1em;
            }
            
        .external-event { /* try to mimick the look of a real event */
            margin: 10px 0;
            padding: 2px 4px;
            background: #3366CC;
            color: #fff;
            font-size: .85em;
            cursor: pointer;
            z-index: 99999999;
            }
            
        #external-events p {
            margin: 1.5em 0;
            font-size: 11px;
            color: #666;
            }
            
        #external-events p input {
            margin: 0;
            vertical-align: middle;
            }

        </style>
        <!--/.fluid-container-->
        <script src="/Public/vendors/jquery-1.9.1.min.js"></script>
        <script src="/Public/vendors/jquery-ui-1.10.3.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
        <script src="/Public/vendors/fullcalendar/fullcalendar.js"></script>
        <script src="/Public/vendors/fullcalendar/gcal.js"></script>
        <script src="/Public/assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                    );
                }
                calendar.fullCalendar('unselect');
            },
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped
            
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            },
			editable: true,
			// US Holidays
			events: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic'
			
			});
        });

        $('#external-events div.external-event').each(function() {
        
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999999999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
            
        });
        </script>
    </body>

</html>