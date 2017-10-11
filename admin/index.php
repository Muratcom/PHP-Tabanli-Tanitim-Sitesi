<?php 

include 'admin_header.php';
include 'admin_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}

 ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Hoşgeldiniz!!!</h1>
                        <h1 class="page-subhead-line">Sitenizle ilgili ayarlara sol taraftaki linklerden erişim sağlayabilirsiniz. </h1>
                            <img style="width: 100%; height: 425px;" src="assets/img/ist2.gif">
                    </div>
                </div>
             
                <hr>
               

            </div>
            
        </div>
      
    </div>
    
   <?php 
include 'admin_footer.php';

    ?>