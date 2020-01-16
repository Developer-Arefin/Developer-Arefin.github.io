    <?php include '../lib/Database.php'; ?>
    <?php include '../config/config.php'; ?>
    <?php include '../helpers/format.php'; ?>



    <?php 

    $db = new Database();
    $fm = new Format();

    ?>


<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<?php 
session_start();
if (isset($_SESSION['mysession']) !="") {
	header("location:index.php");
}
 ?>

 <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 	$email 	= $fm->validation($_POST['email']);
	$password 	= $fm->validation($_POST['password']);

	$email 	= mysqli_real_escape_string($db->link, $email);
	$password 	= mysqli_real_escape_string($db->link, $password);

	$query 	  = "SELECT * FROM register WHERE email = '$email' AND status ='Y'";
	$result   = $db->SELECT($query);
	

	$data = mysqli_fetch_array($result);
	$count=$result->num_rows;

		if (password_verify($password, $data['password']) && $count == 1) {
		$_SESSION['mysession'] = $data['id'];
		header("Location: index.php");
		}else{
			echo "Invlid Username or password.Please Confirm you account";
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
			</div>
			<div>
				<a style=" text-decoration: none; font-size: 15px; border: 2px solid blue; border-radius: 20px; padding-left: 15px; padding-right: 15px; padding-top: 5px; padding-bottom: 5px;  " href="register.php">Singup</a>
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="forgetpass.php">Forget your password?</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>