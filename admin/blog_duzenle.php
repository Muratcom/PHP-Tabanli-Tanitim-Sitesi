<?php 
include 'admin_header.php';
include 'admin_sidebar.php';


$id=$_GET['blog_id'];
$blogduzen=mysql_query("select*from blog where blog_id='$id'");
$blogduzencek=mysql_fetch_assoc($blogduzen);
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> SİTE GENEL AYARLARI</h1>
<h1 class="page-subhead-line">Sitenizdeki sayfa düzenlemelerini bu sayfadan yapabilirsiniz</h1>

                <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
                 Haber başarılı bir şekilde düzenlendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Haber düzenlenirken bir hata oluştu!!</h4>
                 '; } } ?>
              

                <form action="admin_islem.php" method="POST">
                    <div class="col-md-12">

                    <div class="form-group col-md-0">
                    
                            <input class="form-control"  type="hidden" name="blog_id" value="<?php echo $blogduzencek['blog_id']; ?>">
                        </div> </div>

                        <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Haber Başlık</label>
                            <input class="form-control"  type="text" name="blog_baslik" value="<?php echo $blogduzencek['blog_baslik']; ?>">
                        </div>
                        </div>  

                         

                          <div class="col-md-12">
                          <div class="form-group col-md-12">
                            <label>Haber Detay</label>
                            <textarea name="blog_icerik" class="ckeditor"> <?php echo $blogduzencek['blog_icerik']; ?> </textarea>
                          </div>  
                         </div>


                      <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <hr>
                         <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="blog_duzen">Blog Haberi Düzenle</button></center>

                        </div>
                          </div>

                     
                      


                    
                </form>
            </div>
        </div>
    </div>
</div>
<?php   
include 'admin_footer.php';
 ?>




