<?php
include("includes/header.html");
session_destroy();

?>
<div id="header-text">

<h2 >Home</h2>

<button onclick="window.location.href='planner.php';">Create New</button><br>
    <button id="hadbutton" onclick="window.location.href='admin.php';">admin</button>
</div>
</body>
</html>