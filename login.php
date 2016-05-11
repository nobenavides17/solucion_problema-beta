
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!--////////////////////////////////// -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/login.js"></script>

	<!--////////////////////////////////// -->

</head>
<body>
		<div id="login-form">
			<input type="radio" checked id="login" name="switch" class="hide">
			<input type="radio" id="signup" name="switch" class="hide">
			<div>
				<ul class="form-header">
					<li><label for="login"><i class="fa fa-lock"></i> LOGIN<label for="login"></li>
				</ul>
			</div>
			<div class="section-out">
				<section class="login-section">
					<div class="login">
						<form action="sesiones.php" method="post">
							<ul class="ul-list">
								<li><input name="user" type="text" required class="input" placeholder="Usuario"/><span class="icon"><i class="fa fa-user"></i></span></li>
								<li><input name="pass" type="password" required class="input" placeholder="Password"/><span class="icon"><i class="fa fa-lock"></i></span></li>
								<li>
									<label>Sucursal: </label>
									<select name="sucursal" id="sucursales">
									
									</select>
								</li>

								<li><input type="submit" value="ENTRAR" class="btn"></li>
							</ul>
						</form>
					</div>
				</section>
			</div>

		</div>

</body>
</html>