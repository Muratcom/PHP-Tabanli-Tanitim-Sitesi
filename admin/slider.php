<?php 
include 'admin_header.php';
include 'admin_sidebar.php';


 ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Admin Paneline Hoşgeldiniz...</h1>
                <h1 class="page-subhead-line">Sitenizdeki sliderleri bu sayfadan yönetebilirsiniz...</h1>

<div class="col-md-12">
	
<a href="slider_ekle.php"><button  class="btn btn-success" type="submit" name="slider_ekle">Slider Ekle</button></a>

<hr>

</div>

            </div>
           <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menü Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th style="width: 200px;">Slider ID</th>
                                            <th style="width: 200px;">Slider Adı</th>
                                            <th style="width: 200px;">Slider Resimyol</th>
                                            <th style="width: 200px;">Slider Sıra</th>
                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                    	$slidersorgu=mysql_query("select*from slider");
                                    	while ($slidercek=mysql_fetch_assoc($slidersorgu)){?>
                                    		<tr>
                                            <td><?php echo $slidercek['slider_id']; ?></td>
                                            <td><?php echo $slidercek['slider_ad']; ?></td>
                                            <td>
                                                <img style="width: 200px;" src="<?php echo $slidercek['slider_resimyol'];?>">


                                            </td>
                                            <form action="admin_islem.php" method="POST">                                            <td>
                                                <input type="text" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>">
                                                <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">


                                            </td>
                                         
                                            <td><button class="btn btn-primary" type="submit" name="sira_duzenle">Düzenle</button></td>
                                            </form>

                                            <td><a href="admin_islem.php?slider_id=<?php echo  $slidercek['slider_id'];?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_resimyol']; ?>"> <button class="btn btn-danger" type="submit" name="slider_sil">Sil</button></a> </td>
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