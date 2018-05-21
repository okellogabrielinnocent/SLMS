<?php include('header.php'); ?>
<?php include('session.php'); ?>
 <?php       require_once 'dbcon.php';?>
    <body >
		<?php include('navbar.php') ?>
                <center><img src="images/topbar.png"></center>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">STATISTICS</div>
                            </div>
                            <div class="block-content collapse in">
							    <div class="span12">
						
									<?php 
    								$query_students = mysqli_query($connection,"select * from students  ");
    								$count_students = mysqli_num_rows($query_students);
    								?>
								
                                    <div class="span3">
                                        <div class="chart-bottom-heading"><strong>CENTRAL</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_students; ?>"><?php echo $count_students; ?></div>                                
                                    </div>
								
    								<?php 
    								$query_class = mysqli_query($connection,"select * from class");
    								$count_class = mysqli_num_rows($query_class);
    								?>
								
								
                                    <div class="span3">
                                        <div class="chart-bottom-heading"><strong>WESTERN</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    </div>
    								<?php 
    																
    								$query_nursery = mysqli_query($connection," select * from students, class where students.class = class.class_name AND class.category ='Nursery'");
    								
    								$count_nursery = mysqli_num_rows($query_nursery);
    								
    								?>
								
                                    <div class="span3">
                                        <div class="chart-bottom-heading"><strong>EASTERN</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_nursery; ?>"><?php echo $count_nursery; ?></div>
                                    </div>
								
    								<?php 
    								$query_primary = mysqli_query($connection," select * from students, class where students.class = class.class_name AND class.category ='Primary'");
    								$count_primary = mysqli_num_rows($query_primary);
    								?>
								
                                    <div class="span3">
                                        <div class="chart-bottom-heading"><strong>NORTHEN</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_primary; ?>"><?php echo $count_primary; ?></div>
                                    </div>
								
								    
                                    
									<?php 
    								$query_computers = mysqli_query($connection," select * from comp_det");
    								$count_computers = mysqli_num_rows($query_computers);
    								?>
								
                                    <div class="span3">
                                        <div class="chart-bottom-heading"><strong>TOTAL NUMBER OF COMPUTERS IN ALL SCHOOL</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_computers ?>"><?php echo $count_computers ?></div>
                                    </div>
								
								
									<?php 
    								$query_admin = mysqli_query($connection," select * from users where status='administrator' ");
    								$count_admin = mysqli_num_rows($query_admin);
    								?>
								
                                    <div class="span3">
                                        <div class="chart-bottom-heading"><strong>ADMIN USERS</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_admin ?>"><?php echo $count_admin ?></div>
                                    </div>
								
									<?php 
    								$query_normal = mysqli_query($connection," select * from users where status='normal'");
    								$count_normal = mysqli_num_rows($query_normal);
    								?>
								
                                    <div class="span3">
                                         <div class="chart-bottom-heading"><strong>NORMAL USERS</strong></div>
                                        <div class="chart" data-percent="<?php echo $count_normal; ?>"><?php echo $count_normal; ?></div>
                                    </div>
								</div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                </div>
            </div>
    
         <?php include('footer.php'); ?>
		</div>
	<?php include('script.php'); ?>
    </body>
</html>