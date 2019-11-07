<?php 
session_start();
$conn=mysqli_connect("localhost","root","","adminpanel");
include('includenav/header.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet"> -->
    <style>
    td {
      color: white;
      height: 40px;  

       }
    .smallbox {
      height:2px;
     }
  </style>
    <title>Hello, world!</title>
  </head>
  <body style="background:red">
    <center style="padding:30px">
    <h5 style="color:white;margin-top:30px;font-family: 'McLaren', cursive;">STUDENT REGISTRATION FORM</h5>
    <form style="padding:30px" action="../admin/code.php" method="POST"  enctype="multipart/form-data">
    <table border="0" cellspacing="0" style=" padding:30px">
      <tr>
        <td width="200px">NAME</td>
        <td><input type="text" name="name" maxlength="30"/></td>
      </tr>
        <tr>
        <td width="200px">DATE OF BIRTH</td>
        <td>
          <select name="barth_date" value="DATE">
            <option>DAY</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option> 
          </select>
          <select name="barth_month" value="MONTH">
            <option>MONTH</option>
            <option>JANUARY</option>
            <option>FEBRUARY</option>
            <option>MARCH</option>
            <option>APRIL</option>
            <option>MAY</option>
            <option>JUNE</option>
            <option>JULY</option>
            <option>AUGUST</option>
            <option>SEPTEMBER</option>
            <option>OCTOBER</option>
            <option>NOVEMBER</option>
            <option>DECEMBER</option>
          </select>
          
          <select name="barth_year" value="YEAR">
            <option>YEAR</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
          </select>    
        </td>
      <tr>
        <td width="200px">EMAIL ID</td>
        <td><input type="email" name="email"/></td>
      </tr> 
      <tr>
        <td width="200px">MOBILE NUMBER</td>
        <td><input type="text" name="phon" maxlength="12" />(10 digit number)</td>
      </tr>
      <tr>
        <td width="200px">GENDER</td>
        <td>Male<input type="radio" name="gender" value="male">Female<input type="radio" value="female" name="gender"></td>
      </tr>
      <tr>
        <td width="200px">ADDRESS</td>
        <td><textarea cols="45" rows="4" name="address"></textarea></td>
      </tr>
      <tr>
        <td width="200px">PIC</td>
        <td> <input type="file" name="file2" id=""> </td>
      </tr>
      <tr>
        <td width="200px" style="vertical-align:top; padding-top:25px">QUALIFICATION</td>
        <td>
          <table border="0">
           <tr align="center" >
             <td>SI.No.</td>
             <td>Examination</td>
             <td>BOARD</td>
             <td>ID</td>
             <td>GPA</td>
             <td>YEAR</td>
           </tr>
           <tr>
             <td class="smallbox">1</td>
             <td class="smallbox">SSC</td>
             <td class="smallbox" ><input type="text" name="ssc_board" maxlength="10"></td>
             <td class="smallbox" ><input type="text" name="ssc_id"></td>
             <td class="smallbox"><input type="text" name="ssc_gpa" maxlength="4"></td>
             <td><select name="Year" style="padding:2px" name="ssc_year" value="YEAR">
            <option>YEAR</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>                
            <option>2004</option>
            <option>2005</option>
          </select>  
           </tr>
           <tr>
             <td class="smallbox">2</td>
             <td class="smallbox">HSC</td>
             <td class="smallbox" ><input type="text" maxlength="10" name="hsc_board"></td>
             <td class="smallbox" ><input type="text" name="hsc_id"></td>
             <td class="smallbox"><input type="text" name="hsc_gpa"maxlength="4"></td>
             <td><select name="Year" style="padding:2px"name="hsc_year" value="YEAR">
            <option>YEAR</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
          </select>  
         </td>
           </tr>
          </table>
        </td>
      </tr>
      
      <tr>
        <td width="200px">COURSES<br />APPLIED FOR</td>
        <td>BCA<input type="radio" name="courses" value="BCA">
            B.Com<input type="radio" name="courses" value="BCOM">
            B.Sc<input type="radio" name="courses" value="BSC">
            B.A<input type="radio" name="courses" value="BA">
            <br />
            
      </tr>
      
      <tr>
        <td></td>
        <td align="center" style="padding-right:180px"><input type="submit" name="regis"value="Submit"/>
            <input type="reset" value="Reset"/>
        </td>
      </tr>                       
  
    </table>
    </form>
    <?php 
    if(isset( $_SESSION['status']) && $_SESSION['status'] !='')
    {
      echo  $_SESSION['status'];
     
    }
 
 
    ?>


  </center>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<?php 
include('includenav/script.php');

?>