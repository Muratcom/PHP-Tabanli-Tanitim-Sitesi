<?php include 'header.php'; 

$blog_id=$_GET['blog_id'];

 $blogsor=mysql_query("select * from blog where blog_id=$blog_id ");
 $blogcek=mysql_fetch_assoc($blogsor);
 $blog_hit=$blogcek['blog_hit'];
 $blog_hit++;
 $hitsayi=mysql_query("update blog set blog_hit='".$blog_hit."' where blog_id='$blog_id'");

?>







<div class="page_container">
        <div class="breadcrumb">
            <div class="wrap">
                <div class="container">
                    <a href="index.php">Anasayfa</a><span>/</span><a href="blog.php"> Blog Haberleri</a>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="container">
                <section>
                    <div class="row">
                        <div class="span8">


                                    <div class="post">
                                <h2 class="title"><span><a href="blog_detay.php?blog_id=<?php echo $blogcek['blog_id'] ; ?>"><?php echo $blogcek['blog_baslik']; ?></a></span></h2>
                                <img src="admin/<?php echo $blogcek['blog_resimyol']; ?>" alt="" />
                                <div class="post_info">
                                    <div class="fleft">On <span><?php echo $blogcek['blog_tarih']; ?></span>  </div>
                                                                  
                                    <div class="clear"></div>
                                </div>
                                <p<?php echo$blogcek['blog_icerik']; ?></p>
                                
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