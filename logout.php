<?php
require_once("setup.php");
$google->revokeToken($_SESSION['token']);
session_destroy();
header("location:index.php");
?>