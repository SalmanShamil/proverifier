
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