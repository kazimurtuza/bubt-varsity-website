
<?php 

include('includenav/header.php');

?>



 <!-- -----header image image -->
<div id="slide1" class="carousel slide" data-ride="carousel" style="position: relative;">
    <div class="carousel-inner" role="listbox">
     
     <div class="carousel-item active" id="home" >
       <img src="img/pic1.jpg" alt="slide1 not found" class="d-block img-fluid">
       <div  class="set-shadow"></div>
     </div>
     <div class="carousel-item " id="home" >
       <img src="img/bubt.jpg" alt="slide1 not found" class="d-block img-fluid">
       <div  class="set-shadow"></div>
     </div>
    </div>
    <div class=" navbar bg-sucess navbar-expand-sm " style=" position:absolute; left:450px;bottom:-20px">
      <ul class="navbar-nav" id="picbtn">
        <li class="nav-item"><button class="nav-link  btn-info px-4 py-3" id="btn1">dsghjkghghjkfhf</button></li>
        <li class="nav-item"><button class="nav-link  btn-info px-4 py-3"id="btn2">dsfgjkhhjkhjhfhf</button></li>
        <li class="nav-item"><button class="nav-link  btn-info px-4 py-3 "id="btn3">dhkghjkghjhshfhf</button></li>
      </ul>
    </div>
  </div>

  <div class="post">
      <div class="post1">
          <div class="container">
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi natus facilis, quisquam quaerat eum dicta non, voluptates et rem quae soluta consequuntur reprehenderit!</h3>
        
              <button class="btn btn-success">Learn more</button>
          </div>
         
        </div>
        <div class="post2">
          <div class="container">
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi natus facilis, quisquam quaerat eum dicta non, voluptates et rem quae soluta consequuntur reprehenderit!</h3>
        
              <button class="btn btn-success">Learn more</button>
          </div>
         
        </div>
        <div class="post3">
          <div class="container">
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi natus facilis, quisquam quaerat eum dicta non, voluptates et rem quae soluta consequuntur reprehenderit!</h3>
        
              <button class="btn btn-success">Learn more</button>
          </div>
         
        </div>
  
  
  </div>
   <!-- -------------text move bar ------------------>
   <section class="area" style="display:<?php  echo $_REQUEST['hide'];?>;">
      <div class="triangle">
        </div>
        <div style="width:500px;height:50px; background: rgb(53, 50, 50);position:fixed;bottom:534px;text-align: center; color:blanchedalmond">
        <marquee behavior="" direction="" style="padding-top:10px;" scrolldelay="150">
        <?php 
            if(isset($_REQUEST['submit']))
            {
               echo $_REQUEST['bangla'];
              
            }
        ?>
        </marquee>
        </div>
      <div class="triangle2">
        </div>

   </section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    
 

<?php 
include('includenav/script.php');
?>