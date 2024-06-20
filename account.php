<!doctype html>
<html lang="en">

<?php 
require_once 'assets/includes/head.php';
?>
<?php
$success = "";
$error = "";
if (isset($_POST['jobseeker'])) {
    if (!empty($_POST['address']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) 
    && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['username']) 
    && !empty($_POST['password'])) {
    
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    if ($pdo->validateInput($username, "username") &&
        $pdo->validateInput($first_name, "firstname") &&
        $pdo->validateInput($last_name, "lastname") &&
        $pdo->validateInput($email, "email") &&
        $pdo->validateInput($contact, "phone")) {

        if (!$pdo->isDataInserted("jobseekers", ['email' => $email])) {
            if (!$pdo->isDataInserted("jobseekers", ['contact' => $contact])) {
                if ($pdo->create("jobseekers", [
                    'username' => $username,
                    'password' => $password,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'contact' => $contact,
                    'address' => $address,
                    'status' => 'active'
                ])) {
                    $success = "Account created. Please sign in to proceed further. <a href='login.php'>Sign in</a>";
                } else {
                    $error = "An error occurred while creating the account.";
                }
            } else {
                $error = "Phone number is already registered.";
            }
        } else {
            $error = "Email is already registered.";
        }
    } else {
        $error = $pdo->validationErr;
    }
} else {
    $error = "All fields are required.";
}
    
}


if (isset($_POST['company'])) {
    if (!empty($_POST['address']) && !empty($_POST['username']) 
    && !empty($_POST['password']) && !empty($_POST['company_name'])  
    && !empty($_POST['owner_name']) && !empty($_POST['office_contact']) 
    && !empty($_POST['owner_contact']) && !empty($_POST['email']) 
    && !empty($_POST['web_address'])) {
    
    
    if ($pdo->validateInput($_POST["office_contact"], "phone")) {
        if ($pdo->validateInput($_POST["owner_contact"], "phone")) {
            if ($pdo->validateInput($_POST["email"], "email")) {
                        if (!$pdo->isDataInserted("companies", ['email' => $_POST['email']])) {
                            if (!$pdo->isDataInserted("companies", ['office_contact' => $_POST['office_contact']])) {
                                if (!$pdo->isDataInserted("companies", ['owner_contact' => $_POST['owner_contact']])) {
                        if ($pdo->create("companies", [
                            'username' => $_POST['username'], 
                            'password' => $_POST['password'], 
                            'company_name' => $_POST['company_name'],
                            'owner_name' => $_POST['owner_name'], 
                            'office_contact' => $_POST['office_contact'], 
                            'owner_contact' => $_POST['owner_contact'], 
                            'email' => $_POST['email'], 
                            'web_address' => $_POST['web_address'], 
                            'address' => $_POST['address'],
                            'status' => 'active'
                        ])) {
                            $success = "Account created. Please sign in to proceed further. <a href='login.php'>Sign in</a>";
                        }
                        } else {
                            $error = "Owner contact number is already registered.";
                        }
                    } else {
                        $error = "Office contact number is already registered.";
                    }
                } else {
                    $error = "Email is already registered.";
                }
            } else {
                $error = $pdo->validationErr;
            }
        } else {
            $error = $pdo->validationErr;
        }
    } else {
        $error = $pdo->validationErr;
    }
            
                
} else {
    $error = "All fields are required.";
}

}
?>

<body>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <?php 
		require_once 'assets/includes/preloader.php';
		?>
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
                            <h1>My Account</h1>
                            <p>Create an account & Start posting or hiring talents</p>
                        </div>
                        <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">My Account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- contain main informative part of the site -->
        <main class="main">
            <div class="row">
                <div class="col-md">
                    <?php
                        if (!empty($success)) {
                        ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                        <?php echo $success; ?>
                    </div>
                    <?php } else if (!empty($error)) { ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                        <?php if(is_string($error)){ echo $error;} else { foreach($error as $err){ echo $err . "<br />";}} ?>
                    </div>

                    <?php } ?>
                </div>
            </div>
            <!-- Accounts Section -->
            <section
                class="section section-accounts section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-120 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="account-box">
                                <span class="icon">
                                    <img src="assets/images/user-icon.svg" alt="user">
                                </span>
                                <div class="account-box-frame">
                                    <div class="form-head">
                                        <h2>Signup</h2>
                                        <p>(Job Seeker)</p>
                                    </div>
                                    <form class="contac-form" method="post">
                                        <div class="row">

                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="text" placeholder="First Name"
                                                    name="first_name" id="first_name">
                                            </div>

                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="text" placeholder="Last Name"
                                                    name="last_name" id="last_name">
                                            </div>
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="email" placeholder="Email"
                                                    name="email" id="email">
                                            </div>



                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="text" placeholder="Contact"
                                                    name="contact" id="contact">
                                            </div>
                                            <!-- 
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="file" placeholder="Picture"
                                                    name="picture" id="picture">
                                            </div> -->
                                           


                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="text" placeholder="Username"
                                                    name="username" id="username">
                                            </div>
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="password" placeholder="Password"
                                                    name="password" id="password">
                                            </div>

                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" type="text" placeholder="Address"
                                                    name="address" id="address">
                                            </div>


                                            <div class="col-12">
                                                <button type="submit" name="jobseeker"
                                                    class="btn btn-green btn-sm"><span
                                                        class="btn-text">Signup</span></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="account-box">
                                <span class="icon">
                                    <img src="assets/images/user-icon.svg" alt="user">
                                </span>
                                <div class="account-box-frame">
                                    <div class="form-head">
                                        <h2>Signup</h2>
                                        <p>(Company)</p>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-tab01">
                                            <form class="contac-form" method="post">
                                                <div class="row">
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text" placeholder="Username"
                                                            name="username" id="username">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="password"
                                                            placeholder="Password" name="password" id="password">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Company Name" name="company_name"
                                                            id="company_name">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text" placeholder="Owner Name"
                                                            name="owner_name" id="owner_name">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Office Contact" name="office_contact"
                                                            id="office_contact">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Owner Contact" name="owner_contact"
                                                            id="owner_contact">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="email" placeholder="Email"
                                                            name="email" id="email">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Web Address" name="web_address"
                                                            id="web_address">
                                                    </div>

                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text" placeholder="Address"
                                                            name="address" id="address">
                                                    </div>
                                                    <!-- 
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="file" placeholder="Logo"
                                                            name="logo" id="logo">
                                                    </div> -->


                                                    <div class="col-12">
                                                        <button type="submit" name="company"
                                                            class="btn btn-green btn-sm"><span
                                                                class="btn-text">Register</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="nav-tab02">
                                            <form class="contac-form" action="#">
                                                <div class="row">
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="text"
                                                            placeholder="Complete Name">
                                                    </div>
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="email"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="col-12 mb-15 mb-md-20">
                                                        <input class="form-control" type="password"
                                                            placeholder="Password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="btn btn-green btn-sm"><span
                                                                class="btn-text">Register</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

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