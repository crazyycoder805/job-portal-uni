<?php include("assets/includes/extra/head.php"); ?>
<?php include("assets/includes/pdo.php"); ?>

<?php include("assets/includes/extra/navigation.php"); ?>

<div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
    <div class="container">
        <div class="dez-bnr-inr-entry">
            <h1 class="text-white">Posted Jobs</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Posted Jobs</li>
                </ul>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>

<style>
body {
    background: white !important;
}

.list-group-item {
    background-color: transparent !important;
    border: none !important;
}

.list-group-item a {
    color: white !important;
}

.list-group-item a:hover {
    color: #2e55fa;
}

footer.footer {
    display: none !important;
}
</style>
<section style="padding: 80px 0px;background: #fff;">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2" style="background: #26ae61;height: 100%;">
                <div class="pt-5 pb-5" style="">

                    <div>

                        <?php

                        if (isset($_SESSION['company_id'])) {

                            include("assets/includes/extra/company_nav.php");
                        } else {

                            include("assets/includes/extra/seeker_nav.php");
                        }
                        ?>

                    </div>

                </div>

            </div>

            <div class="col-md-10">

                <div class="pt-5 pl-5 pr-5 pb-5" style="padding: 15px 20px;box-shadow: 0 0 27px 0 rgba(48,48,48,.09);">

                    <div class="row">
                        <div class="col-md-6">

                            <h3 class=""><strong>ORDERS</strong></h3>

                        </div>

                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Order id</th>
                                    <th>Order status</th>

                                    <th>Pay with</th>
                                    <th>Total</th>
                                    <!-- <th>Action</th> -->

                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                $orders = $pdo->read("stripe_payments", ['company_id' => $_SESSION['company_id']]);
                                foreach ($orders as $or) {
                                    
                                ?>
                                <tr>
                                    <td><?php echo $or['order_id']; ?></td>
                                    <td><?php echo $or['status']; ?></td>
                                    <td><?php echo $or['pay_with']; ?></td>
                                    <td><?php echo $or['total']; ?></td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php

if (isset($_GET['delete'])) {

    $delete = $_GET['delete'];

    $delete = mysqli_query($connection, "DELETE FROM jobs WHERE job_id = '$delete'");

    header("Location: posted_jobs.php");
}

?>

<?php include("assets/includes/extra/footer.php"); ?>