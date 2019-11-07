<?php

include('includes/security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    td {
      color: white;
      height: 40px;  

       }
    .smallbox {
      height:2px;
     
     }
     td{
        color:black;
      }
      
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <h1 style="text-align:center" class="bg-success">Students</h1>
    <center >
    
    <?php
  
     $regdisp="SELECT *FROM studentreg_tb";
     $dispque=mysqli_query($conn,$regdisp);
     $row=mysqli_fetch_assoc($dispque);
     
    //  print_r($row);
     ?>
     <div class="container">
   <table class="table">
   
   <thead >
   <tr>
   <th>id</th>
   <th>name</th>
   <th>birthday</th>
   <th>depertment</th>
   <th>regestration cod</th>
   <th>address</th>
   <th>phon</th>
   <th>HSC GPA</th>
   <th>img</th>
   </tr>
   </thead>
   <tbody class="text-primary">
     <?php 
      
     while($row=mysqli_fetch_assoc($dispque))
     {
     echo "<tr>
       <td class='text-primary'>$row[id]</td>
       <td>$row[name]</td>
       <td>$row[birth]</td>
       <td>$row[depertment]</td>
       <td>$row[regcod]</td>
       <td>$row[address]</td>
       <td>$row[phon]</td>
       <td>$row[hsc]</td>
       <td><a href='../webpages/uploadimg/$row[img]'><img src='../webpages/uploadimg/$row[img]' height='100' width='100' alt=''></a></td>
     </tr>";
     }
    ?>
     
   </tbody>
   </table>
   </div>
    
 
    
  
  </center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>





<?php 
include('includes/footer.php');
?>