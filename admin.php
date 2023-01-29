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
    <h2 class="adheader">Admin</h2>
</div>

<?php
if(empty($_POST['name']) && empty($_POST['password'])) {
     echo "<h1>please enter a name and password</h1>";
    echo '<input type="button" value="back" onclick="history.back()"/><br>';
    exit();

}
if(isset($_POST['name'])&&isset($_POST['password'])) {
    if ($_POST['name'] != "admin" && $_POST['password'] != "admin") {


        echo "<h1>please enter valid name and password</h1>";
        echo '<input type="button" value="back" onclick="history.back()"/>';
        exit();

    }
}


if(isset($_POST['name'])&&isset($_POST['password'])) {
     if ($_POST['name'] == "admin" && $_POST['password'] == "admin") {


         $getDat = new data();

         $allplan = $getDat->getAllPlans();

         echo '<a  href="https://mcameron.greenriverdev.com/485/Advise-it/index.php">home</a>';


         echo "<table>
    <tr>
        <th>token</th>
        <th>fall</th>
        <th>winter</th>
        <th>spring</th>
        <th>summer</th>
        <th>advisor</th>
        <th>last update</th>
    </tr>";


         foreach ($allplan as $row) {
             echo "<tr>";
             echo "<td>" . $row['token'] . "</td> ";
             echo "<td>" . $row['fall_notes'] . "</td> ";
             echo "<td>" . $row['winter_notes'] . "</td> ";
             echo "<td>" . $row['spring_notes'] . "</td> ";
             echo "<td>" . $row['summer_notes'] . "</td> ";
             echo "<td>" . $row['advisor'] . "</td> ";
             echo "<td>" . $row['last_update'] . "</td> ";

             echo " </tr>";
         }

         echo "</table >";
     }
 }

?>