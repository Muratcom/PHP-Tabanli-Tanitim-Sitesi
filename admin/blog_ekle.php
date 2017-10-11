<?php 
include 'admin_header.php';
include 'admin_sidebar.php';
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> SİTE GENEL AYARLARI</h1>
<h1 class="page-subhead-line">Sitenize blog haberleri ekliyorsunuz...</h1>

                <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
                 Haber başarılı bir şekilde eklendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Haber eklenirken bir hata oluştu!!</h4>
                 '; } } ?>
              

                <form action="admin_islem.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-12">
            <div class="form-group col-md-6">
              <label class="control-label col-lg-4">Haber Resim</label>
              <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <span class="btn btn-file btn-default">
                  <span class="fileupload-new">Resim Seç</span>
                  <span class="fileupload-exists">Değiştir</span>
                   <input type="file" name="bloggorsel">
                  
                  </span>
                  <span class="fileupload-preview"></span>
                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
              </div>
            </div>
          </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Haber Başlık</label>
                            <input class="form-control" required="" type="text" name="blog_baslik" placeholder="Eklemek istediğiniz haberin başlığını yazınız">
                        </div>  
                        </div> 
                    
                   

                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Haber Detay</label>
                            <textarea name="blog_icerik" class="ckeditor"></textarea>
                        </div>  
                        </div> 
                    

                      <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <hr>
                         <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="blog_kaydet">Haber Ekle</button></center>

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