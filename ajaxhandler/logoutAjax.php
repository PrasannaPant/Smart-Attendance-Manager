<?php
session_start();
unset($_SESSION["current_user"]);   //LOGS OUT THE USER BY REMOVING THEIR LOGGING DETAILS STORED IN SESSION VARIABLE ($_SESSION)
$rv=[];
echo json_encode($rv);
?>