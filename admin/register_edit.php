<?php  
include('includes/security.php');
include('includes/header.php');
include('includes/navbar.php');

?>
<div class="container-fluid">

<div class="card">
<div class="card-header">
<h4 class="text-success">Edit admin</h4>
</div>

<div class="card-body">
<?php 
if(isset($_REQUEST['edit_btn']))
{

$conn=mysqli_connect("localhost","root","","adminpanel");
$que="SELECT * FROM register1 where id={$_REQUEST['edit_id']}";
$reault=mysqli_query($conn,$que);
$row=mysqli_fetch_assoc($reault);

?>
        <!-- -----------------------------register edit code ------------------------------>

      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
               
                <input type="hidden" name="id" value="<?php echo $row['id']?>"  class="form-control">
            </div>
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" value="<?php echo $row['username']?>"  class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $row['email']?>"  class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password"  value="<?php echo $row['password']?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>usertype</label>
                <select name="usertype" class="form-control"id="">
                <option value="admin">admin</option>
                <option value="user">user</option>
                </select>

            </div>
            <div class="form-group">
                    
        <a href="register.php" class="btn btn-danger">calcle</a>
        <button type="submit" name="save" class="btn btn-success" >save</button>
            </div>
        

     

      </form>

<?php }?>

</div>
</div>
</div>






<?php 
include('includes/scripts.php');
include('includes/footer.php');

?>