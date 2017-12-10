<html>
	<head>
		<title>Registration</title>
		<script src = "js/jquery.js"></script>
		<script src = "bootstrap/js/bootstrap.js"></script>
		<link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class = "container">
			<img src="img/logo.jpg" class = "pull-right"class="img-rounded" width = "auto" height = "auto">
			<img src="img/logo.png" class="img-rounded" width = "auto" height = "auto">
			<h1 class = "text-center">JK Lakshmipat University</h1>			
			<h2 class = "text-center">Registration Form</h2>
			<form class = "form-horizontal" role = "form" action = "form_processc.php" method = "post">
				<div class = "form-group">
					<label for = "name" class = "control-label col-sm-3">Name of The First Student*</label>
					<div class = "col-sm-5">
						<input type="text" value = "" id="name" class = "form-control" name = "fname" placeholder = "Full Name " required>
					</div>
				</div>
				<div class = "form-group">
					<label for = "name" class = "control-label col-sm-3">Name of The Second Student*</label>
					<div class = "col-sm-5">
						<input type="text" value = "" id="name" class = "form-control" name = "sname" placeholder = "Full Name " required>
					</div>
				</div>
				<div class = "form-group">
					<label for = "name" class = "control-label col-sm-3">Name of The Third Student</label>
					<div class = "col-sm-5">
						<input type="text" value = "" id="name" class = "form-control" name = "tname" placeholder = "Full Name(optional) ">
					</div>
				</div>
				<div class = "form-group">
					<label for = "category" class = "control-label col-sm-3">Category</label>
					<div class = "col-sm-3">
						<select class ="form-control" name = "cat"required>
							<option value ="">Select Your Category</option>
							<option value ="1">11th and 12th Std.</option>
							<option value ="2">Undergraduates</option>
						</select>						
					</div>		
				</div>
				<div class = "form-group">
					<label for = "in" class = "control-label col-sm-3">Institution Name *</label>
					<div class = "col-sm-5">
						<input type = "text" value = "" id ="in" class = "form-control" name= "in" required>
					</div>
				</div>
				<div class = "form-group">
					<label for = "addin" class = "control-label col-sm-3">Address of Institution *</label>
					<div class = "col-sm-5">
						<input type = "text" value = "" id ="addin" class = "form-control" name= "add" placeholder ="Full Address"  required>
					</div>
				</div>
				<div class = "form-group">
					<label for = "number" class = "control-label col-sm-3">Mobile/Telephone No. *</label>
					<div class = "col-sm-5">
						<input type="text" value = "" id="number" class = "form-control" name = "mob" placeholder = "Mobile Number of First Student" required>
					</div>		
				</div>
				<div class = "form-group">
					<label for = "email" class = "control-label col-sm-3">E-mail Address *</label>
					<div class = "col-sm-5">
						<input type="email" value = "" id="email" class = "form-control" name = "email" placeholder = "Email Address of First Student" required>
					</div>		
				</div>
				<div class = "form-group">
					<label for = "ar" class = "control-label col-sm-3">Whether transportation required *</label>
					<div class = "col-sm-2">
						Yes<input type = "radio" value = "Yes" name = "ar" required/>
						No<input type = "radio" value = "No"name = "ar"/ required>
						</input>
					</div>		
				</div>
				<div class = "form-group">
					<label for = "pay" class = "control-label col-sm-3">Payement*</label>
					<div class = "col-sm-3">
						<select class ="form-control" name = "pay"required>
							<option value ="">Mode of Payement</option>
							<option value ="cash">Cash at University</option>
							<option value ="dd">DD</option>
						</select>						
					</div>		
				</div>
				<div class = "form-group">
					<label for = "dd" class = "control-label col-sm-3">DD no.</label>
					<div class = "col-sm-5">
						<input type="text" value = "" id="dd" class = "form-control" name = "dd" placeholder = "Enter your DD no.">
					</div>		
				</div>
				<div class = "form-group">
					<label for = "comments" class = "control-label col-sm-3"></label>
					<div class = "col-sm-5">
						<input type = "hidden" value = "yes" name = "validate">
						<input type = "submit" class = "btn btn-primary btn-block" name = "submit_form" value = "Submit form">
					</div>		
				</div>
			</form>
		</div>
	</body>
</html>
