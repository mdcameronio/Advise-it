<?php

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
    echo "hello line 25 ";
    foreach ($getData as $row ) {

        $dataToken = $row['token'];
        $fall1 = $row['fall1'];
        $fall2 = $row['fall2'];
        $fall3 = $row['fall3'];
        $fall4 = $row['fall4'];
        $fallnotes = $row['fall_notes'];
        $winter1 = $row['winter1'];
        $winter2 = $row['winter2'];
        $winter3 = $row['winter3'];
        $winter4 = $row['winter4'];
        $winternotes = $row['winter_notes'];
        $spring1 = $row['spring1'];
        $spring2 = $row['spring2'];
        $spring3 = $row['spring3'];
        $spring4 = $row['winter4'];
        $springnotes = $row['spring_notes'];
        $summer1 = $row['summer1'];
        $summer2 = $row['summer2'];
        $summer3 = $row['summer3'];
        $summer4 = $row['summer4'];
        $summernotes = $row['summer_notes'];


}

}

?>
<div class="grid-container">

    <form method="post" action="confirm.php">
        <div class="grid-item">Fall<br>
             <label>1.
                <input type="text" name="fall-1" value="<?php if(isset($_GET['token'])){ echo $fall1 ; } ?>">
            </label><br>
             <label>2.
                <input type="text" name="fall-2" value="<?php if(isset($_GET['token'])){ echo $fall2 ; } ?>">
            </label><br>
             <label>3.
                <input type="text" name="fall-3" value="<?php if(isset($_GET['token'])){ echo $fall3 ; } ?>">
            </label><br>
             <label>4.
                <input type="text" name="fall-4" value="<?php if(isset($_GET['token'])){ echo $fall4 ; } ?>">
            </label><br>
            <label>Notes </label><br>
            <textarea name="fall-notes" rows="4" cols="50" ><?php if(isset($_GET['token'])){ echo $fallnotes ; } ?></textarea>
        </div>
        <div class="grid-item">Winter<br>
             <label>1.
                <input type="text" name="winter-1" value="<?php if(isset($_GET['token'])){ echo $winter1 ; } ?>">
            </label><br>
             <label>2.
                <input type="text" name="winter-2" value="<?php if(isset($_GET['token'])){ echo $winter2 ; } ?>">
            </label><br>
             <label>3.
                <input type="text" name="winter-3" value="<?php if(isset($_GET['token'])){ echo $winter3 ; } ?>">
            </label><br>
             <label>4.
                <input type="text" name="winter-4" value="<?php if(isset($_GET['token'])){ echo $winter4 ; } ?>">
            </label><br>
            <label>Notes </label><br>
            <textarea name="winter-notes" rows="4" cols="50"><?php if(isset($_GET['token'])){ echo $winternotes ; } ?></textarea>
        </div>
        <div class="grid-item">Spring<br>
            <label>1.
                <input type="text" name="spring-1" value="<?php if(isset($_GET['token'])){ echo $spring1 ; } ?>">
            </label><br>
            <label>2.
                <input type="text" name="spring-2" value="<?php if(isset($_GET['token'])){ echo $spring2 ; } ?>">
            </label><br>
            <label>3.
                <input type="text" name="spring-3" value="<?php if(isset($_GET['token'])){ echo $spring3 ; } ?>">
            </label><br>
            <label>4.
                <input type="text" name="spring-4" value="<?php if(isset($_GET['token'])){ echo $spring4 ; } ?>">
            </label><br>
            <label>Notes </label><br>
            <textarea name="spring-notes" rows="4" cols="50"><?php if(isset($_GET['token'])){ echo $springnotes ; } ?></textarea>
        </div>
        <div class="grid-item">Summer<br>
            <label>1.
                <input type="text" name="summer-1" value="<?php if(isset($_GET['token'])){ echo $summer1 ; } ?>">
            </label><br>
            <label>2.
                <input type="text" name="summer-2" value="<?php if(isset($_GET['token'])){ echo $summer2 ; } ?>">
            </label><br>
            <label>3.
                <input type="text" name="summer-3" value="<?php if(isset($_GET['token'])){ echo $summer3 ; } ?>">
            </label><br>
            <label>4.
                <input type="text" name="summer-4" value="<?php if(isset($_GET['token'])){ echo $summer4 ; } ?>">
            </label><br>
            <label>Notes </label><br>
            <textarea name="summer-notes" rows="4" cols="50"><?php if(isset($_GET['token'])){ echo $summernotes ; } ?></textarea>
        </div><br>
        <?php
        if(!isset($_GET['token']))
       echo ' <input id="theSubmitButton" type="submit" name="submit" value="Submit">';
        ?>
    </form>
</div>
</body>
</html>

