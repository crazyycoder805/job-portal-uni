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
                        <h1 class="jobplugin__text-secondary h3">Join as a Employee or freelancer</h1>
                        <!-- User Box Form -->
                        <form action="#">
                            <div class="jobplugin__userbox-condition">
                                <!-- Form User Type Options -->
                                <div class="jobplugin__usertype">
                                    <label class="jobplugin__usertype-radio">
                                        <input type="radio" name="group" checked>
                                        <span class="jobplugin__usertype-radio__item">
                                            <span class="jobplugin__usertype-radio__btn"></span>
                                            For Employee
                                        </span>
                                    </label>
                                    <label class="jobplugin__usertype-radio">
                                        <input type="radio" name="group">
                                        <span class="jobplugin__usertype-radio__item">
                                            <span class="jobplugin__usertype-radio__btn"></span>
                                            for freelancer
                                        </span>
                                    </label>
                                </div>
                                <!-- User Form Option Buttons -->
                                <div class="jobplugin__userbox-button">
                                    <a href="account.php"
                                        class="button-employee jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Join
                                        as a Employee</a>
                                    <a href="account.php"
                                        class="button-freelancer jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Join
                                        as a Freelancer</a>
                                </div>
                            </div>
                        </form>
                        <p class="jobplugin__userbox-textinfo">Already have an account? <a
                                class="hover:jobplugin__text-primary" href="login.php">Log In</a></p>
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