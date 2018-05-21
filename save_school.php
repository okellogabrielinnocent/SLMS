
		<?php
		include('dbcon.php');
		include('session.php');
		
		$snnmber = $_POST['centre_num'];
		$sname = $_POST['school_name'];
		$contact1 = $_POST['contact1'];
		$contact2 = $_POST['contact2'];
	
		$address = $_POST['address'];
		$stype = $_POST['school_type'];
		$location = $_POST['location'];
		$ipaddress = $_POST['pub_ip_add'];
		$isp = $_POST['isp_id'];
		
	
		
		mysqli_query($connection,"insert into students(snnmber,sname,contact1,contact2,address,location,stype,gsname,gcontact1,,tel,,,)values ('$centre_num','$school_name','$contact1','$contact2','$dob','$address','$school_type','$location','$pub_ip_add','$isp_id','$','$tel','$','$','$')")or die(mysqli_error());
		
		mysqli_query($connection,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Student $centre_num $school_name')")or die (mysqli_error());
		
		$result = mysqli_query($connection,"select * from students where snnmber='$centre_num' AND sname='$school_name' AND contact1='$contact1' AND tel='$tel' ")or die(mysqli_error());
		while($row = mysqli_fetch_array($result)){
				$student_id = $row['student_id'];
		}
		$result1 = mysqli_query($connection,"select * from class where class_name='$school_type'  ")or die(mysqli_error());
		while($row1 = mysqli_fetch_array($result1)){
				$myfee = $row1['fee'];
		}
		
		if($=='paying'){
			$_fee =$myfee;
		}else
		if($=='exempted'){
			$_fee =0;
		}else
		if($=='half'){
			$_fee =$myfee/2;
		}else
		if($=='quarter'){
			$_fee =$myfee/4;
		}
		
		mysqli_query($connection,"insert into janmar (student_id,class,class_fee,,_fee,fee) values('$student_id','$school_type','$myfee','$','$_fee','0')")or die (mysqli_error());
		mysqli_query($connection,"insert into aprjun (student_id,class,class_fee,,_fee,fee) values('$student_id','$school_type','$myfee','$','$_fee','0')")or die (mysqli_error());
		mysqli_query($connection,"insert into julsep (student_id,class,class_fee,,_fee,fee) values('$student_id', '$school_type','$myfee','$','$_fee','0')")or die (mysqli_error());
		mysqli_query($connection,"insert into octdec (student_id,class,class_fee,,_fee,fee) values('$student_id','$school_type','$myfee','$','$_fee','0')")or die (mysqli_error());
		?>