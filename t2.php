<?php
$con = mysqli_connect("localhost","root","","IP");
$result = mysqli_query($con, "SELECT * FROM users");
while ($re = mysqli_fetch_assoc($result)) {
    echo "Name: " . $re['name'] . "<br><br>";
}
?>