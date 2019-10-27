
<?php
session_start();
if(isset($_REQUEST['logout_btn']))
{
    session_destroy();
    unset($_session['adminemail']);
    header('location:login.php');
}

?>
