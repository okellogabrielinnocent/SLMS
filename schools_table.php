<?php include('dbcon.php'); ?>
	<form action="delete_stud.php" method="post">
		<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
			<div class="pull-right">
			 	<a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
				<a href="add_school.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add School</a>
			</div>
			<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>
			<?php include('modal_delete.php'); ?>
			<thead>
			<tr>
				<th class="empty"></th>
				<th>Name</th>
				<th>Centre No</th>
				<th>Contact 1</th>
				<th>Contact 2</th>
				<th>Location</th>
				
				<th class="empty"></th>
			</tr>
			</thead>
			<tbody>
			<?php

			$query = mysqli_query($connection,"select * from school_det ")or die(mysql_error());
			while($row = mysqli_fetch_array($query)){
			$id = $row['school_id'];
			?>
			<tr>
			<td class="empty" width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
			<td><?php echo $row['school_name'];?></td> 
			<td><?php echo $row['centre_num']; ?></td> 
			<td><?php echo $row['contact1']; ?></td> 
			<td><?php echo $row['contact2']; ?></td>
			<td><?php echo $row['location']; ?></td>
			
							
			
			<td class="empty" width="160">
			<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="edit_stud.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
				<script type="text/javascript">
				$(document).ready(function(){
					$('#edit<?php echo $id; ?>').tooltip('show');
					$('#edit<?php echo $id; ?>').tooltip('hide');
				});
				</script>
					<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_school.php<?php echo '?id='.$id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#view<?php echo $id; ?>').tooltip('show');
						$('#view<?php echo $id; ?>').tooltip('hide');
					});
				</script>
			</td>
			</tr>
			<?php } ?>    
		
			</tbody>
		</table>
	</form>