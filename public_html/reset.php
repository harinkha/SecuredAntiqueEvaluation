<?php require_once('includes/header.php'); ?>


        <!--Main Page Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center pt-4"> Reset Password </h2>
                            <hr>
                            <?php reset_password(); ?>
                        </div>
                            <div class="card-body">
                                <form method="POST">
                                    <input type="password" name="password" placeholder=" Password " class="form-control mb-2">                                
                                    <input type="password" name="cpassword" placeholder=" Confirm Password " class="form-control mb-2">                                
                                    <input type="hidden" name="pass_token" value="<?php echo token_generator(); ?>">
                            </div>
                            <div class="card-footer">
                                    <button class="btn btn-success " name="btn_update"> Update Password </button>
                                    <a href="login.php" class="btn btn-danger float-right"> Back </a>
                            </div>    
                            </form>    
                  </div>
                </div>
            </div>
        </div>

<?php require_once('includes/footer.php'); ?>