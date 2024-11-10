<?php
$name = $_GET["nam"];
$name1 = $_GET["nam1"];
$sql = mysqli_connect("localhost","root","","daroo");
mysqli_query($sql,"UPDATE `daro` SET `nam`='$name1' WHERE `nam`='$name'");
include("update.html");
?>