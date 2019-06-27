<div id="content" class="span10">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a>
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<i class="icon-edit"></i>
								<a href="#">Profile</a>
							</li>
						</ul>

				<div class="row-fluid sortable">

						<div><img src="img/avatar.jpg" style="border-radius: 50%; display: block; margin-left: auto; margin-right: auto; width: 150px; height: 150px"></div>
						<div class="col-md-4 text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><button class="btn btn-primary center-block">Change Profile Picture</button></div>

				<div class="box span12">
					<div class="box-header">
						<h2 style="text-align: center;"><strong><?php echo $this->session->userdata('name');?></strong></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">  
							  <tbody>
								<tr>
									<td>Full Name:</td>
									<td class="center"><strong><?php echo $this->session->userdata('name');?></strong></td>                                    
								</tr>
								<tr>
									<td>Username:</td>
									<td class="center"><strong><?php echo $this->session->userdata('username');?></strong></td>                                    
								</tr>
								<tr>
									<td>User Type:</td>
									<td class="center"><strong>Verifier</strong></td>                                    
								</tr>
								<tr>
									<td>Email:</td>
									<td class="center"><strong><?php echo $this->session->userdata('email');?></strong></td>                                    
								</tr>
								                          
							  </tbody>
						 </table>  

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