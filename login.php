<?php
ob_start();
session_start();
include("includes/header.html");
include_once('classes/Plan.php');
include_once('database/dataLayer.php');
ini_set('display_errors',1);
error_reporting(E_ALL);


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






