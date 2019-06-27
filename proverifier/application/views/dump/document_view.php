<h2>List of Pictures</h2>
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
		  </tr>
		<?php endforeach ?>
		</tbody>
	  </table>
	  <br />
	   <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">Upload More</a>
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>