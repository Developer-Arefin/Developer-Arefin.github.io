<?php 

    include '../lib/session.php'; 
    session::init();
?>

    <?php include '../lib/Database.php'; ?>
    <?php include '../config/config.php'; ?>
    <?php include '../helpers/format.php'; ?>



    <?php 

    $db = new Database();
    $fm = new Format();

    ?>


<?php 
if (isset($_SESS)) {
	# code...
}
	
 ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="First Name" required="" name="firstname"/>
			</div>
			<div>
				<input type="text" placeholder="Last Name" required="" name="lastname"/>
			</div>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="text" placeholder="Email" required="" name="email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Sign Up" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Developer Arefin Panel</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>