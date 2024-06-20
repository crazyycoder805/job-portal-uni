<header class="header header-theme-1">
    <div class="container">
        <strong class="logo">
            <a href="index.php">
                <span class="normal-logo">Skill Sphere X</span>
                <span class="sticky-logo">Skill Sphere X</span>

            </a>
        </strong>
        <!-- main menu -->
        <div class="main-nav">
            <a href="#" class="nav-opener d-flex d-lg-none"><span></span></a>
            <div class="nav-drop">
                <a href="#" class="nav-close d-flex d-lg-none"><span></span></a>
                <!-- navigation -->
                <ul class="navigation">
                    <li><a href="index.php">Home</a></li>


                    <li><a href="contact.php">Contact</a></li>
                    <?php if (isset($_SESSION['company_id']) || isset($_SESSION['js_id'])) { ?>
                    <li class="text-login"><a href="dashboard.php">My Panel</a></li>

                    <?php } else { ?>

                    <li class="text-login"><a href="login.php">Login</a></li>
                    <li class="text-login"><a href="signup.php">Signup</a></li>
                    <?php } ?>
                    <li class="text-login"><a href="jobs.php">Browse Jobs</a></li>
                    <?php if (isset($_SESSION['company_id'])) { ?>
                    <li class="text-login"><a href="gigs.php">Gigs</a></li>

                   <?php } ?>
                    <!-- <li><a class="btn btn-green btn-sm" href="#"><span class="btn-text">Post a Job</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</header>