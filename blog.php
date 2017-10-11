<?php include 'header.php'; 



?>

    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="index.php">Anasayfa</a><span>/</span>  Blog Haberleri
                </div>
            </div>
        </div>
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span8">

                        <?php 

                            $sayfada=2;//sayfada gösterilecek içerik miktarı.Bu aradaki php ile sayfalama işlemine başlıyoz...
                        $sorgu=mysql_query("select * from blog");
                        $toplam_icerik=mysql_num_rows($sorgu);

                        $toplam_sayfa=ceil($toplam_icerik/$sayfada); //Dinamik olarak sayfa sayısını belirttik

                        //eğer sayfa girilmemişse 1 varsayalım

                        $sayfa=isset($_GET['sayfa'])? (int)$_GET['sayfa']:1;

                            //eğer 1 den küçük bir sayfa sayısı girildiyse onu 1 yapalım

                        if ($sayfa<1) {
                                 $sayfa=1;
                                        }

                        //toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım

                            if ($sayfa>$toplam_sayfa) {
                                         $sayfa=$toplam_sayfa;
                                                        }
                                        $limit=($sayfa-1) * $sayfada;




                            $blogsor=mysql_query("select* from blog order by blog_id desc limit $limit,$sayfada");
                            while ($blogcek=mysql_fetch_assoc($blogsor)) {  ?>

                                    <div class="post">
                                <h2 class="title"><span><a href="blog_detay.php?blog_id=<?php echo $blogcek['blog_id'] ; ?>"><?php echo $blogcek['blog_baslik']; ?></a></span></h2>
                                <img src="admin/<?php echo $blogcek['blog_resimyol']; ?>" alt="" />
                                <div class="post_info">
                                    <div class="fleft">On <span><?php echo $blogcek['blog_tarih']; ?></span>  </div>
                                                                  
                                    <div class="clear"></div>
                                </div>
                                <p<?php echo substr($blogcek['blog_icerik'],0,500)."..." ?></p>
                                <a href="blog_detay.php?blog_id=<?php echo $blogcek['blog_id'] ; ?>" class="arrow_link">Devamını Oku</a>
                            </div>
                                
                            <?php  }?>
                       

                        

                           
                            <div class="pagination">
                                <ul>


                                  <?php 
                          $i=0;
                    if ($i<$toplam_sayfa) { 
                         $i++;
                                ?>

                           
  <li><a href="blog.php?sayfa=<?php echo $i; ?>">&laquo;</a></li> <?php } ?>


    <?php 

      $s=0;
      while ($s<$toplam_sayfa) {
        $s++; ?>

  <li><a href="blog.php?sayfa=<?php echo $s; ?>""><?php echo $s; ?></a></li>
  
  
        <!--<a href="haberler.php?sayfa=<?php echo $s; ?>"> <?php echo $s; ?> </a>-->
    <?php  } ?>  

<?php 
$i=0;
if ($i<$toplam_sayfa) { 
  $i=$toplam_sayfa;
?>

    <li><a href=""blog.php?sayfa=<?php echo $i; ?>"">&raquo;</a></li> <?php } ?>

                                </ul>
                            </div>
                        </div>
                    	<div class="span4">
                        	<div class="sidebar">
                            	
                            
                                <div class="widget">
                                	<h2 class="title"><span>En Çok Okunan Haberler</span></h2>
                                	<ul class="links">

                                    <?php 

                                $okumasor=mysql_query("select * from blog order by blog_hit DESC limit 5");
                                while ($okumacek=mysql_fetch_assoc($okumasor)) {  ?>
                                    <li><a href="blog_detay.php?blog_id=<?php echo $okumacek['blog_id'] ?>"><?php echo $okumacek['blog_baslik']; ?></a></li> 
                                <?php } ?>

                                   
                                    	
                                        
                                    </ul>                                   
                                </div>                            
                            </div>                             
                        </div>                	
                	</div>
                </section>
            </div>
        </div>
    </div>




<?php include 'footer.php'; ?>