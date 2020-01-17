
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
       header('location:changepassword.php');
    }

     ?>
  
  <?php 
    if (isset($_GET['id']) && $_GET['token'] && $_SERVER['REQUEST_METHOD'] == 'POST') {

       $password    = $fm->validation($_POST['password']);
       $repassword    = $fm->validation($_POST['repassword']);

       $password = mysqli_real_escape_string($db->link, $password);
       $repassword = mysqli_real_escape_string($db->link, $repassword);

       if ($password != $repassword) {
           echo "Password Not matched";
       }else{

        $password =password_hash($password, PASSWORD_DEFAULT);
        
        $id     = base64_decode($_GET['id']);
        $token  =$_GET['token'];
       
        $query = "UPDATE register SET password = '$password' WHERE id = '$id' AND token ='$token' ";
        $post  = $db->UPDATE($query);
        if ($post) {
            echo "Password Is changed successfully";
        }else{
            echo "No result found";
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

      <form  method="post">
        <h2>Forgot Password</h2><hr />
        
            <div>
            Please enter your new password!
            </div>  
    
        <input type="password" placeholder="New-Password" name="password" required /><br>
        <input type="password" placeholder="Confirm-password" name="repassword" required />
        <hr />
        <button type="submit" name="submit">Save Changes</button>
      </form>

    </div>
    
  </body>
</html>