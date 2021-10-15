<?php
$pictureFile = $_POST['pictureFile'];
$duration = $_POST['duration'];
shell_exec("./displayAnimation.sh '$pictureFile' '$duration'");
header("Location: http://pxl.cedrichoechli.com/service/animations.php");
?>