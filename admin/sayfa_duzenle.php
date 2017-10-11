<?php 
include 'admin_header.php';
include 'admin_sidebar.php';


$id=$_GET['sayfa_id'];
$sayfaduzen=mysql_query("select*from sayfa where sayfa_id='$id'");
$sayfaduzencek=mysql_fetch_assoc($sayfaduzen);
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
                 Sayfa başarılı bir şekilde düzenlendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Sayfa düzenlenirken bir hata oluştu!!</h4>
                 '; } } ?>
              

                <form action="admin_islem.php" method="POST">
                    <div class="col-md-12">

                    <div class="form-group col-md-0">
                    
                            <input class="form-control"  type="hidden" name="sayfa_id" value="<?php echo $sayfaduzencek['sayfa_id']; ?>">
                        </div> </div>

                        <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Sayfa Başlık</label>
                            <input class="form-control"  type="text" name="sayfa_baslik" value="<?php echo $sayfaduzencek['sayfa_baslik']; ?>">
                        </div>
                        </div>  

                           <div class="col-md-12">
                          <div class="form-group col-md-6">
                            <label>Sayfa Yazar</label>
                            <input class="form-control"  type="text" name="sayfa_yazar" value="<?php echo $sayfaduzencek['sayfa_yazar']; ?>">
                          </div>  
                         </div>

                          <div class="col-md-12">
                          <div class="form-group col-md-12">
                            <label>Sayfa Detay</label>
                            <textarea name="sayfa_detay" class="ckeditor"> <?php echo $sayfaduzencek['sayfa_detay']; ?> </textarea>
                          </div>  
                         </div>


                      <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <hr>
                         <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="sayfa_duzen">Sayfa Düzenle</button></center>

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




