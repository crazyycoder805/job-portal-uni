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
                <li class="breadcrumb-item active">Gigs</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">

                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title mb-4">All Orders</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable" class="table v-middle">
                                    <thead>
                                        <tr class="bg-dark text-light">
                                            <th class="border-top-0">Order id</th>
                                            <th class="border-top-0">Order status</th>

                                            <th class="border-top-0">Pay with</th>
                                            <th class="border-top-0">Total</th>
                                            <!-- <th>Action</th> -->

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                            $k = 1;
                                            $fetch_data = mysqli_query($connection, "SELECT * FROM stripe_payments");
                                            $count = mysqli_num_rows($fetch_data);

                                            while ($row = mysqli_fetch_array($fetch_data)) {
                                                
                                                ?>
                                        <tr>
                                            <td><?php echo $row['order_id']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['pay_with']; ?></td>
                                            <td><?php echo $row['total']; ?></td>

                                        </tr>
                                        <?php
                                                $k++;
                                            }
                                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if (isset($_GET['delete'])) {
                    
                    $delete_id = $_GET['delete'];

                    mysqli_query($connection, "DELETE FROM gigs WHERE id = '$delete_id'");

                    header("Location: gigs.php");

                }
            ?>
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