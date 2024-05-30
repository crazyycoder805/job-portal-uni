<!doctype html>
<html lang="en">
<?php 
require_once 'assets/includes/head.php';


$jobid = $_GET['jobid'];

$row = $pdo->read("jobs", ["job_id" => $jobid]);

// Education
$edu = $pdo->read("educations", ["edu_id" => $row[0]['education_id']]);

// Location
$city = $pdo->read("cities", ["city_id" => $row[0]['city_id']]);

// Company
$company = $pdo->read("companies", ["company_id" => $row[0]['company_id']]);

$fetch_skills = $pdo->read("job_skills", ["job_id" => $jobid]);
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
                            <h1>Job Details</h1>
                            <p>job duties, job responsibilities, and skills required</p>
                        </div>
                        <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Browse Jobs</a></li>
                                <li class="breadcrumb-item active">Job Details</li>
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
                        <ul class="post-meta">
                            <li>By <?php echo $company[0]['company_name']; ?></li>
                            <li><i class="icon icon-map-pin"></i><span
                                    class="text"><?php echo $city[0]['city_name']; ?></span></li>
                        </ul>
                        <h2><?php echo $row[0]['job_title']; ?></h2>


                        <div class="company-info-job">
                            <ul class="job-info-list">


                                <li>
                                    <span class="text">Job Type:</span>
                                    <span class="text"><?php echo $row[0]['type'] ?></span>
                                </li>

                            </ul>
                            <?php
                    if (isset($_SESSION['js_id'])) {
                      $jobid = $_GET['jobid'];

                      $row = $pdo->read("jobs", ["job_id" => $jobid]);

                      $check_apply = $pdo->customQuery("SELECT * FROM jobs_applied WHERE job_id = '{$row[0]['job_id']}' AND seeker_id = '{$_SESSION['js_id']}'");


                      if (count($check_apply) > 1 || count($check_apply) == 1) {

                    ?>
                            <a class="btn btn-danger btn-xs disabled">You Have Already Applied this Job.</a>
                            <?php
                      } else {
                      ?>
                            <a href="job-details.php?jobid=<?php echo $row[0]['job_id']; ?>&jobapply=<?php echo $row[0]['job_id']; ?>"
                                class="btn btn-green btn-sm"><span class="btn-text">Apply Now</span></a>



                            <?php } ?>


                            <?php
                    } else {
                    ?>
                            <span>Login as a jobseeker for apply</span>

                            <?php
                    }

                    ?>
                        </div>
                    </header>
                    <div class="row">
                        <div class="col-12">

                            <div class="text-holder">
                                <h3>Job Description</h3>
                                <p><?php echo $row[0]['description']; ?></p>
                            </div>
                            <div class="text-holder">
                                <h3>Responsibilities</h3>
                                <ul class="check-list">
                                    <li>Targeted job titles are more effective than generic ones, so be precise</li>
                                    <li>Provide an overview of your company and expectations</li>
                                    <li>Job duties, job responsibilities</li>
                                    <li>Cornerstone of the recruiting process</li>
                                    <li>Written statement of educational qualifications</li>
                                </ul>
                            </div>
                            <div class="text-holder">
                                <h3>Required Skills</h3>
                                <ol class="num-list">
                                    <?php
                foreach ($fetch_skills as $skill) {
                  $fetch_skill_names = $pdo->read("skills", ["skill_id" => $skill['skill_id']]);
                  foreach ($fetch_skill_names as $name) {


                ?>
                                    <li><?php echo $name['skill_name']; ?></li>
                                    <?php
                  }
                }
                ?>
                                </ol>
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
    <?php
  if (isset($_GET['jobapply'])) {
    $job_id = $_GET['jobapply'];
    $user_id = $_SESSION['js_id'];

    $date = date("Y-m-d");

    $pdo->create("jobs_applied", ['job_id' => $job_id, 'seeker_id' => $user_id, 'applied_at' => $date]);





    $job = $pdo->read("jobs", ["job_id" => $job_id]);

    $company_id = $job[0]['company_id'];

    $company = $pdo->read("companies", ["company_id" => $company_id]);


    $user = $pdo->read("jobseekers", ["js_id" => $user_id]);

    $_SESSION['msg'] = "<div class='alert alert-success'>Job Application Submitted Successfully!</div>";
    echo "<script>
    location.href = 'job-details.php?jobid={$_GET['jobid']}'
    </script>";
  }

  ?>
</body>

</html>