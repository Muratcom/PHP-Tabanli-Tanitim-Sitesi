<?php 
include 'admin_header.php';
include 'admin_sidebar.php';

 ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Admin Paneline Hoşgeldiniz...</h1>
                <h1 class="page-subhead-line">Sitenizdeki sayfaları bu sayfadan yönetebilirsiniz...</h1>

<div class="col-md-12">
	
<a href="sayfa_ekle.php"><button  class="btn btn-success" type="submit" name="sayfa_ekle">Sayfa Ekle</button></a>

<hr>

</div>

            </div>
           <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sayfa Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Sayfa Başlık</th>
                                            <th >Sayfa Tarih</th>
                                            <th >Sayfa Resimyol</th>
                                            <th>Sayfa Yazar</th>
                                            <th >Sayfa Detay</th>
                                          

                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                    	$sayfasorgu=mysql_query("select*from sayfa");
                                    	while ($sayfacek=mysql_fetch_assoc($sayfasorgu)){?>
                                    		<tr>
                                            <td><?php echo $sayfacek['sayfa_id']; ?></td>
                                            <td><?php echo $sayfacek['sayfa_baslik']; ?></td>
                                            <td><?php echo $sayfacek['sayfa_tarih']; ?></td>
                                            <td>
                                                
                                                <img style="width: 200px;" src="<?php echo $sayfacek['sayfa_resimyol']; ?>">


                                            </td>
                                            <td><?php echo $sayfacek['sayfa_yazar']; ?></td>
                                            <td style="width: 200px; height: 400px;" ><?php echo $sayfacek['sayfa_detay']; ?></td>
                                         
                                            <td> <a href="sayfa_duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button class="btn btn-primary" type="submit" name="duzenle">Düzenle</button></a> </td>
                                            <td>
                                            <td><a href="admin_islem.php?sayfa_id=<?php echo  $sayfacek['sayfa_id'];?>&sayfasil=ok&sayfaresimsil=<?php echo $sayfacek['sayfa_resimyol']; ?>"> <button class="btn btn-danger" type="submit" name="sayfa_sil">Sil</button></a> </td>
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