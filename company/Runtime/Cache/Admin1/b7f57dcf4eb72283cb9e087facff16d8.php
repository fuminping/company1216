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
	<script src="<?php echo (VIEW_DATA); ?>js/jquery-1.9.1.min.js"></script>

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
								<i class="halflings-icon white user"></i> <?php echo (session('users')); ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> 锁定</a></li>
								<li><a href="<?php echo U('Member/MemberOut');?>"><i class="halflings-icon off"></i> 退出</a></li>
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
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> 商品管理</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('GoodsAction/GoodsAdd');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 添加商品</span></a></li>
								<li><a class="submenu" href="<?php echo U('GoodsAction/GoodsList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 商品列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('GoodsAction/GoodsSub');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 商品分类</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 用户管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('MemberAction/UserList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 用户列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('MemberAction/AdminList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 管理员列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('MemberAction/RoleList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 角色列表</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 订单管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('OrderAction/OrderList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 订单列表</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 评价管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('CommentAction/CommentList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 评价列表</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 资讯管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('ArticleAction/ArticleList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 资讯列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('ArticleAction/ArticleSub');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 资讯分类</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 广告管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('AdvertAction/AdvertList');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 广告列表</span></a></li>
								<li><a class="submenu" href="<?php echo U('AdvertAction/AdvertSub');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 广告分类</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> 统计管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('StatisticsAction/UserStatistic');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 用户统计</span></a></li>
								<li><a class="submenu" href="<?php echo U('StatisticsAction/SaleStatistic');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 销售额统计</span></a></li>
								<li><a class="submenu" href="<?php echo U('StatisticsAction/GoodsStatistic');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 商品统计</span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> 权限管理</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo U('AuthAction/UserAuth');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 用户权限</span></a></li>
								<li><a class="submenu" href="<?php echo U('AuthAction/MenuAuth');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> 菜单权限</span></a></li>
							</ul>
						</li>
						<li><a href="<?php echo U('SystemAction/Setting');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> 系统管理</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
	
<script src="<?php echo (TEMDIR_URL); ?>plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>	
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
				<a href="index.html">系统管理</a>
				<i class="icon-angle-right"></i> 
			</li>
			<li>
				<i class="icon-edit"></i>
				<a href="#">配置信息</a>
			</li>
		</ul>
	
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>配置信息</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal">
				  <fieldset>
					<div class="control-group">
					  <label class="control-label">网站标题 </label>
					  <div class="controls">
						<input type="text" placeholder="网站标题" class="span6 typeahead" id="typeahead">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">网站关键词 </label>
					  <div class="controls">
						<input type="text" placeholder="网站关键词" class="span6 typeahead" id="typeahead">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">网站描述 </label>
					  <div class="controls">
						<textarea class="span6 typeahead" rows='5' cols='6'></textarea>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">网站LOGO </label>
					  <div class="controls">
						<input type="file" name="weblogo" id="file_logo" class="form-control tagClose input-lg" value="">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">网站背景图 </label>
					  <div class="controls">
						<input type="file" name="webbackground" id="file_background" class="form-control tagClose input-lg" value=""></div>
					</div>
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">保存</button>
					  <button type="reset" class="btn">取消</button>
					</div>
				  </fieldset>
				</form>   

			</div>
		</div><!--/span-->

	</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	<div class="clearfix"></div>
<script type="text/javascript">
	<?php $timestamp = time();?>

	$('#file_logo').uploadify({
		'formData'     : {
			'timestamp' : '<?php echo $timestamp;?>',
			'token'     : "<?php echo md5('cmh1993' . $timestamp);?>"
		},
		'swf'         : '<?php echo (TEMDIR_URL); ?>plugins/uploadify/uploadify.swf',
		'uploader' : "<?php echo U('Commons/ImagesUploads');?>",
		'onUploadSuccess' : function(file, data, response) {
			
		}
	});
	
	$('#file_background').uploadify({
		'formData'     : {
			'timestamp' : '<?php echo $timestamp;?>',
			'token'     : "<?php echo md5('cmh1993' . $timestamp);?>"
		},
		'swf'         : '<?php echo (TEMDIR_URL); ?>plugins/uploadify/uploadify.swf',
		'uploader' : "<?php echo U('Commons/ImagesUploads');?>",
		'onUploadSuccess' : function(file, data, response) {
			
		}
	});

</script>	
<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		
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