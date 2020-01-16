
 <?php 
	require('PHPMailer/PHPMailerAutoload.php'); 
	require('crediantial.php');
	error_reporting(0);
	
?>
    <?php include '../lib/Database.php'; ?>
    <?php include '../config/config.php'; ?>
    <?php include '../helpers/format.php'; ?>

    <?php 

    $db = new Database();
    $fm = new Format();

    ?>

    <?php 

    if (isset($_SESSION['mysession']) !="") {
    	header("location:login.php");
    }
     ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name 		= $fm->validation($_POST['name']);
		$username 	= $fm->validation($_POST['username']);
		$email 		= $fm->validation($_POST['email']);
		$password 	= $fm->validation($_POST['password']);
		$repassword = $fm->validation($_POST['repassword']);


		$name 		= mysqli_real_escape_string($db->link, $name);
		$username 	= mysqli_real_escape_string($db->link, $username);
		$email 		= mysqli_real_escape_string($db->link, $email);
		$password 	= mysqli_real_escape_string($db->link, $password);
		$repassword = mysqli_real_escape_string($db->link, $repassword);
		

		$hash_password = password_hash($password, PASSWORD_DEFAULT);
		$token      = md5(uniqid(rand()));
		
		
		
		$check_email = "SELECT * FROM register WHERE email = '$email'";
		$post  =$db->SELECT($check_email);
		$count =$post->num_rows;
		

		if ($password !== $repassword) {
			echo "Password and Cofirm-Password dont match";
		}elseif ($count == false) {
		$select = "INSERT INTO register(name,username,email,password,token,status)VALUES('$name','$username','$email', '$hash_password','$token','Inactive' )";
		$result = $db->INSERT($select);

		$lastId = mysqli_insert_id($db->link);

		$url = 'http://'.$_SERVER['SERVER_NAME'].'/Developer-Arefin.github.io/admin/verify.php?id='.$lastId.'&token='.$token;                                // Set email format to HTML
		
		$output = '<div>Thanks for registering with localhost. Please click this link to complete this registation <br>'.$url.'</div>';
			if ($result == true) {

			$mail = new PHPMailer();
			$mail->isSMTP();  
			//$mail->SMTPDebug = 2;                                   // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  					// Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 		// SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'info');
			$mail->addAddress($email, $name);     // Add a recipient
			
			//$mail->addAddress('ellen@example.com');               // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			
			
			$mail->isHTML(true);

			$mail->Subject = 'Register confirmation';
			$mail->Body    = $output;
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$msg = '<div class="alert alert-success">Congratulation, Your registration has been successful. please verify your account.</div>';
			}
			}else{
				echo "Problem found";
			}
		}else{

			echo "Email Alreday exists";
		}
	
	}



 ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>registration</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<?php 
		if ($msg) {
			echo $msg;
		}
	 ?>
	<section id="content">
		<form action="" method="post">
			<h1>Registration Here!!</h1>
			<div>
				<input type="text" placeholder="Name" required="" name="name"/>
			</div>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="text" placeholder="email" required="" name="email"/>
			</div>

			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="password" placeholder="Con-Password" required="" name="repassword"/>
			</div>
			<div>
				<input type="submit" value="Singup" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>