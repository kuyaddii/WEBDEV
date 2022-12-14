

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>

	<link rel="stylesheet" type="text/css" href="styleReg.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

	<div class="box">

		<form action="login.php" method="POST">
			
			<a href="landingpage.php"><img src="Logo2.png" width="40px", height="40px"></a>
			<h2>REGISTRATION</h2>
			
			<div class="inputBox">
			<input class="form-control" type="text" name="username" required>
				<span>Userame</span>
				<i></i>
			</div>

			<div class="inputBox">
			<input class="form-control" type="password" name="password" required>
				<span>Password</span>
				<i></i>
			</div>

			<div class="inputBox">
			<input class="form-control" type="email" name="email" required>
				<span>Email</span>
				<i></i>
			</div>

			<input class="btn btn-primary" type="submit"  value="Register" name="create">

			<div class="links">
				<a href="../login/login.php"> Already have an account? Sign-in </a>
			</div>
			
		</form>
	</div>
</body>
</html>