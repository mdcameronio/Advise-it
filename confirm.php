<?php
session_start();
include("includes/header.php");
include_once('database/dataLayer.php');
include_once('classes/Plan.php');


//creat datalayer object
$datalayer = new data();
//create plan object
$planned = new Plan();

//retrive data entered into form
$fall1 = "";
if (!empty($_POST['fall-1'])) {
    $fall1 = $_POST['fall-1'];
    $planned->setFall1($fall1);
}
$fall2 = "";
if (!empty($_POST['fall-2'])) {
    $fall2 = $_POST['fall-2'];
    $planned->setFall2($fall2);
}
$fall3 = "";
if (!empty($_POST['fall-3'])) {
    $fall3 = $_POST['fall-3'];
    $planned->setFall3($fall3);
}
$fall4 = "";
if (!empty($_POST['fall-4'])) {
    $fall4 = $_POST['fall-4'];
    $planned->setFall4($fall4);
}

$winter1 = "";
if (!empty($_POST['winter-1'])) {
    $winter1 = $_POST['winter-1'];
    $planned->setWinter1($winter1);
}
$winter2 = "";
if (!empty($_POST['winter-2'])) {
    $winter2 = $_POST['winter-2'];
    $planned->setWinter2($winter2);
}
$winter3 = "";
if (!empty($_POST['winter-3'])) {
    $winter3 = $_POST['winter-3'];
    $planned->setWinter3($winter3);
}
$winter4 = "";
if (!empty($_POST['winter-4'])) {
    $winter4 = $_POST['winter-4'];
    $planned->setWinter4($winter4);
}
$spring1 = "";
if (!empty($_POST['spring-1'])) {
    $spring1 = $_POST['spring-1'];
    $planned->setSpring1($spring1);
}
$spring2 = "";
if (!empty($_POST['spring-2'])) {
    $spring2 = $_POST['spring-2'];
    $planned->setSpring2($spring2);
}
$spring3 = "";
if (!empty($_POST['spring-3'])) {
    $spring3 = $_POST['spring-3'];
    $planned->setSpring3($spring3);
}
$spring4 = "";
if (!empty($_POST['spring-4'])) {
    $spring4 = $_POST['spring-4'];
    $planned->setSpring4($spring4);
}
$summer1 = "";
if (!empty($_POST['summer-1'])) {
    $summer1 = $_POST['summer-1'];
    $planned->setSummer1($summer1);
}
$summer2 = "";
if (!empty($_POST['summer-2'])) {
    $summer2 = $_POST['summer-2'];
    $planned->setSummer2($summer2);
}
$summer3 = "";
if (!empty($_POST['summer-3'])) {
    $summer3 = $_POST['summer-3'];
    $planned->setSummer3($summer3);
}
$summer4 = "";
if (!empty($_POST['summer-4'])) {
    $summer4 = $_POST['summer-4'];
    $planned->setSummer4($summer4);
}
$fallNotes = "";
if(!empty($_POST['fall-notes'])){
    $fallNotes = $_POST['fall-notes'];
    $planned->setFallNotes($fallNotes);
}
$winterNotes = "";
if(!empty($_POST['winter-notes'])){
    $winterNotes = $_POST['winter-notes'];
    $planned->setWinterNotes($winterNotes);
}
$springNotes = "";
if(!empty($_POST['spring-notes'])){
    $springNotes = $_POST['spring-notes'];
    $planned->setSpringNotes($springNotes);
}
$summerNotes = "";
if(!empty($_POST['summer-notes'])){
    $summerNotes = $_POST['summer-notes'];
    $planned->setSummerNotes($summerNotes);
}
//get token generated on plan page
$token = $_SESSION['gentoken'];
//set token to plan
$planned->setToken($token);

$date = $_SESSION['dated'];

$planned->setDate($date);
//save plan to database
$id = $datalayer->savePlan($planned);


echo "your plan has been saved id: ".$id."<br>";



echo $date;
session_destroy();


