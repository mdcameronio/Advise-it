<?php
ob_start();
session_start();
include("includes/header.php");
include_once('classes/Plan.php');
include('classes/validate.php');
include_once('database/dataLayer.php');
ini_set('display_errors',1);
error_reporting(E_ALL);

/**
 * if no token generate new token to be displayed
 * if token is provided then get data from database and display it
 */
//date_default_timezone_set('America/Los_Angeles');
//$datec = date("l jS \of F Y h:i:s A");
//echo $datec;

if(!isset($_GET['token'])){
    $val = new validate();

    $generatedToken = $val::genToken();
    echo "<div id='tokenLink'><p><a href='https://mcameron.greenriverdev.com/485/Advise-it/planner.php?token=$generatedToken'>Plan Link</a></p><p>$generatedToken</p></div>";

    $_SESSION['gentoken'] = $generatedToken;

}else{
    $token = $_GET['token'];
    echo "<div id='tokenLink'><p><a href='https://mcameron.greenriverdev.com/485/Advise-it/planner.php?token=$token'>Plan Link</a></p><p>$token</p></div>";
    $getDataLayer = new data();
    $getData = $getDataLayer->getPlan($token);

    foreach ($getData as $row ) {

        $dataToken = $row['token'];

        $fallnotes = $row['fall_notes'];

        $winternotes = $row['winter_notes'];

        $springnotes = $row['spring_notes'];

        $summernotes = $row['summer_notes'];
        $lastUpdate = $row['last_update'];

}

}

?>
<div class="grid-container">

    <form method="post" action="confirm.php">
        <div class="grid-item"><br>
            <label for="fall">Fall </label><br>
            <textarea id="fall" name="fall-notes" rows="10" cols="30" ><?php if(isset($_GET['token'])){ echo $fallnotes ; } ?></textarea>
        </div>
        <div class="grid-item"><br>
            <label for="winter">Winter </label><br>
            <textarea id="winter" name="winter-notes" rows="10" cols="30"><?php if(isset($_GET['token'])){ echo $winternotes ; } ?></textarea>
        </div>
        <div class="grid-item"><br>
            <label for="spring">Spring</label><br>
            <textarea id="spring" name="spring-notes" rows="10" cols="30"><?php if(isset($_GET['token'])){ echo $springnotes ; } ?></textarea>
        </div>
        <div class="grid-item"><br>
            <label for="summer">Summer</label><br>
            <textarea id="summer" name="summer-notes" rows="10" cols="30"><?php if(isset($_GET['token'])){ echo $summernotes ; } ?></textarea>
        </div>
        <?php
        if(!isset($_GET['token'])){
            echo ' <input id="theSubmitButton" type="submit" name="submit" value="Submit">';
            echo '<a  href="https://mcameron.greenriverdev.com/485/Advise-it/index.php">home</a>';
        }

        else{
            $_SESSION['edit'] = true;
            $_SESSION['token'] = $_GET['token'];
            echo "Last update: " .$lastUpdate;
            echo ' <input id="theSubmitButton" type="submit" name="submit" value="Save changes"> ';
            echo '<a  href="https://mcameron.greenriverdev.com/485/Advise-it/index.php">home</a>';
        }
        ob_flush();
        ?>
    </form>
</div>
</body>
</html>

