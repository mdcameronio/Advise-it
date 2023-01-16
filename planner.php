<?php

//ob_start();
session_start();
include("includes/header.php");
include('database/DataLayter.php');
include('classes/Plan.php');
include('classes/validate.php');

ini_set('display_errors',1);
error_reporting(E_ALL);

if(!isset($_GET['token'])){
    $val = new validate();

    $generatedToken = $val::genToken();
    echo "<div id='tokenLink'><p><a href='https://mcameron.greenriverdev.com/485/Advise-it/planner.php?token=$generatedToken'>Plan Link</a></p><p>$generatedToken</p></div>";

    $_SESSION['gentoken'] = $generatedToken;
}else{
    $token = $_GET['token'];
}

?>
<div class="grid-container">

    <form method="post" action="confirm.php">
        <div class="grid-item">Fall<br>
             <label>1.
                <input type="text" name="fall-1">
            </label><br>
             <label>2.
                <input type="text" name="fall-2">
            </label><br>
             <label>3.
                <input type="text" name="fall-3">
            </label><br>
             <label>4.
                <input type="text" name="fall-4">
            </label>
        </div>
        <div class="grid-item">Winter<br>
             <label>1.
                <input type="text" name="winter-1">
            </label><br>
             <label>2.
                <input type="text" name="winter-2">
            </label><br>
             <label>3.
                <input type="text" name="winter-3">
            </label><br>
             <label>4.
                <input type="text" name="winter-4">
            </label>
        </div>
        <div class="grid-item">Spring<br>
            <label>1.
                <input type="text" name="spring-1">
            </label><br>
            <label>2.
                <input type="text" name="spring-2">
            </label><br>
            <label>3.
                <input type="text" name="spring-3">
            </label><br>
            <label>4.
                <input type="text" name="spring-4">
            </label>
        </div>
        <div class="grid-item">Summer<br>
            <label>1.
                <input type="text" name="summer-1">
            </label><br>
            <label>2.
                <input type="text" name="summer-2">
            </label><br>
            <label>3.
                <input type="text" name="summer-3">
            </label><br>
            <label>4.
                <input type="text" name="summer-4">
            </label>
        </div><br>
        <?php
        if(!isset($_GET['token']))
       echo ' <input id="theSubmitButton" type="submit" name="submit" value="Submit">';
        ?>
    </form>
</div>
</body>
</html>

