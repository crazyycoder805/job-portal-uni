<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';




?>


<body class="jobplugin">
    <!-- main container of all the page elements -->
    <div class="jobplugin__wrapper">
        <?php 
		require_once 'assets/includes/preloader.php';
		?>
        <!-- Header of the Page -->
        <?php 
		require_once 'assets/includes/navbar.php';
		?>
        <br /><br /><br /><br /><br />


        <!-- Contain Main informative part of the Site -->
        <main class="jobplugin__main">
            <div class="jobplugin__main-holder">
                <span class="jobplugin__pattern default-right"></span>
                <span class="jobplugin__pattern default-left"></span>
                <div class="jobplugin__visual-pattern">
                    <img src="assets/images/visual-pattern.png" alt="Image Description">
                </div>
                <div class="jobplugin__container">
                    <?php

if (isset($_POST['company'])) {
  
  $username = trim($_POST['username']);

  $password = trim($_POST['password']);



  $query = mysqli_query($connection, "SELECT * FROM companies WHERE username = '$username'");

  $count_exists = mysqli_num_rows($query);

  if ($count_exists > 0) {
    
    $row = mysqli_fetch_array($query);

    $company_id     = $row['company_id'];
    $db_username    = $row['username'];
    $db_password    = $row['password'];
    $db_status      = $row['status'];

    if ($db_password == $password) {
      
      if ($db_status == "active") {
        
        $_SESSION['company_id'] = $company_id;

        header("Location: dashboard.php");

      } else {

      ?>

                    <div class="alert alert-danger" style="font-size: 20px !important;" role="alert">
                        <strong>Alert!</strong> Your Account is Inactive. Please Contact Admin for more details.
                    </div>

                    <?php

      }

    } else {

      ?>

                    <div class="alert alert-danger" style="font-size: 20px !important;" role="alert">
                        <strong>Alert!</strong> Password Does Not Match.
                    </div>
                    <?php

    }

  } else {

    ?>

                    <div class="alert alert-danger" style="font-size: 20px !important;" role="alert">
                        <strong>Alert!</strong> Account Does Not Exist.
                    </div>

                    <?php

  }

}

?>

                    <?php

							            if (isset($_POST['seeker'])) {
							              
							              $username = trim($_POST['username']);

							              $password = trim($_POST['password']);



							              $query = mysqli_query($connection, "SELECT * FROM jobseekers WHERE username = '$username'");

							              $count_exists = mysqli_num_rows($query);

							              if ($count_exists > 0) {
							                
							                $row = mysqli_fetch_array($query);

							                $js_id     = $row['js_id'];
							                $db_username    = $row['username'];
							                $db_password    = $row['password'];
							                $db_status      = $row['status'];

							                if ($db_password == $password) {
							                  
							                  if ($db_status == "active") {
							                    
							                    $_SESSION['js_id'] = $js_id;

							                    header("Location: dashboard.php");

							                  } else {

							                  ?>

                    <div class="alert alert-danger" style="font-size: 20px !important;" role="alert">
                        <strong>Alert!</strong> Your Account is Inactive. Please Contact Admin for more details.
                    </div>

                    <?php

							                  }

							                } else {

							                  ?>

                    <div class="alert alert-danger" style="font-size: 20px !important;" role="alert">
                        <strong>Alert!</strong> Password Does Not Match.
                    </div>
                    <?php

							                }

							              } else {

							                ?>

                    <div class="alert alert-danger" style="font-size: 20px !important;" role="alert">
                        <strong>Alert!</strong> Account Does Not Exist.
                    </div>

                    <?php

							              }

							            }

						            ?>
                    <!-- User Box -->
                    <div class="row">
                        <div class="col-md">
                            <div class="jobplugin__userbox">
                                <span class="jobplugin__userbox-bar jobplugin__bg-primary"></span>
                                <h1 class="jobplugin__text-secondary h3">Login (JobSeeker)</h1>
                                <!-- User Box Form -->
                                <form method="post" action="login.php">
                                    <div class="jobplugin__form">
                                        <!-- User Form Row -->
                                        <div class="jobplugin__form-row">
                                            <div class="jobplugin__form-field">
                                                <input type="text" name="username" placeholder="Username or Email">
                                            </div>
                                        </div>
                                        <!-- User Form Row -->
                                        <div class="jobplugin__form-row">
                                            <div class="jobplugin__form-field">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- User Form Button -->
                                    <div class="jobplugin__userbox-button">
                                        <button name="seeker" type="submit"
                                            class="jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Sign
                                            in</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-md">
                            <div class="jobplugin__userbox">
                                <span class="jobplugin__userbox-bar jobplugin__bg-primary"></span>
                                <h1 class="jobplugin__text-secondary h3">Login (Company)</h1>
                                <!-- User Box Form -->
                                <form method="post" action="login.php">
                                    <div class="jobplugin__form">
                                        <!-- User Form Row -->
                                        <div class="jobplugin__form-row">
                                            <div class="jobplugin__form-field">
                                                <input type="text" name="username" placeholder="Username or Email">
                                            </div>
                                        </div>
                                        <!-- User Form Row -->
                                        <div class="jobplugin__form-row">
                                            <div class="jobplugin__form-field">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- User Form Button -->
                                    <div class="jobplugin__userbox-button">
                                        <button name="company" type="submit"
                                            class="jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Sign
                                            in</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="jobplugin__userbox-seperator">
                        <span>or</span>
                    </div>
                    <!-- User Form Other Buttons -->

                    <p class="jobplugin__userbox-textinfo">Don't have an account? <a
                            class="hover:jobplugin__text-primary" href="signup.php">Sign Up</a></p>
                </div>
            </div>
        </main>
        <?php 
		require_once 'assets/includes/footer.php';
		?>
    </div>
    <?php 
	require_once 'assets/includes/javascript.php';
	?>
</body>


</html>