<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body >

		<?php include('navbar.php'); ?>
        <center><img src="images/topbar.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_schools.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                        <!-- THIS CONNECTION IS USED FOR COUNTING NUMBER OF SCHOOLS -->
						<?php
                         require_once 'dbcon.php';
							$query= mysqli_query($connection,"select * from school_det")or die(mysqli_error());
							$count = mysqli_num_rows($query);
						 ?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Schools List</div>
                                <div class="muted pull-right">
									Number of Schools: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Schools List</h2>
									<?php include('schools_table.php'); ?>
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