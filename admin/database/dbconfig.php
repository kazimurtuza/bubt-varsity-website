

<?php
session_start();

$src="localhost";
$name="root";
$pass="";
$db="adminpanel";
$conn=mysqli_connect($src,$name,$pass,$db);
if($conn){
    // echo "database conn";
}
else{
    $_SESSION['errorpg']="databse not connect";
  header('location:error.php');
}

?>