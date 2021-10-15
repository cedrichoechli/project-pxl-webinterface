<?php
$message1 = $_POST['message'];
$duration = $_POST['duration'];
$speed = $_POST['speed'];
$red = $_POST['red'];
$green = $_POST['green'];
$blue = $_POST['blue'];
$message2 = rawurlencode($message1);
shell_exec("./displayText.sh '$message2' '$duration' '$speed' '$red' '$green' '$blue'");
header("Location: http://pxl.cedrichoechli.com/service/scrolling-text.html");
?>