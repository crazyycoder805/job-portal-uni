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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <?php

            $fetch_countries = mysqli_query($connection, "SELECT * FROM countries");
            $count_countires = mysqli_num_rows($fetch_countries);

            $fetch_cities = mysqli_query($connection, "SELECT * FROM cities");
            $count_cities = mysqli_num_rows($fetch_cities);

            $fetch_districts = mysqli_query($connection, "SELECT * FROM districts");
            $count_districts = mysqli_num_rows($fetch_districts);

            $fetch_companies = mysqli_query($connection, "SELECT * FROM companies");
            $count_companies = mysqli_num_rows($fetch_companies);

            $fetch_jobseekers = mysqli_query($connection, "SELECT * FROM jobseekers");
            $count_jobseekers = mysqli_num_rows($fetch_jobseekers);

            $fetch_educations = mysqli_query($connection, "SELECT * FROM educations");
            $count_educations = mysqli_num_rows($fetch_educations);

            $fetch_skills = mysqli_query($connection, "SELECT * FROM skills");
            $count_skills = mysqli_num_rows($fetch_skills);

            $fetch_jobs = mysqli_query($connection, "SELECT * FROM jobs");
            $count_jobs = mysqli_num_rows($fetch_jobs);


          ?>

        <div class="row">
            
            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Countries</h5>
                        <p><?php echo $count_countires; ?></p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Cities</h5>
                        <p><?php echo $count_cities; ?></p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Districts</h5>
                        <p><?php echo $count_districts; ?> </p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Companies</h5>
                        <p><?php echo $count_companies; ?></p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>JobSeekers</h5>
                        <p><?php echo $count_jobseekers; ?></p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Educations Added</h5>
                        <p><?php echo $count_educations; ?></p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Skills Added</h5>
                        <p><?php echo $count_skills; ?></p>
                    </div>

                </div>

            </div>

            <div class="col-md-3 mb-4">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <h5>Total Jobs Posted</h5>
                        <p><?php echo $count_jobs; ?></p>
                    </div>

                </div>

            </div>

        </div>

        </div>

      </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

<?php include("includes/footer.php"); ?>
