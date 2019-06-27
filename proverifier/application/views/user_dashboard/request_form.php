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
									<h2><i class="halflings-icon edit"></i><span class="break"></span>Verification Request Form</h2>
									<div class="box-icon">
										<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
										<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
										<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
									</div>
								</div>
								<div class="box-content">
							<table class="table table-bordered table-striped table-condensed">
								<td><?php echo $doc_id;?></td>
							</tr>
							<tr>
								<td class="center"><img src="<?=base_url().'/uploaded_files/'.$filename;?>" width="100"></a></td>
							</tr>
						 </table>


						<form class="form-horizontal" method="post" action="<?php echo site_url('doc_manager/v_request')?>" enctype="multipart/form-data">
<!--Start:Form Field-->
						<fieldset>
										<div class="control-group">
										  <label class="control-label" for="typeahead">Enter verifier ID:</label>
										  <div class="controls">
											<input type="text" name="vrf_id" class="span6 typeahead" id="typeahead">
											<input type="hidden" name="doc_id" value="<?php echo $doc_id?>">
											<input type="hidden" name="filename" value="<?php echo $filename?>">
										  </div>
										</div>

										<div class="form-actions">
										  <button type="submit" class="btn btn-primary">Send Request</button>
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