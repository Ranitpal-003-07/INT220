<?php
session_start();
$_SESSION["username"]="jhon"."<br>";
$_SESSION["category"]="Books";
echo "We have saved the session";
?>