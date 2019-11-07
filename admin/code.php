<?php 
include('includes/security.php');

// /////////////insert addmin in data base add set in session//////////////////

if(isset($_REQUEST['registerbtn'])){
    $name=$_REQUEST['username'];
    $email= $_REQUEST['email'];
    $pass=$_REQUEST['password'];
    $cpass=$_REQUEST['confirmpassword'];
    $usertype=$_REQUEST['usertype'];
   if($pass===$cpass)
    {
     $que="INSERT INTO register1 (username,email,password,usertype) value('$name','$email','$pass','$usertype')";
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

 <!-- ----------admin register update button --------------->
<?php
if(isset($_REQUEST['save']))
{
  $uname= $_REQUEST['username'];
  $email=$_REQUEST['email'];
  $pass= $_REQUEST['password']."<br/>";
  $id= $_REQUEST['id'];
  $usertype=$_REQUEST['usertype'];

$queupdate="UPDATE register1 SET username='$uname', email='$email',password='$pass', usertype='$usertype' where id= {$_REQUEST['id']}";
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

<!-- --------------damin regiser delete option ------------------->
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


<!-- -----------indert apply registration -->

<?php

if($_REQUEST['regis']){

  // ///////////////////////////img file upload//////////////////
    $file=$_FILES['file2'];
    print_r($file);
  
    $name=$_FILES['file2']['name'];
    echo "<br/>"."name = ".$name."<br/>";
    $position=$_FILES['file2']['tmp_name'];
    echo "position = ".$position."<br/>";
  
    $filstringeconvertarry=explode('.',$name);
    print_r( $filstringeconvertarry);
    // echo $filstringeconvertarry;
    echo end($filstringeconvertarry);
    $newposition="../webpages/uploadimg/".$name;
    move_uploaded_file($position,$newposition);
    echo "<a href='$newposition' > <img src='$newposition'alt=' ' height='100' width='100' class='img-fluid'/> </a>";
       
  // ///////////////////img file upload end//////////////////

  
           $names=$_REQUEST['name'];
           $year=$_REQUEST['barth_year'];
           $month=$_REQUEST['barth_month'];
           $day=$_REQUEST['barth_date'];
           $phon=$_REQUEST['phon'];
           $gender=$_REQUEST['gender'];
           $address=$_REQUEST['address'];
           $ssc_board=$_REQUEST['ssc_board'];
           $ssc_id=$_REQUEST['ssc_id'];
           $ssc_gpa=$_REQUEST['ssc_gpa'];
           $hsc_board=$_REQUEST['hsc_board'];
           $hsc_id=$_REQUEST['hsc_id'];
           $hsc_gpa=$_REQUEST['hsc_gpa'];
           $courses=$_REQUEST['courses'];
           $courses=$_REQUEST['courses'];
           $date=$_REQUEST['barth_date']."/".$_REQUEST['barth_month']."/".$_REQUEST['barth_year'];
           echo $date;
           $regcod=uniqid();
          //  ///////////insert regester value//////////////////////////
           if($names !== "" && $date !== "" && $name !== "" && $courses !== "" && $regcod !== "" && $address !== "" && $phon !== "" && $hsc_gpa !==""){
          $insert="INSERT INTO studentreg_tb (name,birth,img,depertment,regcod,address,phon,hsc) VALUES ('$names','$date','$name','$courses','$regcod','$address','$phon','$hsc_gpa')";
          $queryset=mysqli_query($conn,$insert);
          //  ///////////insert regester value end//////////////////////////
     if($queryset)
     {
       
       echo '<script> alert("message successfully sent"); </script>';
       $_SESSION['status']="registration is success";
     }
     else{
      //  echo '<script> alert("message not successfully sent"); </script>';
       
     }
    }

    else{
      $_SESSION['status']="registration is not success plz fillup in proper way";
    }
    header('Location: ../webpages/online_admission.php');

    } 


    
?>