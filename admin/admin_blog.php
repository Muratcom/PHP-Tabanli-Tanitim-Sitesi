
<?php 
include 'admin_header.php';
include 'admin_sidebar.php';

 ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Admin Paneline Hoşgeldiniz...</h1>
                <h1 class="page-subhead-line">Sitenizdeki blogları bu sayfadan yönetebilirsiniz...</h1>

<div class="col-md-12">
	
<a href="blog_ekle.php"><button  class="btn btn-success" type="submit" name="blog_ekle">Blog Haberi Ekle</button></a>

<hr>

</div>

            </div>
           <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Haber Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Haber Başlık</th>
                                            <th >Giriliş Tarihi</th>
                                            <th >Haber Resimyol</th>
                                            <th >Haber Detay</th> 
                                            
                                            
                                            
                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                    	$blogsorgu=mysql_query("select*from blog");
                                    	while ($blogcek=mysql_fetch_assoc($blogsorgu)){?>
                                    		<tr>
                                            <td><?php echo $blogcek['blog_id']; ?></td>
                                            <td><?php echo $blogcek['blog_baslik']; ?></td>
                                            <td><?php echo $blogcek['blog_tarih']; ?></td>

                                            <td>
                                                
                                                <img style="width: 200px;" src="<?php echo $blogcek['blog_resimyol']; ?>">


                                            </td>
                                            
                                            <td style="width: 200px; height: 400px;" ><?php echo $blogcek['blog_icerik']; ?></td>
                                         
                                            <td> <a href="blog_duzenle.php?blog_id=<?php echo $blogcek['blog_id']; ?>"><button class="btn btn-primary" type="submit" name="blog_duzenle">Düzenle</button></a> </td>
                                            <td>
                                            <td><a href="admin_islem.php?blog_id=<?php echo  $blogcek['blog_id'];?>&blogsil=ok&blogresimsil=<?php echo $blogcek['blog_resimyol']; ?>"> <button class="btn btn-danger" type="submit" name="blog_sil">Sil</button></a> </td>
                                        </tr>
                                    	<?php  }?>
										
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>
    </div>
</div>
</div>
<?php   
include 'admin_footer.php';
 ?>