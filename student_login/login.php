<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Σύνδεση</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="logo">
		<p style="text-align:center;"><img src="../askisi3/images/logo.png" alt="logo"></p>
	</div>
	<div class="header">
		<h2>Σύνδεση</h2>
	</div>

	<form method="post" action="index.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Διεύθυνση Email</label>
			<input type="text" name="email" style="height: 38px;" placeholder="E-mail" minlength="3" required="">
		</div>
		<div class="input-group">
			<label>Κωδικός</label>
			<input type="password" name="password"  style="height: 38px;" placeholder="Κωδικός" minlength="3" required="">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Σύνδεση</button>
		</div>
		<p>
			Δεν έχετε λογαριασμό; <a href="./student_login/register.php">Εγγραφή</a>
		</p>
	</form>


</body>
</html>
