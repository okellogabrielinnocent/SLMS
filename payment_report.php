<?php include('header.php'); ?>
<?php include('session.php'); ?>

  <body id="login">
  	<?php include('navbar.php'); ?>
		<center><img src="images/topbar.png"></center>
    <div class="container">

    	<form id="change_password" class="form-signin" method="post" action="pay_report.php">
			<a href="fees.php"><i class="icon-arrow-left icon-large"></i> Back</a>
	        <h3 class="form-signin-heading"><i class="icon-search"></i>     SEARCH FILTER</h3>
			<div class="control-group">
		      	<div class="controls">
			  		<label>Period</label>
				  	<select name="period" onchange="document.myform.formVar.value=this.value" required>
						<option></option>
						<option value ="janmar">Jan-Mar </option>
						<option value ="aprjun">Apr-Jun </option>
						<option value ="julsep">Jul-Sep </option>
						<option value ="octdec">Oct-Dec </option>
					</select>
				</div>
	        </div>
											
			<div class="control-group">
	          <div class="controls">				
			  <label>Class</label>
			  <select name="class"onchange="document.myform.formVar.value=this.value" required>
			  <option></option>
			  <?php 
					$query = mysqlI_query($connection,"select * from class")or die(mysql_error());
					while($row =mysqlI_fetch_array($query)){
					$class_name = $row['class_name'];

				?>
					
					<option value ="<?php echo $class_name;?>"><?php echo $class_name;?></option>
					<?php }?>
					</select>
	            
	          </div>
	        </div>
											
			<div class="control-group">
	          <div class="controls">
			  <label>Criteria</label>
			  <select name="criteria" onchange="document.myform.formVar.value=this.value" required>
					<option></option>
					<option value ="paid">Paid </option>
					<option value ="not_paid">Not Paid</option>

				</select>
	            
	          </div>
	        </div>
										
											
											
			<div class="control-group">
	          <div class="controls">
					<button  data-placement="right" title="Click to Search" id="search" name="search" class="btn btn-inverse"><i class="icon-search icon-large"></i> Search</button>
					
					
	          </div>
	        </div>
		</form>
	</div> <!-- /container -->
	<?php include('footer.php'); ?>
	<?php include('script.php'); ?>
  </body>
</html>