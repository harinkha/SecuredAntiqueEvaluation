<?php require_once('includes/header.php'); ?>

        <!--Navigation Bar-->
        <?php require_once('includes/nav.php'); ?>

        <!--Main Page Content-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-4"> Login Form </h2>
                            <hr>
                            <?php
                                logincaptcha();
                                display_message();
                            ?>
                        </div>
                            <div class="card-body">
                                <form method="POST" class="login_form">
                                    <input type="text" name="Email" placeholder="Email" class="form-control mb-2 py-2">
                                    <input type="password" name="Password" placeholder=" Password" class="form-control mb-2 py-2">
                                    <div class = "g-recaptcha" data-sitekey="6LfyYGMjAAAAAPb9sspGceq0Qu58_J8-iqZyVKHA"></div>
                                    <button class="btn btn-success float-right" name="btn-login" > Login </button>

                            </div>
                            <div class="card-footer">
                                    <a href="recover.php" class="float-right"> Forget Password </a>
                                    <input type="checkbox" name="remember"> <span>Remember Me </span>
                                </form>
                            </div>
                  </div>
                </div>
            </div>
        </div>

<?php require_once('includes/footer.php'); ?>
