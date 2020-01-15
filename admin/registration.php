
<?php 
	session_start();
	if (isset($_SESSION['mysession']) !="") {
		header("location:index.php");
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
		$token =md5(rand('10000','99999'));
		$status ="Inactive";
		

		$firstname = mysqli_real_escape_string($db->link,$firstname);
		$lastname = mysqli_real_escape_string($db->link,$lastname);
		$username = mysqli_real_escape_string($db->link,$username);
		$email = mysqli_real_escape_string($db->link,$email);
		$password = mysqli_real_escape_string($db->link,$password);

		$hash_password = password_hash($password, PASSWORD_DEFAULT);
	
	$check_email = "SELECT * FROM tbl_user WHERE email='$email'";
	$check_post  =$db->SELECT($check_email);
	if ($check_post== false) {
		$query ="INSERT INTO tbl_user (firstname,lastname,username,email,password,token,status) VALUES('$firstname','$lastname','$username','$email','$hash_password','$token','$status')";
		$post =$db->INSERT($query);

    $last_id = mysqli_insert_id();
    $url     ='http://'.$_SERVER['SERVER_NAME'].'/send-mail-phpmailer/verify.php?id='.$last_id.'&token='.$token;
    $output  = '<div>Thanks For registration from localhost. Please clicke this link and confirm registraton <br>'.$url.'. </div>';

		if ($post) {


	require_once('mailer/class.phpmailer.php');
		
		$mail = new PHPMailer(true);
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($email);
		$mail->Username='arefinislam634@gmail.com';  
		$mail->Password='Arefin@#01315391066@#';            
		$mail->SetFrom('arefinislam634@gmail.com','New Horizons');
		 
		//$mail->AddReplyTo("araman666@gmail.com","New Horizons");
		$mail->Subject    = 'Registration Confirmation';
		$mail->MsgHTML($output);
		$mail->Send();
		if (!$mail->send()) {
			echo 'Message Count not be send';
			echo 'Mailer Error: '.$mail->ErrorInfo;
		}else{
			echo "Congratulation your registratonsuccesfullly please verified your email";
		}
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
				<a style=" text-decoration: none; border-radius: 5px; border: 1px solid#7E99C7 ; padding: 5px; font-size: 15px; font-weight: bold; " href="login.php"> Login Here</a>
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Developer Arefin Panel</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>