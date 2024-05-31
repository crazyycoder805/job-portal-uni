<!doctype html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';

require_once 'config-stripe.php';

$gid = $_GET['gid'];
$row = $pdo->read("gigs", ['id' => $gid]);

?>

<body>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <?php 
		require_once 'assets/includes/preloader.php';
		?>
        <!-- header of the page -->
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
                            <h1>Gig Details</h1>
                            <p>Gig duties, Gig responsibilities, and skills required</p>
                        </div>
                        <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Browse Gigs</a></li>
                                <li class="breadcrumb-item active">Gig Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- contain main informative part of the site -->
        <main class="main">
            <!-- Jobs Details Section -->
            <section
                class="section section-job-details add-styles section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pb-35 pb-md-50 pb-xl-100">
                <div class="container">
                    <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
                    <header class="job-details-header mb-30 mb-md-45 mb-lg-60">

                        <h2><?php echo $row[0]['title']; ?></h2>


                        <div class="company-info-job">
                            <ul class="job-info-list">


                                <li>
                                    <span class="text">Gig price:</span>
                                    <span class="text">PKR - <?php echo $row[0]['price'] ?></span>
                                </li>

                            </ul>
                            <?php
                    if (isset($_SESSION['company_id'])) {
                     
                    ?>
                            <form action="submit.php" method="post">

                                <script id="stripePayment" src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button" data-key="<?php echo $publishableKey?>"
                                    data-amount="<?php echo ceil(($row[0]['price']) * 100); ?>"
                                    data-name="Skill Sphere X"
                                    data-description="Skill sphere x a best job company where you can apply for any job & service."
                                    data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
                                    data-currency="pkr">
                                </script>
                                </script>
                                <input hidden type="text" value="<?php echo $row[0]['price']; ?>" name="price">
                                <input hidden type="text" value="<?php echo $_GET['gid']; ?>" name="gig_id">


                            </form>



                            <?php
                    } else {
                    ?>
                            <span>Login as a company to buy</span>

                            <?php
                    }

                    ?>
                        </div>
                    </header>
                    <div class="row">
                        <div class="col-12">

                            <div class="text-holder">
                                <h3>Gig Description</h3>
                                <p><?php echo $row[0]['description']; ?></p>
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