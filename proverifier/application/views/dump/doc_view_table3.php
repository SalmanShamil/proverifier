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
									<h2><i class="halflings-icon edit"></i><span class="break"></span>Document Upload Form</h2>
									<div class="box-icon">
										<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
										<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
										<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
									</div>
								</div>
								<div class="box-content">
								<?php if(count($document_list)){?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Title</th>
								  <th>Description</th>
								  <th>Thumbnil</th>
								  <th>File</th>
							  </tr>
						  </thead>   
						  <tbody>
						<?php foreach ($document_list as $doc): ?>
							<tr>
								<td><?=$doc->doc_title;?></td>
								<td class="center"><?=$doc->doc_description;?></td>
								<td class="center"><a href="<?=base_url().'/uploaded_files/'.$doc->filename;?>" target="_blank"><img src="<?=base_url().'/uploaded_files/'.$doc->filename;?>" width="100"></a></td>

								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
							</tr>
							<?php endforeach ?>
							</tbody>
						 </table>

						 <?php }?>

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