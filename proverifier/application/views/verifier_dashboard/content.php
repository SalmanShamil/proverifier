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