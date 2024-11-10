<?php
$name = $_GET["nam"];
$sql = mysqli_connect("localhost","root","","daroo");
mysqli_query($sql,"DELETE FROM `daro` WHERE `nam`='$name'");
include("delete.html");
?>