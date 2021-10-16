<?php
$type = "picture";
$duration = $_POST['duration'];
shell_exec("./loop.sh '$type' '$duration'");
header("Location: http://pxl.cedrichoechli.com/service/pictures.php");
?>