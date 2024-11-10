<?php
$code = $_GET["cod"];
$name = $_GET["nam"];
$price=$_GET["price"];
$sql = mysqli_connect("localhost","root","","daroo");
mysqli_query($sql,"INSERT INTO daro VALUES ('$code','$name','$price')");
include("insert.html");
?>