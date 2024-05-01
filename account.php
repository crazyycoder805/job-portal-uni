<!doctype html>
<html lang="en">

<?php 
require_once 'assets/includes/head.php';
?>

<body>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <?php 
		require_once 'assets/includes/preloader.php';
		?>
        <?php 
		require_once 'assets/includes/navbar.php';
		?>
        <!-- Sub Visual of the page -->
        <div class="subvisual-block subvisual-theme-1 bg-dark-green d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
            <div class="pattern-image"><img src="assets/images/bg-pattern-overlay.jpg" width="1920" height="570"
                    alt="Pattern">
            </div>
            <div class="container position-relative text-center">
                <div class="row">
                    <div class="col-12">
                        <div class="subvisual-textbox">
                            <h1>My Account</h1>
                            <p>Create an account & Start posting or hiring talents</p>
                        </div>
                        <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">My Account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- contain main informative part of the site -->
        <main class="main">
            <!-- Accounts Section -->
            <section
                class="section section-accounts section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-120 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="account-box">
                                <span class="icon">
                                    <img src="assets/images/user-icon.svg" alt="user">
                                </span>
                                <div class="account-box-frame">
                                    <div class="form-head">
                                        <h2>Hi, Welcome Back!</h2>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <form class="contac-form" action="#">
                                        <div class="row">
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="password" placeholder="Password">
                                            </div>


                                            <div class="col-12">
                                                <button class="btn btn-green btn-sm"><span
                                                        class="btn-text">Login</span></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="account-box">
                                <span class="icon">
                                    <img src="assets/images/user-icon.svg" alt="user">
                                </span>
                                <div class="account-box-frame">
                                    <div class="form-head">
                                        <h2>Create Account</h2>
                                        <p>Start posting or hiring talents</p>
                                    </div>
                                    <ul class="nav form-tabs mb-15 mb-md-20">
                                        <li>
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#nav-tab01" type="button">Candidates</button>
                                        </li>
                                        <li>
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02"
                                                type="button">Employer</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-tab01">
                                            <form class="contac-form" action="#">
                                                <div class="row">
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Complete Name">
                                                    </div>
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="email"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="password"
                                                            placeholder="Password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="btn btn-green btn-sm"><span
                                                                class="btn-text">Register</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="nav-tab02">
                                            <form class="contac-form" action="#">
                                                <div class="row">
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Complete Name">
                                                    </div>
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="email"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="password"
                                                            placeholder="Password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="btn btn-green btn-sm"><span
                                                                class="btn-text">Register</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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