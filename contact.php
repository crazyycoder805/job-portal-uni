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
                            <h1>Contact Us</h1>
                            <p>Feel free to get in touch with us. Need Help?</p>
                        </div>
                        <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- contain main informative part of the site -->
        <main class="main">
            <!-- Contact Section -->
            <section
                class="section section-contact section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-120 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-120">
                <div class="container">
                    <!-- Section header -->
                    <header class="section-header mb-30 mb-md-45 mb-xl-60">
                        <strong class="subtitle">Connect with Us</strong>
                        <h2>We Would Love to Respond to your queries</h2>
                        <p>Fill out the form and a remember from our team will get back to you <strong>within 24
                                hours.</strong></p>
                    </header>
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-6 mb-40 mb-md-0">
                            <!-- Contact Form -->
                            <form class="contac-form" action="#">
                                <div class="row">
                                    <div class="col-12 mb-15 mb-md-20 mb-lg-25">
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-12 mb-15 mb-md-20 mb-lg-25">
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-12 mb-15 mb-md-20 mb-lg-25">
                                        <input class="form-control" type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-12 mb-15 mb-md-20 mb-lg-25">
                                        <textarea class="form-control" cols="30" rows="10"
                                            placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-green btn-sm"><span class="btn-text">Send
                                                Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <ul class="contact-support">
                                <li>
                                    <div class="contact-box">
                                        <div class="icon-holder">
                                            <i class="icon-map-pin"></i>
                                        </div>
                                        <div class="textbox">
                                            <h3 class="h4">Location:</h3>
                                            <address>Mirpur<br> AJK</address>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-box">
                                        <div class="icon-holder">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <div class="textbox">
                                            <h3 class="h4">Phone No:</h3>
                                            <p>
                                                Open a chat or give us call at<br>
                                                <a href="tel:+44(0)2079422000">+12 345 678 910</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-box">
                                        <div class="icon-holder">
                                            <i class="icon-mail1"></i>
                                        </div>
                                        <div class="textbox">
                                            <h3 class="h4">Email Address:</h3>
                                            <p>
                                                Responsive within 1-2 business days<br>
                                                <a href="mailto:support@Spherex.com">support@Spherex.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Live
                                            Support</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-40 mt-md-60 mt-lg-80">
                            <div class="map-holder">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.228235889099!2d-73.99838752347539!3d40.735003136206416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599799c5d041%3A0x555f998519eaa4ce!2s26%20W%2012th%20St%2C%20New%20York%2C%20NY%2010011%2C%20USA!5e0!3m2!1sen!2s!4v1685637946572!5m2!1sen!2s"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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