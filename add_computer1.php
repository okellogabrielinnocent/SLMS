   <div class="row-fluid">
                        <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add Computer</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
					<form method="post" id="add_class1">
							<div class="control-group">
                              <div class="controls">
							  <label>School Name</label>
							  <select name="schoolname" class="span5" required>
										<option></option>
										<?php 
										$result = mysqli_query($connection,"select * from school_det ")or die(mysql_error());
										while($row = mysqli_fetch_array($result)){
										$myclass = $row['school_name'];			
										?>
										<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
											<?php }?>
									</select>
                                
                              </div>
                            </div>
							 
							<div class="control-group">
                              <div class="controls">
							  <label>Computer Name</label>
                               <input class="input focused"  name="class_name" id="focusedInput" type="text" placeholder = "Computer Name" required>
                              </div>
                            </div>
							
							<div class="control-group">
                              <div class="controls">
							  <label>MAC Address</label>
                                <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "MAC Address" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <div class="controls">
							  <label>OS Installed</label>
                                <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "Operating System Installed" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <div class="controls">
							  <label>RAM memory</label>
                                <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "RAM memory" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <div class="controls">
							  <label>Processor</label>
                                <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "Processor" required>
                              </div>
                            </div>
							<div class="control-group">
                              <div class="controls">
									<button  data-placement="right" title="Click to Save" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Save</button>
											<script type="text/javascript">
											$(document).ready(function(){
												$('#save').tooltip('show');
												$('#save').tooltip('hide');
											});
											</script>
                              </div>
                            </div>
                    </form>
					</div>
                </div>
            </div>
            <!-- /block -->
        </div>
		<script>
			jQuery(document).ready(function($){
				$("#add_class1").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_class.php",
						data: formData,
						success: function(html){
							$.jGrowl("Computer Successfully  Added", { header: 'Computer Added' });
							window.location = 'add_class.php';  
						}
					});
				});
			});
			</script>
					