<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container min-vh-100 d-flex justify-content-center align-items-center">
		<div class="card border-dark mb-3" style="width: 600px">
			<h2 class="text-center">Login</h2>
			<form action="login.php" method="post" class="login">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<label>User Name</label><br>
				<input type="text" name="uname" placeholder="User Name" class="form-control"><br>

				<label>Password</label><br>
				<input type="password" name="password" placeholder="Password" class="form-control"><br>

				<button type="submit" class="btn btn-secondary">Login</button>
			</form>
		</div>

	</div>
				
	
</body>
</html>