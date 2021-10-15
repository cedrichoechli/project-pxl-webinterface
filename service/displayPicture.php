<?php
$pictureFile = $_POST['pictureFile'];
$duration = $_POST['duration']/2;
shell_exec("./displayPicture.sh '$pictureFile' '$duration'");
header("Location: http://pxl.cedrichoechli.com/service/pictures.php");
?>