
        <?php
        session_start();
        include('includes/header.php');

        echo '    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
          <div class="error mx-auto" data-text="404">404</div>';  ?>

          <p class="lead text-gray-800 mb-5">Page Not Found ("<?php if(isset($_SESSION['errorpg'])){echo $_SESSION['errorpg'];}else{echo 'cant find error';} ?>")</p>
          <?php 

         echo' <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
          <a href="index.html">&larr; Back to Dashboard</a>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>';
        

    include('includes/footer.php');
        
      
    ?>

