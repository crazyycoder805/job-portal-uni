<?php include("includes/head.php"); ?>

    <?php include("includes/top-nav.php"); ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php include("includes/sidebar.php"); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Jobs</li>
          </ol>
            <?php
                if (isset($_GET['view_details'])) {
            ?>
            <div class="row">
                <div class="col-md-6">
                    <h4>Job Applicants</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="jobs.php" class="btn btn-primary">Go Back</a>
                </div>
            </div>
            <?php } ?>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-md-12">
                <?php
                    if (isset($_GET['view_details'])) {
                        $jobid = $_GET['view_details'];

                        $fetch_applicants = mysqli_query($connection, "SELECT * FROM jobs_applied WHERE job_id = '$jobid'");
                        $count_applicants = mysqli_num_rows($fetch_applicants)
                        
                        ?>
                
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <tbody>
                                        <?php

                                        if ($count_applicants > 0) {
                                            while ($row = mysqli_fetch_array($fetch_applicants)) {
                                                ?>
                                                <tr>
                                                    <td><strong>Applicant Name</strong></td>
                                                    <td>

                                                        <?php

                                                        $fetch_seeker = mysqli_query($connection, "SELECT * FROM jobseekers WHERE js_id = '" . $row['seeker_id'] . "'");
                                                        $seeker = mysqli_fetch_array($fetch_seeker);
                                                        echo $seeker['first_name'] . " " .  $seeker['last_name'];

                                                        ?>
                                                        
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan='2' style='text-align: center;'>No Applicants Yet.</td></tr>";
                                        }

                                        ?>
                                        

                                    </tbody>
                                </table>
                            </div>

                        <?php
                    } else {
                ?>
                <div class="table-responsive">
                    <table id="dataTable" class="table v-middle">
                        <thead>
                            <tr class="bg-dark text-light">
                                <th class="border-top-0">#</th>
                                <th width="200" class="border-top-0">Job Title</th>
                                <th width="400" class="border-top-0">Description</th>
                                <th class="border-top-0">Company Name</th>
                                <th class="border-top-0">City Name</th>
                                <th class="border-top-0">Education Required</th>
                                <th class="border-top-0">Job Type</th>
                                <th class="border-top-0">Created Date</th>
                                <th class="border-top-0">End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $k = 1;
                            $fetch_data = mysqli_query($connection, "SELECT * FROM jobs");
                            $count = mysqli_num_rows($fetch_data);

                            while ($row = mysqli_fetch_array($fetch_data)) {
                                
                                ?>
                                <tr>
                                    <td><?php echo $k; ?></td>
                                    <td><strong><?php echo $row['job_title']; ?></strong><br><a href="jobs.php?view_details=<?php echo $row['job_id']; ?>">View Applicants</a></td>
                                    <td><?php echo substr($row['description'], 0, 200); ?>...</td>
                                    <td>
                                        <?php
                                        $fetch_company_name = mysqli_query($connection, "SELECT * FROM companies WHERE company_id = '" . $row['company_id'] . "'");
                                        $cname = mysqli_fetch_array($fetch_company_name);
                                        echo $cname['company_name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $fetch_city_name = mysqli_query($connection, "SELECT * FROM cities WHERE city_id = '" . $row['city_id'] . "'");
                                        $cityname = mysqli_fetch_array($fetch_city_name);
                                        echo $cityname['city_name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $fetch_edu_name = mysqli_query($connection, "SELECT * FROM educations WHERE edu_id = '" . $row['education_id'] . "'");
                                        $eduname = mysqli_fetch_array($fetch_edu_name);
                                        echo $eduname['education_title'];
                                        ?>
                                    </td>
                                    <td><?php echo $row['type']; ?></td>
                                    <td><?php echo $row['end_date']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                </tr>
                                <?php
                                $k++;
                            }
                                ?>
                        </tbody>
                    </table>
                        
                </div>
                    <?php
                    }
                    ?>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

<?php include("includes/footer.php"); ?>
