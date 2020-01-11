<?php 

    
    session_start();


if (!isset($_SESSION['mysession'])) 
{
	header("Location: login.php");
}
?>

    <?php include '../lib/Database.php'; ?>
    <?php include '../config/config.php'; ?>
    <?php include '../helpers/format.php'; ?>



    <?php 

    $db = new Database();
    $fm = new Format();

    ?>


<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$firstname = $fm->validation($_POST['firstname']);
		$lastname = $fm->validation($_POST['lastname']);
		$username = $fm->validation($_POST['username']);
		$email = $fm->validation($_POST['email']);
		$password = $fm->validation($_POST['password']);
		

		$firstname = mysqli_real_escape_string($db->link,$firstname);
		$lastname = mysqli_real_escape_string($db->link,$lastname);
		$username = mysqli_real_escape_string($db->link,$username);
		$email = mysqli_real_escape_string($db->link,$email);
		$password = mysqli_real_escape_string($db->link,$password);

		$hash_password = password_hash($password, PASSWORD_DEFAULT);
	
	$check_email = "SELECT * FROM tbl_user WHERE email='$email'";
	$check_post  =$db->SELECT($check_email);
	if ($check_post== false) {
		$query ="INSERT INTO tbl_user (firstname,lastname,username,email,password) VALUES('$firstname','$lastname','$username','$email','$hash_password')";
		$post =$db->INSERT($query);
		if ($post) {
			echo "Data inserted";
		}else{
			echo "Data Not ";
		}

	}else{
		echo "ALredery";
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