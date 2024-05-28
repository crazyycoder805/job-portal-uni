<!doctype html>
<html lang="en">

<?php 
require_once 'assets/includes/head.php';
?>

<?php 
$jobs = $pdo->read("jobs");

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
                            <h1>Job Grid</h1>
                            <p>job duties, job responsibilities, and skills required</p>
                        </div>
                        <!-- search form -->

                    </div>
                </div>
            </div>
        </div>
        <!-- contain main informative part of the site -->
        <main class="main">
            <!-- Featured Jobs Section -->
            <section
                class="section section-categories section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-95 pb-35 pb-md-50 pb-xl-75">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Page subheader -->


                            <div class="row justify-content-center">
                                <?php foreach ($jobs as $jb) {
                                                            $company = $pdo->read("companies", ['company_id' => $jb['company_id']]);
                                                            $city = $pdo->read("cities", ['city_id' => $jb['company_id']]);
                                ?>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <article class="featured-category-box">
                                        <span class="tag"><?php echo $jb['type'] ?></span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo01.jpg" width="78" height="78"
                                                alt="Financial Analyst">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6"><?php echo $jb['job_title'] ?></strong>
                                            <span class="subtitle"><?php echo $company[0]['company_name']; ?></span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text"><?php echo $city[0]['city_name'] ?></span></address>

                                            <a href="job-details.php?jobid=<?php echo $jb['job_id']; ?>" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>

                            </div>

                            <!-- Pagination Block -->

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