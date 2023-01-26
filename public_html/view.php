<?php
  require_once('includes/header.php');
?>
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
// Get image data from database 
$result = $con->query("SELECT image, created, description, preference, current FROM images ORDER BY id DESC");

?>

		
		<div style="text-align: center; color:#FFFFFF">
		    <h3>Admin's Listings </h3>
		    <br>
		</div>

		<div class="gallery" >
        <?php if($result->num_rows > 0){ ?> 
    <div class="gallery" style="text-align: center; color:#FFFFFF"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="500" height="400" /> 
			<p> Uploaded by: <?=$row['current']?> at <?=$row['created']?>  </p>
			<p> Contact Preference: <?=$row['preference']?> </p>
			<p> Antique Description: <?=$row['description']?> </p>
			<br>
			<br>

        <?php } ?> 
    </div> 
    <?php }else{ ?> 
        <p class="status error">Image(s) not found...</p> 
    <?php } ?>
		</div>
	</body>
</html>
