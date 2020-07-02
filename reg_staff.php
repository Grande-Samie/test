<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/staffsign.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="staff_regsubmit.php">
	<div class="input-group">
		<label>Firstname</label>
		<input type="text" name="f_name" value="">
		<label>Surname</label>
		<input type="text" name="s_name" value>
		<label>Othernames</label>
		<input type="text" name="o_name" value="">	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">

	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>