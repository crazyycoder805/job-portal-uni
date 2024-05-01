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
                    <!-- User Box -->
                    <div class="jobplugin__userbox">
                        <span class="jobplugin__userbox-bar jobplugin__bg-primary"></span>
                        <h1 class="jobplugin__text-secondary h3">Login</h1>
                        <!-- User Box Form -->
                        <form action="#">
                            <div class="jobplugin__form">
                                <!-- User Form Row -->
                                <div class="jobplugin__form-row">
                                    <div class="jobplugin__form-field">
                                        <input type="text" placeholder="Username or Email">
                                    </div>
                                </div>
                                <!-- User Form Row -->
                                <div class="jobplugin__form-row">
                                    <div class="jobplugin__form-field">
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <!-- User Form Button -->
                            <div class="jobplugin__userbox-button">
                                <button type="button"
                                    class="jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Sign
                                    in</button>
                            </div>
                        </form>
                        <div class="jobplugin__userbox-seperator">
                            <span>or</span>
                        </div>
                        <!-- User Form Other Buttons -->

                        <p class="jobplugin__userbox-textinfo">Don't have an account? <a
                                class="hover:jobplugin__text-primary" href="signup.php">Sign Up</a></p>
                    </div>
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