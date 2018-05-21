<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_add_school.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add School</div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="schools.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
								<script type="text/javascript">
								$(document).ready(function(){
									$('#return').tooltip('show');
									$('#return').tooltip('hide');
								});
								</script>                          
						    </div>
                            <div class="block-content collapse in">	
                            <!--Add student form-->					
							<form id="add_student" class="form-signin" method="post">
						<!-- span 4 -->
								<div class="span4">
										
									<label>SCHOOL CENTRE NO:</label>
									<input type="text" class="input-block-level"  name="snnmber" placeholder="Centre Number" required>
									<label>SCHOOL NAME:</label>
									<input type="text" class="input-block-level"  name="sname" placeholder="School Name" required>
									<label>CONTACT 1:</label>
									<input type="text" class="input-block-level"  name="contact1" placeholder="contact1" onkeydown='return(event.which >= 48 && event.which <= 57)
													|| event.which ==8 || event.which == 46' maxlength ="10" required>
									<label>CONTACT 2:</label>
									
									<input type="text" class="input-block-level"  name="contact2" placeholder="contact2" onkeydown='return(event.which >= 48 && event.which <= 57)
													|| event.which ==8 || event.which == 46' maxlength ="10" optional>
																	
								</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
								<div class="span4">
									<label>SCHOOL TYPE:</label>
									<select name="stype" class="span5" required>
										<option></option>
										<option>TERTAIRY</option>
										<option>SECONDARY</option>
										<option>PRIMARY</oSption>
									</select>
									<label>LOCATION:</label>
									<select name="location" class="span5" required>
										<option></option>
											<?php 
											$result = mysqli_query($connection,"select * from districts")or die(mysql_error());
											while($row = mysqli_fetch_array($result)){
											$myclass = $row['district'];			
											?>
										<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
											<?php }?>
									</select>
									<label>REGION:</label>
									<select name="region" class="span5" required>
										<option></option>
										<option>CENTRAL</option>
										<option>EASTERN</option>
										<option>NORTHERN</oSption>
										<option>WESTERN</oSption>
									</select>
								</div>
							<!--end span 4 -->	
							<!-- span 4 -->	
								<div class="span4">
									<label>PUBLIC IP ADDRESS:</label>
									<input type="text" Placeholder="IP Address" name="ipaddress" class="my_message" required>
									<?php
										// Variable to check
										$ip = "ipaddress";

										// Validate ip
										if (filter_var($ip, FILTER_VALIDATE_IP)) {
										    echo("$ip is a valid IP address");
										} else {
										    echo("$ip is not a valid IP address");
										}
										?>
									<label>ISP:</label>		
									<select name="isp" class="span5" required>
										<option></option>
										<?php 
										$result = mysqli_query($connection,"select * from isp_det ")or die(mysql_error());
										while($row = mysqli_fetch_array($result)){
										$myclass = $row['name'];			
										?>
										<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
											<?php }?>
									</select>		
									<label>Date:</label>
									<input type="date" class="input-block-level"  name="date" placeholder="Date of registration">
									
									
									<br>
									<br>
									<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Save </button>	
								</div>
						<!--end span 4 -->
						</form>						
								<script>
									jQuery(document).ready(function($){
									$("#add_student").submit(function(e){
										e.preventDefault();
										var _this = $(e.target);
										var formData = $(this).serialize();
										$.ajax({
											type: "POST",
											url: "save_school.php",
											data: formData,
											success: function(html){
												$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
												window.location = 'schools.php';  
												}
											});
										});
									});
								</script>
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