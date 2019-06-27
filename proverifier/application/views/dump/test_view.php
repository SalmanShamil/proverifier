<?php if(count($document_list)){?>
	<table class="table table-bordered">
		<thead>
		  <tr>
			<th>Title</th>
			<th>Description</th>
			<th>Thumbnail</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach ($document_list as $doc): ?>
		  <tr>
			<td><?=$doc->doc_title;?></td>
			<td><?=$doc->doc_description;?></td>
			<td><a href="<?=base_url().'/uploaded_files/'.$doc->filename;?>" target="_blank"><img src="<?=base_url().'/uploaded_files/'.$doc->filename;?>" width="100"></a></td>
			<td><?=$doc->filename;?></td>
		  </tr>
		<?php endforeach ?>
		</tbody>
	  </table>
  <?php }?>