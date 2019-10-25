

<?php 
session_start();
if(isset($_REQUEST['login_btn']))
{
      $conn=mysqli_connect("localhost","root","","adminpanel");
    $email=$_REQUEST['emaill'];
    $password=$_REQUEST['passwordd'];
    echo $email;
    echo $password;
    $quert="SELECT *FROM register1 WHERE email='$email' and password='$password'";
   
    $runque=mysqli_query($conn,$quert);
 
    if(mysqli_fetch_assoc($runque))
    {
        $_SESSION['adminemail']=$email;
        header('location:index.php');
    }
    else{
        $_SESSION['status']="email or password is wrong";
        header('location:login.php');
    }
    

  
 
}



?>