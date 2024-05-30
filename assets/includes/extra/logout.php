<?php

ob_start();
session_start();

if (isset($_GET['seeker'])) {

	unset($_SESSION['js_id']);
} else {

	unset($_SESSION['company_id']);
}

header("Location:.../../../../../index.php");
