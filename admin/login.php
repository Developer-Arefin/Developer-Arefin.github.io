
    <?php include '../lib/Database.php'; ?>
    <?php include '../config/config.php'; ?>
    <?php include '../helpers/format.php'; ?>



    <?php 

    $db = new Database();
    $fm = new Format();

    ?>

<?php 
	session_start();
	if (isset($_SESSION['mysession']) !="") {
		header("location:index.php");
		exit();
	}
 ?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {


		$email = $fm->validation($_POST['email']);
		$password = $fm->validation($_POST['password']);

		$email = mysqli_real_escape_string($db->link,$email);
		$password = mysqli_real_escape_string($db->link,$password);

		$query = "SELECT * FROM tbl_user WHERE email='$email'";
		$post  =$db->SELECT($query);
		if ($post) {
			$value = mysqli_fetch_array($post);
			$row   =mysqli_num_rows($post);

			if (password_verify($password, $value['password']) && $row == 1) 
			{
				$_SESSION['mysession'] = $value['user_id'];
				header("location:index.php");
			}else{
				echo "Invalid Username";
			}
		}

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
				<input type="text" placeholder="Email" required="" name="email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>

			<div>

				<input type="submit" value="Log in" />
				<a style=" text-decoration: none; border-radius: 5px; border: 1px solid#7E99C7 ; padding: 5px; font-size: 15px; font-weight: bold; " href="registration.php"> Signup Here</a>
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>