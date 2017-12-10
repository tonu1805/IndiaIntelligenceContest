<?php 
	include 'includes/db.php';
	if(isset($_POST['submit_form'])){
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
		$tname = $_POST['tname'];
		$cat = $_POST['cat'];
		$institute = $_POST['in'];
		$address = $_POST['add'];
		$mob = $_POST['mob'];
		$email = $_POST['email'];
		
		$ins_sql = "INSERT INTO iicjklu(fname,sname,tname,cat,institute,address,mob,email) VALUES ('$fname','$sname','$tname','$cat','$institute','$address','$mob','$email')";
		$run_sql = mysqli_query($conn,$ins_sql);
	}

		if($run_sql)
		{
			echo"<script>alert('You are successfully Enrolled!')</script>";
			echo"<script>window.open('http://www.iic-jklu.16mb.com','_SELF')</script>";
		}
		else
		{
			echo"<script>alert('Some Problem has occured please try again after some time !')</script>";
			echo"<script>window.open('http://iic-jklu.16mb.com','_self')</script>";
		}
	

?>