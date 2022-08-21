<!DOCTYPE html>
<html>
<head>
	<title>ShacozBabyShop</title>
	<link rel="stylesheet" type="text/css" href="signupstyle.css">
</head>
<body>
		 <div class="styling">
		 	<h2>CUSTOMER SIGNUP FORM</h2>
					<form method="post" action="customer_signup.php">
						<input type="text" name="firstname" placeholder="Firstname" style="width: 30%" required>
						
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" style="width: 30%"required>
						<br>
						<input type="text" name="lastname" placeholder="Lastname"  required>
								<br>
						<input type="text" name="address" placeholder="Address" required>
							<br>
						<input type="text" name="country" placeholder="Province" required>
							<br>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
							<br>
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11"  style="width: 30%" required="">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8"  style="width: 30%" required>
							<br>
						<input type="email" name="email" placeholder="Email" required>
							<br>
						<input type="password" name="password" placeholder="Password" required>
						<br>
					
					<input type="submit" name="signup" value="Sign Up">
					
					</form>
			</div>
        </div>

</body>
</html>