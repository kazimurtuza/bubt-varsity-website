<?php 
session_start();

$src="localhost";
$name="root";
$pass="";
$db="adminpanel";
$conn=mysqli_connect($src,$name,$pass,$db);

// /////////////insert addmin in data base add set in session//////////////////

if(isset($_REQUEST['registerbtn'])){
    $name=$_REQUEST['username'];
    $email= $_REQUEST['email'];
    $pass=$_REQUEST['password'];
    $cpass=$_REQUEST['confirmpassword'];
   if($pass===$cpass)
    {
     $que="INSERT INTO register1 (username,email,password) value('$name','$email','$pass')";
     $res=mysqli_query($conn,$que);
    if($res){
          echo "inserted";
          $_SESSION['success']="admin profile added";
          header('location: register.php');
            }
 
    else{
        echo "not inserted";
        $_SESSION['status']="admin profile not added";
        header('location: register.php');
    }
  }
  else{
    echo "pass not match with confirmpass";
    $_SESSION['status']="conferm pass not match {$cpass}";
    header('location: register.php');

  }
 }



?>
<!-- // /////////////insert addmin in data base add set in session  end ////////////////// -->


<!-- --------------------------------edit admin ------------------------------------------ -->

<?php 

if(isset($_REQUEST['edit_btn']))
{
    echo "editcall";
}



?>

 <!-- ----------register update button --------------->
<?php
if(isset($_REQUEST['save']))
{
  $uname= $_REQUEST['username'];
  $email=$_REQUEST['email'];
  $pass= $_REQUEST['password']."<br/>";
  $id= $_REQUEST['id'];

$queupdate="UPDATE register1 SET username='$uname', email='$email',password='$pass' where id= {$_REQUEST['id']}";
$delete=mysqli_query($conn,$queupdate);
if($delete)
{
   $_SESSION['success']="id:$id update is success";
   header('location:register.php');
}
else{
  $_SESSION['status']="update is not success";
  header('location:register.php');
}


}


?>

<!-- --------------regiser delete option ------------------->
<?php
if(isset($_REQUEST['delete_btn']))
{
  $id= $_REQUEST['delete_id'];
$quedele="DELETE FROM register1 where id ={$_REQUEST['delete_id']}";
$resultdele=mysqli_query($conn,$quedele);
if($resultdele)
{
  $_SESSION['success']="id $id id deleted";
  header('location: register.php');
}
else{
  $_SESSION['status']="id $id is not deleted ";
  header('location:  register.php');
}
}

?>