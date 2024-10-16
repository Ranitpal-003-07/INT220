<?php
session_start();
echo "Welcome".$_SESSION["username"];
echo "Your category is ".$_SESSION["category"];
?>