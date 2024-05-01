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
                        <form class="form-search form-inline" action="#">
                            <div class="fields-holder bg-white text-black d-flex flex-wrap flex-md-nowrap">
                                <div class="form-group">
                                    <label for="rel01">What are you looking for?</label>
                                    <div class="form-input">
                                        <select id="rel01" class="select2" name="state"
                                            data-placeholder="What are you looking for?">
                                            <option label="Placeholder"></option>
                                            <option>Web Developer</option>
                                            <option>Web Developer</option>
                                            <option>Web Developer</option>
                                            <option>Web Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rel02">Category</label>
                                    <div class="form-input">
                                        <select id="rel02" class="select2" name="state" data-placeholder="Category">
                                            <option label="Placeholder"></option>
                                            <option>Web Design</option>
                                            <option>Web Design</option>
                                            <option>Web Design</option>
                                            <option>Web Design</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-green btn-sm" type="submit"><span class="btn-text">Find
                                    Job</span></button>
                        </form>
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
                            <header
                                class="page-subheader mb-30 mb-md-40 d-lg-flex align-items-center justify-content-between">
                                <h3 class="h6 mb-25 mb-lg-0">All 7,096 jobs found</h3>
                                <div class="subhead-filters">
                                    <div class="subhead-filters-item">
                                        <label>Sort By</label>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <select class="select2" name="state" data-placeholder="Sort by">
                                                <option label="Sort by"></option>
                                                <option>Newest Jobs</option>
                                                <option>Old Jobs</option>
                                                <option>Sort by Date</option>
                                                <option>Sort by Name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid-buttons">
                                        <button class="btn btn-list" type="button">
                                            <img src="assets/images/list-icon.svg" width="20" height="20" alt="List">
                                        </button>
                                        <button class="btn btn-grid active" type="button">
                                            <img src="assets/images/grid-icon.svg" width="22" height="22" alt="Grid">
                                        </button>
                                        <button class="btn btn-filters filters-opener" type="button">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </header>
                            <!-- Filters Sidebar -->
                            <aside class="filters-sidebar custom-filters">
                                <button class="btn btn-filters filters-opener" type="button">
                                    <span></span>
                                </button>
                                <form action="#">
                                    <!-- Filter Box -->
                                    <div class="filter-box">
                                        <a class="filter-box-head" data-bs-toggle="collapse" href="#collapseCategory">
                                            <h2 class="h5">Category</h2>
                                            <span class="collapse-icon"></span>
                                        </a>
                                        <div class="collapse show" id="collapseCategory">
                                            <div class="form-group">
                                                <div class="checkbox-limit">
                                                    <ul class="checkbox-list">
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Management</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Retail</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Marketing</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Translation</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Ux Designer</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">UI/UX</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Web Design</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Graphic Design</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Website Development</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Programming</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="btn btn-primary btn-sm buttonShowMore">
                                                        <span class="btn-text">Show
                                                            <span class="show">More</span>
                                                            <span class="hide">Less</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Filter Box -->
                                    <div class="filter-box">
                                        <a class="filter-box-head" data-bs-toggle="collapse" href="#collapseExperience">
                                            <h2 class="h5">Experience</h2>
                                            <span class="collapse-icon"></span>
                                        </a>
                                        <div class="collapse show" id="collapseExperience">
                                            <div class="form-group">
                                                <div class="checkbox-limit">
                                                    <ul class="checkbox-list">
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Fresher</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Intermediate</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">No-Experience</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Internship</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Expert</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Filter Box -->
                                    <div class="filter-box">
                                        <a class="filter-box-head" data-bs-toggle="collapse" href="#collapseType">
                                            <h2 class="h5">Job Type</h2>
                                            <span class="collapse-icon"></span>
                                        </a>
                                        <div class="collapse show" id="collapseType">
                                            <div class="form-group">
                                                <div class="checkbox-limit">
                                                    <ul class="checkbox-list">
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Full Time</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Part Time</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox">
                                                                <span class="fake-checkbox"></span>
                                                                <span class="label-text">Remote</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Filter Box -->
                                    <div class="filter-box">
                                        <a class="filter-box-head" data-bs-toggle="collapse" href="#collapseLocation">
                                            <h2 class="h5">Location</h2>
                                            <span class="collapse-icon"></span>
                                        </a>
                                        <div class="collapse show" id="collapseLocation">
                                            <div class="form-group">
                                                <select class="select2 medium" name="state" data-placeholder="Location">
                                                    <option label="Select Category"></option>
                                                    <option>Indonesia</option>
                                                    <option>Indonesia</option>
                                                    <option>Indonesia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Filter Box -->
                                    <div class="filter-box">
                                        <a class="filter-box-head" data-bs-toggle="collapse" href="#collapseTags">
                                            <h2 class="h5">Tags</h2>
                                            <span class="collapse-icon"></span>
                                        </a>
                                        <div class="collapse show" id="collapseTags">
                                            <div class="form-group">
                                                <ul class="tags-list">
                                                    <li><a href="#" class="tag">Design</a></li>
                                                    <li><a href="#" class="tag">Business</a></li>
                                                    <li><a href="#" class="tag">Video</a></li>
                                                    <li><a href="#" class="tag">Design & Art</a></li>
                                                    <li><a href="#" class="tag">Sales</a></li>
                                                    <li><a href="#" class="tag">Banking</a></li>
                                                    <li><a href="#" class="tag">Real Estate</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Filter Box -->
                                    <div class="filter-box">
                                        <a class="filter-box-head" data-bs-toggle="collapse" href="#collapseSalary">
                                            <h2 class="h5">Salary</h2>
                                            <span class="collapse-icon"></span>
                                        </a>
                                        <div class="collapse show" id="collapseSalary">
                                            <div class="form-group">
                                                <div class="price-inputs">
                                                    <input type="text" id="amount-start" class="form-control" readonly
                                                        placeholder="Form" value="">
                                                    <input type="text" id="amount-end" class="form-control" readonly
                                                        placeholder="To" value="">
                                                </div>
                                                <div class="range-box">
                                                    <div id="slider-range"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Filter Buttons -->
                                    <div class="filter-buttons">
                                        <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Apply
                                                Filter</span></a>
                                        <a href="#" class="btn btn-text btn-sm">Reset all filters</a>
                                    </div>
                                </form>
                            </aside>
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Intership</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo01.jpg" width="78" height="78"
                                                alt="Financial Analyst">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Financial Analyst</strong>
                                            <span class="subtitle">By WebTechnology</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia</span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Part Time</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo02.jpg" width="78" height="78"
                                                alt="Javascript Developer">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Javascript Developer</strong>
                                            <span class="subtitle">By Websikon</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia</span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Intership</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo03.jpg" width="78" height="78"
                                                alt="Technical Writer">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Technical Writer</strong>
                                            <span class="subtitle">By Softy</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia</span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Full Time</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo04.jpg" width="78" height="78"
                                                alt="Product Manager">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Product Manager</strong>
                                            <span class="subtitle">By Geniouslab</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia</span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Full Time</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo05.jpg" width="78" height="78"
                                                alt="Human Resources">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Human Resources</strong>
                                            <span class="subtitle">By Develpersoft</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia
                                                </span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Intership</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo06.jpg" width="78" height="78"
                                                alt="Technical Support">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Technical Support</strong>
                                            <span class="subtitle">By Muxcorp</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia
                                                </span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Full Time</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo07.jpg" width="78" height="78"
                                                alt="Financial Analyst">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Financial Analyst</strong>
                                            <span class="subtitle">By Rokwebs</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia
                                                </span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-15 mb-md-30">
                                    <!-- Featured Category Box -->
                                    <article class="featured-category-box">
                                        <span class="tag">Part Time</span>
                                        <div class="img-holder">
                                            <img src="assets/images/company-logo08.jpg" width="78" height="78"
                                                alt="Fullstack Developer">
                                        </div>
                                        <div class="textbox">
                                            <strong class="h6">Fullstack Developer</strong>
                                            <span class="subtitle">Pekanbaru, Indonesia</span>
                                            <address class="location"><i class="icon icon-map-pin"></i><span
                                                    class="text">Pekanbaru, Indonesia
                                                </span></address>
                                            <div class="job-info">
                                                <span class="subtext">11 hours ago</span>
                                                <span class="amount"><strong>$1000 - $1200</strong>/month</span>
                                            </div>
                                            <a href="job-details.php" class="btn btn-dark-yellow btn-sm"><span
                                                    class="btn-text"><span class="text">Apple Now</span><i
                                                        class="icon-chevron-right"></i></span></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Pagination Block -->
                            <div class="pagination-block pt-20 pt-lg-30 pt-xl-50 pb-0">
                                <div class="container d-flex align-items-center justify-content-center">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                                    class="icon-arrow-left1"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="icon-arrow-right"></i></a></li>
                                    </ul>
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