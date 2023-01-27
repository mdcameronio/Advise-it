<?php
ob_start();
session_start();
include("includes/header.html");
include_once('classes/Plan.php');
include_once('database/dataLayer.php');
ini_set('display_errors',1);
error_reporting(E_ALL);


//if(isset($_POST['name'])&&isset($_POST['password'])){
//        if($_POST['name']=="admin"&&$_POST['password']=="admin"){
//            echo "your in!";
//
//        }else{
//            echo "<h1>please enter valid name and password</h1>";
//        }
//}

?>

<div>
    <h2 class="adheader">Admin Log in</h2>
</div>



            <form id="adform" action="admin.php" method="post">
                <label for="name">Name:</label>
                 <input id="name" type="text" name="name">
                <br>
                <label for="pass">password:</label>
                <input id="pass" type="password" name="password">
                <br>
                <input type="submit" value="submit">
            </form>
<a  href="https://mcameron.greenriverdev.com/485/Advise-it/index.php">home</a>






