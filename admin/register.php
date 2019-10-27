<?php
include('includes/security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
            <label>usertype</label>
             <select name="usertype" class="form-control">
               <option value="admin">admin</option>
               <option value="user">user</option>
              </select>
                

            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

  <!-- ----------------message for conformation register --------------------->
  <?php 
  if(isset($_SESSION['success'])&& $_SESSION['success']!=="")
  {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
  
  }
  else if(isset($_SESSION['status']) && $_SESSION['status']!==""){
    echo $_SESSION['status'];
    unset($_SESSION['status']);
  }
  
  
  ?>
    <!-- ----------------message for conformation register  end--------------------->


<?php 
$conn=mysqli_connect("localhost","root","","adminpanel");
$que="SELECT * FROM register1";
$result=mysqli_query($conn,$que);


?>
    

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>usertype</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>

        <tbody>

        <?php 
        while($row=mysqli_fetch_assoc($result))
        {
              $id=$row['id'];
              $name=$row['username'];
              $email=$row['email'];
              $pass=$row['password'];
              $usertype=$row['usertype'];
      
     
          echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$pass ."</td>";
            echo "<td>".$usertype ."</td>";
            echo '<td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value='.$row['id'].'>
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>';
            echo '<td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value='.$row['id'].'>
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>';
          echo "</tr>";
        }?>

        </tbody>


      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>