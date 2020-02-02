 
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
            <?php 

            if (isset($_POST['upload'])) {
                
                $file_name = $_FILES['video']['name'];
                $file_temp = $_FILES['video']['tmp_name'];
                move_uploaded_file($file_temp,"upload/".$file_name);
                    
                    $query         = "INSERT INTO tbl_portfolio(video) 
                    VALUES('$file_name')";
                    $inserted_rows = $db->insert($query);
                    if ($inserted_rows) {
                     echo "<span class='success'>Image Inserted Successfully.
                     </span>";
                    }else {
                     echo "<span class='error'>Image Not Inserted !</span>";
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
                        <label>Upload Video</label>
                    </td>
                    <td>
                        <input name="video" type="file" />
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="upload" Value="Save" />
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




























