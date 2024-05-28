<!doctype html>
<html lang="en">

<?php 
require_once 'assets/includes/head.php';


$jobs = $pdo->customQuery("SELECT * FROM jobs LIMIT 0, 5");
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
        <!-- Visual of the page -->
        <div class="visual-block visual-theme-1 bg-dark-green pt-40 pt-md-65 pb-40 pb-md-65 pb-xl-85 text-white">
            <div class="container position-relative">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-7 col-xl-6 position-relative">
                        <!-- visual textbox -->
                        <div class="visual-textbox">
                            <h1>Find The Perfect Job For You</h1>
                            <p>Fill your job in hours, not weeks. Search for free.</p>
                            <!-- search form -->


                            <div class="bg-patterns">
                                <img src="assets/images/bg-pattern.png" width="242" height="423" alt="Icons">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-6 d-flex justify-content-center align-items-center">
                        <!-- visual Image -->
                        <div class="visual-image position-relative">
                            <img src="assets/images/image-banner2.png" width="642" height="494"
                                alt="Find The Perfect Job For You">
                            <div class="icons-black">
                                <img src="assets/images/icon-pattern01.png" width="306" height="321" alt="Icons">
                            </div>
                            <div class="icon-circle">
                                <img src="assets/images/icon-pattern02.png" width="95" height="95" alt="Icons">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contain main informative part of the site -->
        <main class="main">
            <!-- Trending Categories Section -->

            <!-- Popular Jobs Section -->
            <section
                class="section section-theme-1 section-popular-jobs pt-35 pt-md-50 pt-lg-65 pb-35 pb-md-50 pb-lg-65">
                <div class="container">
                    <!-- Section header -->
                    <header class="section-header text-center mb-30 mb-md-45 mb-xl-60">
                        <div class="seprator"></div>
                        <h2>Jobs</h2>
                        <p>Beneath each of these categories, you can find its most popular</p>
                    </header>
                    <div class="row">
                        <?php 
                    foreach ($jobs as $jb) {
                        $company = $pdo->read("companies", ['company_id' => $jb['company_id']]);
                        $city = $pdo->read("cities", ['city_id' => $jb['company_id']]);

                    ?>
                        <div class="col-12 col-lg-6 mb-15 mb-md-25 mb-lg-35">
                            <article class="popular-jobs-box">
                                <div class="box-holder">
                                    <div class="job-info">
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo01.jpg" width="78" height="78"
                                                alt="Image Description">
                                        </div>
                                        <div class="textbox">
                                            <h3 class="h5"><?php echo $jb['job_title'] ?></h3>
                                            <ul class="meta-list">
                                                <li><span class="text">By
                                                        <?php echo $company[0]['company_name']; ?></span></li>
                                                <li><i class="icon-map-pin"></i><span
                                                        class="text"><?php echo $city[0]['city_name'] ?></span></li>
                                            </ul>
                                            <ul class="tags-list">
                                                <li><span class="tag"><?php echo $jb['type'] ?></span></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <footer class="jobs-foot">
                                        <a href="job-details.php?jobid=<?php echo $jb['job_id']; ?>" class="btn btn-green btn-sm"><span class="btn-text">Apply
                                                Now</span></a>
                                    </footer>
                                </div>
                            </article>
                        </div>
                        <?php } ?>

                    </div>


                </div>
                <div class="row">
                    <div class="col-12 text-center pt-15 pt-md-25">
                        <a href="#" class="btn btn-green btn-sm"><span class="btn-text">View All Jobs</span></a>
                    </div>
                </div>
    </div>
    </section>
    <!-- Explores Section -->
    <section
        class="section section-theme-1 section-explores bg-light-gray pt-35 pt-md-50 pt-lg-65 pt-xl-125 pb-35 pb-md-50 pb-lg-65 pb-xl-125">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row align-items-center">
                <div class="col-12 col-lg-6 mb-15 mb-lg-0">
                    <div class="explores-image-box">
                        <div class="img-pattern"><img src="assets/images/explore-pattern.png" width="723" height="461"
                                alt="Image Description"></div>
                        <div class="image-holder">
                            <img src="assets/images/img-explore.jpg" width="560" height="570" alt="Image Description">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="section-header">
                        <h2>Explore a faster, easier, and better job <span class="text-outlined">search</span>
                        </h2>
                        <p>Search all the open positions on the web. Get your own personalized salary estimate.
                            Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
                        <ul class="check-list">
                            <li>Duis aute irure dolor in reprehenderit</li>
                            <li>Voluptate velit esse cillum dolore</li>
                            <li>Fugiat nulla pariatur. Excepteur sint occaecat</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>


    </main>
    <!-- footer of the page -->
    <?php 
		require_once 'assets/includes/footer.php';
		?>
    </div>
    <?php 
	require_once 'assets/includes/javascript.php';
	?>
</body>


</html>