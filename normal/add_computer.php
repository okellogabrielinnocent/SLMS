<?php include('header.php'); ?>
<?php include('session.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
		        <center><img src="../images/topbar.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_add_computer.php'); ?>
				<div class="span3" id="">
				<?php  include('add_computer1.php');  ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
								<?php 
								$query = mysqli_query($connection,"select * from comp_det")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Computer List</div>
                                <div class="muted pull-right">
									Number of Computers: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span9">

                                	<!--===================================================================-->
                                	<form action="delete_stud.php" method="post">
										<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
											<div class="pull-right">
											 	<a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
												
											</div>
											<!--<a data-toggle="modal" href="#delete_computer" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>
											<script type="text/javascript">
											$(document).ready(function(){
												$('#delete').tooltip('show');
												$('#delete').tooltip('hide');
											});
											</script>
												<?php //include('modal_delete.php'); ?>-->
											<thead>
											<tr>
												<th class="empty">No:</th>
												<th>Computer Name</th>
												<th>MAC Address</th>
												<th>RAM </th>
												<th>Processor Details</th>
												<th>OS Details</th>												
											</tr>
											</thead>
											<tbody>
											<?php

											$query = mysqli_query($connection,"select * from comp_det ")or die(mysql_error());
											while($row = mysqli_fetch_array($query)){
											$id = $row['comp_id'];
											?>
											<tr>
											<td class="empty" width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
											<td><?php echo $row['comp_name'];?></td> 
											<td><?php echo $row['comp_mac']; ?></td> 
											<td><?php echo $row['comp_ram']; ?></td> 
											<td><?php echo $row['comp_proc']; ?></td>
											<td><?php echo $row['comp_os']; ?></td>
																							
											
											<td class="empty" width="160">
												<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_stud.php<?php echo '?id='.$id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> View Computer</a>
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

                                	
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>