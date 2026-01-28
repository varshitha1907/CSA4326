<form method="post">
    Enter Your Name:
    <input type="text" name="name">
    <input type="submit" name="submit" value="Insert">
</form>

<?php
$c = mysqli_connect("localhost", "root", "");
mysqli_query($c, "CREATE DATABASE IF NOT EXISTS IP");
mysqli_select_db($c, "IP");
mysqli_query($c, "CREATE TABLE IF NOT EXISTS users (name VARCHAR(50))");

if (isset($_POST['submit'])) {
    mysqli_query($c, "INSERT INTO users(name) VALUES ('".$_POST['name']."')");
}
?>