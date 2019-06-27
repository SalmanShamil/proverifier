 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url('assets/dashboard/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/dashboard/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url('assets/dashboard/css/style.css')?>" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url('assets/dashboard/css/style-responsive.css')?>" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/dashboard/img/favicon.ico')?>">
	<!-- end: Favicon -->	
		
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
				<a class="brand" href="index.html"><span>Metro</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!---start: Proverifier notification dropdown start-->
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
										<span class="message">Transaction was canceled</span>
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
						<!-- end: Notifications Dropdown -->
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Łukasz Holeczek
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
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
							<a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> My Profile</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet">View Profile</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Edit Profile</span></a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icon-edit"></i><span class="hidden-tablet"> My verification</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> My verification</span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet">View List</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Send Request</span></a></li>
							</ul>
						</li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Point Purchase</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet">Account Setting</span></a></li>
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
								<a href="index.html">Home</a>
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<i class="icon-edit"></i>
								<a href="#">Forms</a>
							</li>
						</ul>

						<div class="row-fluid sortable">
							<div class="box span12">
								<div class="box-header" data-original-title>
									<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
									<div class="box-icon">
										<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
										<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
										<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
									</div>
								</div>
								<div class="box-content">
						<form class="form-horizontal" method="post" action="<?php echo site_url('send_request/document_upload')?>" enctype="multipart/form-data">
<!--Start:Form Field-->
						<fieldset>
										<div class="control-group">
										  <label class="control-label" for="typeahead">Document Title:</label>
										  <div class="controls">
											<input type="text" name="doc_title" class="span6 typeahead" id="typeahead">
										  </div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="typeahead">Document Type </label>
										  <div class="controls">
											<input type="text" name="doc_type" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Certificate","ID","Passport"]'>
											<p class="help-block">Try to select from the suggesitions</p>
										  </div>
										</div>


										<div class="control-group">
										  <label class="control-label" for="date01">Document Description:</label>
										  <div class="controls">
											<input type="text" name="doc_description" class="ispan6 typeahead">
										  </div>
										</div>

										<div class="control-group">
										  <label class="control-label" for="fileInput">Upload Documents:</label>
										  <div class="controls">
											<input class="input-file uniform_on" id="fileInput" type="file" name="userfile[]" accept=".png,.jpg,.jpeg,.gif,.pdf" multiple>
										  </div>
										</div>

										<div class="form-actions">
										  <button type="submit" class="btn btn-primary">Upload Documents</button>
										  <button type="reset" class="btn">Cancel</button>
										</div>
									  </fieldset>
<!--End:Form Field-->
									</form>

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
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="<?php echo base_url('assets/dashboard/js/jquery-1.9.1.min.js')?>"></script>
	    
	    <script src="<?php echo base_url('assets/dashboard/js/jquery-migrate-1.0.0.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery-ui-1.10.0.custom.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.ui.touch-punch.js')?>"></script>

		<script src="js/modernizr.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/bootstrap.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.cookie.js')?>"></script>

		<script src='<?php echo base_url('assets/dashboard/js/jquery.dataTables.min.js')?>'></script>

		<script src="<?php echo base_url('assets/dashboard/js/excanvas.js')?>"></script>
		<script src="<?php echo base_url('assets/dashboard/js/jquery.flot.js')?>"></script>
		<script src="<?php echo base_url('assets/dashboard/js/jquery.flot.pie.js')?>"></script>
		<script src="<?php echo base_url('assets/dashboard/js/jquery.flot.stack.js')?>"></script>
		<script src="<?php echo base_url('assets/dashboard/js/jquery.flot.resize.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.chosen.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/s/jquery.uniform.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.cleditor.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.noty.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.elfinder.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.raty.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.iphone.toggle.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.uploadify-3.1.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.gritter.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.imagesloaded.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.masonry.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.knob.modified.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/jquery.sparkline.min.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/counter.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/retina.js')?>"></script>

		<script src="<?php echo base_url('assets/dashboard/js/custom.js')?>"></script>
	<!-- end: JavaScript-->

</body>
</html>

