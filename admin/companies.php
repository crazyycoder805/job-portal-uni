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
            <li class="breadcrumb-item active">Companies</li>
          </ol>
            <?php
                if (isset($_GET['view_details'])) {
            ?>
            <div class="row">
                <div class="col-md-6">
                    <h4>Company Details</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="companies.php" class="btn btn-primary">Go Back</a>
                </div>
            </div>
            <?php } ?>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-md-12">
                <?php
                    if (isset($_GET['view_details'])) {
                        $cid = $_GET['view_details'];

                        $fetch_company = mysqli_query($connection, "SELECT * FROM companies WHERE company_id = '$cid'");
                        $row = mysqli_fetch_array($fetch_company);
                        ?>
                
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <tbody>
                                        <tr>
                                            <td><strong>Username</strong></td>
                                            <td><?php echo $row['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Password</strong></td>
                                            <td><?php echo $row['password']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Company Name</strong></td>
                                            <td><?php echo $row['company_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Owner Name</strong></td>
                                            <td><?php echo $row['owner_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Office Contact</strong></td>
                                            <td><?php echo $row['office_contact']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Owner Contact</strong></td>
                                            <td><?php echo $row['owner_contact']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong></td>
                                            <td><?php echo $row['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Web Address</strong></td>
                                            <td><?php echo $row['web_address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Company Address</strong></td>
                                            <td><?php echo $row['address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Logo</strong></td>
                                            <td><img src="../img/company_logos/<?php echo $row['logo']; ?>" style="width: 100px;height: 100px;"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td><?php echo $row['status']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Account Created</strong></td>
                                            <td><?php echo $row['created']; ?></td>
                                        </tr>
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
                                <th class="border-top-0">Company Name</th>
                                <th class="border-top-0">Owner Name</th>
                                <th class="border-top-0">Company Contact</th>
                                <th class="border-top-0">Logo</th>
                                <th class="border-top-0">Current Status</th>
                                <th class="border-top-0">Change Status</th>
                                <th class="border-top-0">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $k = 1;
                            $fetch_data = mysqli_query($connection, "SELECT * FROM companies");
                            $count = mysqli_num_rows($fetch_data);

                            while ($row = mysqli_fetch_array($fetch_data)) {
                                
                                ?>
                                <tr>
                                    <td><?php echo $k; ?></td>
                                    <td><a href="companies.php?view_details=<?php echo $row['company_id']; ?>"><strong><?php echo $row['company_name']; ?></strong></a>
                                    </td>
                                    <td><?php echo $row['owner_name']; ?></td>
                                    <td><?php echo $row['office_contact']; ?></td>
                                    <td><img src="../img/company_logos/<?php echo $row['logo']; ?>" style="width: 100px;height: 100px;"></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <?php

                                        if($row['status'] == "active") {
                                            ?>
                                            <a href='companies.php?draft=<?php echo $row['company_id']; ?>'>Draft</a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href='companies.php?active=<?php echo $row['company_id']; ?>'>Active</a>
                                            <?php
                                        }
                                        ?>
                                        
                                    </td>
                                    <td><?php echo $row['created']; ?></td>
                                </tr>
                                <?php
                                $k++;
                            }
                                ?>
                        </tbody>
                    </table>
                        <?php

                            if (isset($_GET['active'])) {
                                
                                $company_id = $_GET['active'];

                                $active = mysqli_query($connection, "UPDATE companies SET status = 'active' WHERE company_id = '$company_id'");

                                header("Location: companies.php");

                            }

                            if (isset($_GET['draft'])) {
                                
                                $company_id = $_GET['draft'];

                                $draft = mysqli_query($connection, "UPDATE companies SET status = 'draft' WHERE company_id = '$company_id'");

                                header("Location: companies.php");

                            }

                            if (isset($_GET['delete'])) {
                                
                                $company_id = $_GET['delete'];

                                $delete = mysqli_query($connection, "DELETE FROM companies WHERE company_id = '$company_id'");

                                header("Location: companies.php");

                            }


                        ?>
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
