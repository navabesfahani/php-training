<?php
$f = $_GET["name"];
$a = mysqli_connect("localhost","root","","daroo");
$b = mysqli_query($a, "SELECT * FROM daro WHERE `nam`='$f'");
echo '<table border="1">';
while ($c = mysqli_fetch_array($b)) {
    echo "<tr>";
    echo "<td>".$c['cod']."</td>";
    echo "<td>".$c['nam']."</td>";
    echo "<td>".$c['price']."</td>";
    echo "</tr>";
}
echo "</table>";
include("search.html");
?>