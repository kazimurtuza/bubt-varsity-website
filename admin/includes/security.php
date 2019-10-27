<?php 
session_start();

if( !isset($_SESSION['adminemail']))
{
    header('location:login.php');
}

?>