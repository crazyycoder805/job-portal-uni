<?php include("assets/includes/extra.php/head.php");

require_once 'assets/includes/pdo.php';

$t = $pdo->read('messages');

?>

<?php include("assets/includes/extra/navigation.php"); ?>

<div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
    <div class="container">
        <div class="dez-bnr-inr-entry">
            <h1 class="text-white">Dashboard</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Dashboard</li>
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

                    <h2><strong>CHAT</strong></h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Phone</th>
                                <th>Response</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($t as $b) {
                            ?>
                                <tr>
                                    <td><?php
                                        echo $b['name'];
                                        ?></td>
                                    <td><?php
                                        echo $b['lastname'];
                                        ?></td>
                                    <td><?php
                                        echo $b['email'];
                                        ?></td>
                                    <td><?php echo $b['message']; ?></td>
                                    <td><?php
                                        echo $b['phone'];
                                        ?></td>
                                    <td>
                                        <?php
                                        echo $b['status'] !== "n" ? "Waiting for admin to response..." : "Reply: " . $b['rep'] . "<br /> Response back:" . "<br />" . '
                                                        
                                                        
                                                        <form id="r-f">
                                                            <input hidden id="id" name="id" value="' . $b['id'] . '" />
                                                            <input hidden id="file" name="file" value="UPDTAE_R_FILE" />
                                                            <textarea placeholder="Message" id="r-i" name="r-i" class="form-control"></textarea>
                                                            <button id="r-b" name="r-b" type="submit" class="btn btn-sm mt-1 btn-primary">Send</button>
                                                        </form>';
                                        ?>

                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>

</section>

<?php include("assets/includes/extra/footer.php"); ?>

<script>
    $("#r-f").on("submit", function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        var file = formData.get('file');
        var id = formData.get('id');
        $.ajax({
            type: "POST",
            url: "update-system.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                alert(res);
                if (res == "Message has been sent please wait for admin to reply...") {
                    location.href = "chat.php"
                }
            }
        });
    });
</script>