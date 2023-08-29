;<?php
session_start();
$_SESSION["LogId"]=false;
unset($_SESSION['Username']);
unset($_SESSION['Password']);
session_destroy();
header("location:index.html");
?>