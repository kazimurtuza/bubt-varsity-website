<?php 

include('database/dbconfig.php');

if( !isset($_SESSION['adminemail']))
{
    header('location:login.php');
}

?>