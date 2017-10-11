<?php 
include 'header.php';
include 'baglan.php';

$mesajsor=mysql_query("select * from welcome");
$mesajcek=mysql_fetch_assoc($mesajsor);

 ?>


     
    <!--page_container-->
    <div class="page_container">
        <!--slider-->
        <div id="main_slider">
            <div class="camera_wrap" id="camera_wrap_1">

            <?php 

        $slidersor=mysql_query("select * from slider order by slider_sira DESC");
       while ($slidercek=mysql_fetch_assoc($slidersor)) {  ?>
        <div data-src="admin/<?php echo $slidercek['slider_resimyol']; ?>"></div>
        <?php }  ?>

           
                
                                                    
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->
                       
        <!--planning-->
      
        <!--//planning-->
        
        <!--Welcome-->
        <div class="wrap block">
            <div class="container welcome_block">
            	<div class="welcome_line welcome_t"></div>
            	  <article class="col-1">
          <div class="indent-left">
            <h2 style="color: #d00b01;">Sayfama Hoşgeldiniz!</h2>
            <h6 style="font-weight: bold;color: #607a89;" class="prev-indent-bot">Öncelikle Kendim Hakkımda Kısa Bir Bilgi !!</h6>
            <p class="prev-indent-bot"><?php echo $mesajcek['welcome_mesaj']; ?></p>
             </div>
        </article>
                <div class="welcome_line welcome_b"></div>
            </div>
        </div>
       
        <div class="wrap block carousel_block">
            <div class="container">
            	<center><h2 class="upper">WEb Yazılımları İçin Olmazsa Olmazlar!!!</h2></center>
            	<div class="row">
                    <div class="span12">
                        <ul id="mycarousel2" class="jcarousel-skin-tango">

                        <?php 

                            $sayfasor=mysql_query("select * from sayfa ");
                           
                           while ($sayfacek=mysql_fetch_assoc($sayfasor)) { ?>


                                 <li>
                                <div class="post_carousel">
                                    <img src="admin/<?php echo $sayfacek['sayfa_resimyol']; ?>" alt="" />
                                    <div class="title_t"><a href="#"><?php echo $sayfacek['sayfa_baslik']; ?></a></div>
                                    <div class="post_meta">
                                        Posted by <a href="#"><?php echo $sayfacek['sayfa_yazar']; ?></a>  /  <?php echo $sayfacek['sayfa_tarih']; ?> 
                                    </div>
                                   <?php echo substr($sayfacek['sayfa_detay'], 0,300); ?> <a href="sayfa_detay.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>" class="arrow_link">Devamını Oku...</a>
                                </div>  
                            </li>

                                
                          <?php }  ?>  

                        

                           
                                                                 
                        </ul>                        
                    </div>                
                </div>                
            </div>
        </div>        
        <!--//latest posts--> 
    </div>



 <?php 
include 'footer.php';
 ?>

