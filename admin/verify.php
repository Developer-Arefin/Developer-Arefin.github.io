 
    <?php include '../lib/Database.php'; ?>
    <?php include '../config/config.php'; ?>
    <?php include '../helpers/format.php'; ?>

    <?php 

    $db = new Database();
    $fm = new Format();

    ?>
<?php 
if(empty($_GET['id']) && empty($_GET['token']))
{
   header('location:login.php');
}

 ?>

    <?php 

   if (isset($_GET['id']) && $_GET['token'] ) {
    	
    	$id = base64_decode($_GET['id']);
    	$token =$_GET['token'];

    	$query = "UPDATE register SET status = 'Y' WHERE id='$id' AND token = '$token'";
    	$post  = $db->UPDATE($query);
    	if ($post) {
    		echo "verify successful. you can log in now";
    	}else{
    		echo "verify faild";
    	}
    }else{
    	echo "Id not found";
    }

     ?>
    

