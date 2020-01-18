<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

                    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $name      =  $fm->validation($_POST['name']);
                    $category   =  $fm->validation($_POST['category']);

                    $name      = mysqli_real_escape_string($db->link, $_POST['name']);
                    $category   = mysqli_real_escape_string($db->link, $_POST['category']);
                    
                    
                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div            = explode('.', $file_name);
                    $file_ext       = strtolower(end($div));
                    $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/".$unique_image;

                if ($name == "" || $category == "" ||$file_name == "") {
                    echo "Field Must Not Be Empty";
                    }
                    elseif ($file_size >100048567) {
                     echo "<span class='error'>Image Size should be less then 1MB!
                     </span>";
                    } 
                    elseif (in_array($file_ext, $permited) == false) {
                     echo "<span class='error'>You can upload only:-"
                     .implode(', ', $permited)."</span>";
                    } 
                    else{
                    move_uploaded_file($file_temp, $uploaded_image);
                    $query         = "INSERT INTO tbl_portfolio( name, category, image) 
                    VALUES( '$name', '$category', '$uploaded_image')";
                    $inserted_rows = $db->insert($query);
                    if ($inserted_rows) {
                     echo "<span class='success'>Image Inserted Successfully.
                     </span>";
                    }else {
                     echo "<span class='error'>Image Not Inserted !</span>";
                    }
                    }
                   }

            ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" placeholder="Enter Product Name..." class="medium" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <input type="text" name="category" placeholder="Enter Product Name..." class="medium" />
                    </td>
                </tr>
                
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input name="image" type="file" />
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


