<?php
ob_start();
session_start();
include("includes/header.html");
include_once('classes/Plan.php');
include_once('database/dataLayer.php');
ini_set('display_errors',1);
error_reporting(E_ALL);
?>


    <div class="card">
        <div class="container">
            <form id="adform" action="admin.php" method="post">
                <label>Name:
                 <input type="text" name="name">
                </label><br>
                <label>password:
                <input type="password" name="password">
                </label><br>
                <input type="submit">
            </form>
        </div>

    </div>



