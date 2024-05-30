<header class="site-header mo-left header fullwidth">

	<div class="sticky-header main-bar-wraper navbar-expand-lg">

		<div class="main-bar clearfix">

			<div class="container clearfix">

				<div class="logo-header mostion">
					<a href="index.php" style="font-size: 13px;color :#26ae61;">SKill Sphere X</a>
				</div>

				<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<div class="extra-nav">
					<div class="extra-cell">
						<?php

						if (isset($_SESSION['js_id'])) {
						?>

							<a href="dashboard.php" style="background-color: #26ae61 !important;border-color: #26ae61 !important;" class="site-button">Dashboard</a>
							<a href="logout.php?seeker" style="background-color: #26ae61 !important;border-color: #26ae61 !important;" class="site-button">Logout</a>

						<?php
						} elseif (isset($_SESSION['company_id'])) {

						?>
							<a href="dashboard.php" style="background-color: #26ae61 !important;border-color: #26ae61 !important;" class="site-button">Dashboard</a>
							<a href="logout.php?company" style="background-color: #26ae61 !important;border-color: #26ae61 !important;" class="site-button">Logout</a>

						<?php

						} else {

						?>

							<a href="register.php" class="site-button"><i class="fa fa-user"></i> Register</a>
							<a href="login.php" class="site-button"><i class="fa fa-lock"></i> login</a>

						<?php } ?>

					</div>
				</div>

				<div class="dez-quik-search bg-primary">
					<form action="#">
						<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
						<span id="quik-search-remove"><i class="flaticon-close"></i></span>
					</form>
				</div>

				<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">

					<ul class="nav navbar-nav">

						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="jobs.php">Browse Job</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li>
							<ul class="sub-menu">
								<?php

								if (isset($_SESSION['js_id'])) {
								?>
									<li><a href="dashboard.php" class="dez-page">Dashboard</a></li>
									<li><a href="logout.php?seeker" class="dez-page">Logout</a></li>
								<?php
								} elseif (isset($_SESSION['company_id'])) {

								?>
									<li><a href="dashboard.php" class="dez-page">Dashboard</a></li>
									<li><a href="logout.php?company" class="dez-page">Logout</a></li>

								<?php

								} else {

								?>

									<li><a href="login.php" class="dez-page">Login</a></li>
									<li><a href="register.php" class="dez-page">Register</a></li>

								<?php } ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</header>

<div class="page-content">