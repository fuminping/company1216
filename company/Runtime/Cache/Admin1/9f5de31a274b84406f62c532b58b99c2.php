<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>总后台</title>
	
	<link id="bootstrap-style" href="<?php echo (VIEW_DATA); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo (VIEW_DATA); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo (VIEW_DATA); ?>css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo (VIEW_DATA); ?>css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="<?php echo (VIEW_DATA); ?>img/favicon.ico">

</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>问题系统管理后台</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (VIEW_DATA); ?>img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (VIEW_DATA); ?>img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (VIEW_DATA); ?>img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (VIEW_DATA); ?>img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (VIEW_DATA); ?>img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> 锁定</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> 退出</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> 问题管理</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('Question/Index');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 问题列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('Question/Add');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 添加问题</span></a></li>
								<li><a class="submenu" href="<?php echo U('Question/Questionsub');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 问题分类</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 用户管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('User/Index');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 用户列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('User/Add');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 添加用户</span></a></li>
								<li><a class="submenu" href="<?php echo U('User/Usersub');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 用户分类</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> 权限管理</span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> 用户权限</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> 菜单权限</span></a></li>
							</ul>
						</li>
						<li><a href="<?php echo U('System/Setting');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> 系统管理</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
	
	<noscript>
		<div class="alert alert-block span10">
			<h4 class="alert-heading">Warning!</h4>
			<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
		</div>
	</noscript>
			
	<!-- start: Content -->
	<div id="content" class="span10">
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="<?php echo U('Question/Index');?>"><?php echo ($list[1]); echo ($list[0]); ?>问题管理<?php var_dump($list); ?></a>
				<i class="icon-angle-right"></i> 
			</li>
			<li>
				<i class="icon-edit"></i>
				<a href="<?php echo U('Question/Add');?>">问题列表</a>
			</li>
		</ul>
			
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-content">
				  <fieldset>
					<div class="control-group">
					  <span class="control-label">问题名称: </span>
						<input type="text" class=" typeahead" id="typeahead" />
					  <span class="control-label">日期:</span>
						<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
					 <button type="submit" class="btn btn-primary">Save changes</button>
					  <button type="reset" class="btn">Cancel</button>
					</div>
				  </fieldset>
				</div>
				<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>提问者</th>
								  <th>标题</th>
								  <th>标签</th>
								  <th>解决者</th>
								  <th>提问时间</th>
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>Dennis Ji</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">Member</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Dennis Ji</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Dennis Ji</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
								</td>
							</tr>
							<tr>
								<td>Dennis Ji</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

								<td>Dennis Ji</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
										
									</a>
								</td>
							</tr>
						  </tbody>
					</table>   
					<div class="pagination pagination-centered">
					  <ul>
						<li><a href="#">Prev</a></li>
						<li class="active">
						  <a href="#">1</a>
						</li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">Next</a></li>
					  </ul>
					</div>     					  
					</div>
			</div><!--/span-->

		</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo (VIEW_DATA); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo (VIEW_DATA); ?>js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/modernizr.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/bootstrap.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.cookie.js"></script>
	
		<script src='<?php echo (VIEW_DATA); ?>js/fullcalendar.min.js'></script>
	
		<script src='<?php echo (VIEW_DATA); ?>js/jquery.dataTables.min.js'></script>

		<script src="<?php echo (VIEW_DATA); ?>js/excanvas.js"></script>
	<script src="<?php echo (VIEW_DATA); ?>js/jquery.flot.js"></script>
	<script src="<?php echo (VIEW_DATA); ?>js/jquery.flot.pie.js"></script>
	<script src="<?php echo (VIEW_DATA); ?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo (VIEW_DATA); ?>js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.noty.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.raty.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/counter.js"></script>
	
		<script src="<?php echo (VIEW_DATA); ?>js/retina.js"></script>

		<script src="<?php echo (VIEW_DATA); ?>js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>