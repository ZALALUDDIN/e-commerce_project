<?php include_once("includes/connection.php"); ?>
<?php
    session_destroy();
    echo "<script> location.replace('$base_url')</script>";
?>