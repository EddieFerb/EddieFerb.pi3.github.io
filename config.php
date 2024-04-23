<?php
$db_host = "us-cluster-east-01.k8s.cleardb.net";
$db_user = "bd4484bc4707c1";
$db_pass = "f6c56a50";
$db_name = "heroku_9076c04e8309ddd";

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");
?>
