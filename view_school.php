<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $prov=$row['isp_id'];?>
    <body>
		<?php include('navbar.php'); ?>
		        <center><img src="images/topbar.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_add_school.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
									<a href="schools.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                            <div class="span6">
								<?php
								$query = mysqli_query($connection,"select * from school_det where school_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								
								?>
								<div class="alert alert-success">SCHOOL DETAILS</div>
								
								Name: <strong><?php echo $row['school_name']; ?></strong><hr>
								Contact 1: <strong><?php echo $row['contact1']; ?></strong><hr>
								Contact 2: <strong><?php echo $row['contact2']; ?></strong><hr>
								Address: <strong><?php echo $row['location']; ?></strong><hr>
								Type: <strong><?php echo $row['school_type']; ?></strong><hr>
								Public IP Adress: <strong><?php echo $row['pub_ip_add']; ?></strong><hr>								
							</div>
							<div class="span5">
								<?php
								$query2 = mysqli_query($connection,"select * from districts where district_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query2);
								?>
								<div class="alert alert-success">LOCATION</div>
								Region: <strong><?php echo $row['region']; ?></strong><hr>
								District: <strong><?php echo $row['district']; ?></strong><hr>
																
							</div>
							
							<div class="span12">
								
								<hr>
								<div class="alert alert-success">ISP DETAILS</div>
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
								
								<thead>
								<tr>
									<th>Provider Name</th>
									<th>IPaddress</th>
									<th>Location</th>
									<th>Contact</th>
									
									<th class="empty"></th>
								</tr>
								</thead>
								<tbody>
								<?php
								$query3 = mysqli_query($connection,"select * from isp_det where isp_id = '$prov'")or die(mysqli_error());
								$row = mysqli_fetch_array($query3);
								?>
								<tr>
								<td><?php echo $isp = $row['name'];?></td> 
								<td><?php echo $row['ip_address']; ?></td> 
								<td><?php echo $row['location']; ?></td> 
								<td><?php echo $row['contact']; ?></td>								
								</tr>
								</tbody>
								</table>
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