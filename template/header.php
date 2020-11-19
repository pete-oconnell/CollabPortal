<?php

session_start();

$_SESSION['fullname'] = "Pete O'Connell";
$user['permission'] = 0;
$user['lastvisited'] = 0;

?>
<!DOCTYPE html>
<html>
<head>
<title>Collaboration Portal</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>