			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Uploaded Documents</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php if(count($document_list)){?>
						<table class="table table-bordered table-striped table-condensed">
						  <thead>
							  <tr>
								  <th>Title</th>
								  <th>Description</th>
								  <th>Thumbnil</th>
								  <th>Action</th>
							  </tr>
						  </thead> 
							 <?php foreach ($document_list as $doc): ?>
							<tr>
								<td><?=$doc->doc_title;?></td>
								<td class="center"><?=$doc->doc_description;?></td>
								<td class="center"><a href="<?=base_url().'/uploaded_files/'.$doc->filename;?>" target="_blank"><img src="<?=base_url().'/uploaded_files/'.$doc->filename;?>" width="100"></a></td>

							<td class="center">
							<a href="<?php echo site_url('doc_manager/req_form')?>/<?=$doc->doc_id;?>/<?=$doc->filename;?>"><button class="btn btn-primary">Send For Verification</button></a>

							<a href="<?php echo site_url('doc_manager/delete_doc')?>/<?=$doc->doc_id;?>" class="btn btn-danger">Delete</a>

							</td>
								
							</tr>
							<?php endforeach ?>
						 </table>
						  <?php }?>
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