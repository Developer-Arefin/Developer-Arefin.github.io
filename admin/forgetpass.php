 <?php 
  require('PHPMailer/PHPMailerAutoload.php'); 
  require 'PHPMailer/class.phpmailer.php';
  require('crediantial.php');
  //error_reporting(0);
  
?>
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
    $txtemail     = $fm->validation($_POST['txtemail']);

    $txtemail     = mysqli_real_escape_string($db->link, $txtemail);

    $check_email = "SELECT * FROM register WHERE email = '$txtemail'";
    $post  =$db->SELECT($check_email);
    if ($post == true) {
    $result =mysqli_fetch_array($post);
    $count =$post->num_rows;
    if ($count == true) {
        
        $id =base64_encode($result['id']);
        $uptoken=md5(uniqid(rand()));

        $query = "UPDATE register SET token ='$uptoken' WHERE email ='$txtemail'";
        $post  =$db->UPDATE($query);

    $url = 'http://'.$_SERVER['SERVER_NAME'].'/Developer-Arefin.github.io/admin/changepassword.php?id='.$id.'&token='.$uptoken;                                // Set email format to HTML
    
    $output = '<div>Thanks for Confirmation with localhost. Please click this link to complete this registation <br>'.$url.'</div>';
        if ($post == true ) {
      $mail = new PHPMailer();
      $mail->isSMTP();  
      //$mail->SMTPDebug = 2;                                   // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';           // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAIL;                    // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom(EMAIL, 'info');
      $mail->addAddress($txtemail, 'Sir');     // Add a recipient
      
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
        $msg = '<div class="alert alert-success">Thanks for generat your email, Please check your email and verify your account</div>';
      }
      }else{
        echo "Problem found";
      }

    }else{
      echo "Sorry! Your email is not found";
    }

}
}

 ?>



<!DOCTYPE html>
<html>
  <head>
    <title>Forgot Password</title>
  </head>
  <body >
    <div>
    <?php 
    if ($msg) {
     echo $msg;
    }
     ?>
      <form  action=" " method="post">
        <h2>Forgot Password</h2><hr />
		
			<div>
			Please enter your email address. You will receive a link to create a new password via email.!
			</div>  
	
        <input type="email" placeholder="Email address" name="txtemail" required />
     	<hr />
        <button type="submit" name="btn-submit">Generate new Password</button>
      </form>

    </div>
    
  </body>
</html>