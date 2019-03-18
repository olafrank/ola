<?php include "header.php" ?>
<?php
$username = $_GET["firstname"];
$password = $_GET["password"];

if(isset($username) && isset( $password)){
    echo "<h1> your username is $username and password is $password </h1>";
}
?>
<?php include "footer.php"?>