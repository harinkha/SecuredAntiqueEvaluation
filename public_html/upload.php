<?php
  require_once('includes/header.php');
?>
        <!--Navigation Bar-->
        <?php require_once('includes/nav.php'); ?>

        <?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'id19977691_lovejoysecurityadmin';
$DATABASE_PASS = 'Simarkhanijou12!';
$DATABASE_NAME = 'id19977691_lovejoysecurity';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// If file upload form is submitted 
$status = $statusMsg= NULL; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])&& !empty($_POST['description'])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $con->query("INSERT into images (image, created, description, preference, current) VALUES ('$imgContent', NOW(),'$_POST[description]','$_POST[preference]','$_SESSION[Email]')"); 
             
            if($insert){ 
                $status = 'success'; 
                //$statusMsg = "File uploaded successfully."; 
                header('Location: thankyou.php');
            
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please upload the image'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
<div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-4"> Request Evaluation Form </h2>
                            <hr>
                            <?php 
                            if ($statusMsg != ''){
                                ?>
                                <div class="alert alert-danger">'<?= $statusMsg ?>'</div>'
                                
                                <?php
                            }
                            ?>
                            
                        </div>
                            <div class="card-body">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <label>Select Image File:</label>
                                <input type="file" name="image">
                                <label for = "preference"> Contact Preference:</label>
                                <select id = "preference" name = "preference">
                                    <option value = "Email">Email</option>
                                    <option value = "Phone Number">Phone Number</option>
                                </select> 
                                <input type="text" id="description" name="description" placeholder="Description of the antique" class="form-control py-2 mb-2" required>
                                <input type="submit" name="submit" value="Upload">
            </form>
                            </div>
                  </div>
                </div>
            </div>
        </div>
