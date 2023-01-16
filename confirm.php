<?php
session_start();
include("includes/header.php");
include_once('database/dataLayer.php');
include_once('classes/Plan.php');



$datalayer = new data();
$planned = new Plan();

$fall1 = "";
if (!empty($_POST['fall-1'])) {
    $fall1 = $_POST['fall-1'];
    $planned->setFall($fall1);
}

$winter1 = "";
if (!empty($_POST['winter-1'])) {
    $winter1 = $_POST['winter-1'];
    $planned->setWinter($winter1);
}

$spring1 = "";
if (!empty($_POST['spring-1'])) {
    $spring1 = $_POST['spring-1'];
    $planned->setSpring($spring1);
}

$summer1 = "";
if (!empty($_POST['summer-1'])) {
    $summer1 = $_POST['summer-1'];
    $planned->setSummer($summer1);
}

$token = $_SESSION['gentoken'];
$planned->setToken($token);
$id = $datalayer->savePlan($planned);
echo "your plan has been saved id: ".$id."<br>";
date_default_timezone_set('America/Los_Angeles');
echo date("l jS \of F Y h:i:s A");
session_destroy();


