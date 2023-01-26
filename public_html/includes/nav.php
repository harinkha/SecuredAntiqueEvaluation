    <!--Navigation Bar-->
    <nav class="navbar navbar-expand navbar-light bg-warning">
            <div class="container">
                <a href="index.php" class="navbar-brand"><h3>LJ ANTIQUES</h3></a>
                <ul class="navbar-nav">
                     
                        
                   <?php
                   
                        if(logged_in())
                        {
                    ?>
                        <li class="nav-item">
                        <a href="upload.php" class="nav-link"><strong>Home</strong></a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link"><strong>Logout</strong></a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link"><strong>Admin</strong></a>
                        </li>
                        
                    <?php
                        }
                        else
                        {
                    ?>  
                    
                    
                         <li class="nav-item">
                            <a href="login.php" class="nav-link"><strong>Login</strong></a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.php" class="nav-link"><strong>Signup</strong></a>
                        </li>
                    <?php
                        }
                        
                   
                   
                   ?>
                   
                </ul>
            </div>
        </nav>