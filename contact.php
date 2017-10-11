<?php include 'header.php'; 
	

?>
<body>

        
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="index.php">Anasayfa</a><span>/</span>İletişim
                </div>
            </div>
        </div>
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span4">
                        	<h2 class="title"><span>İletişim Bilgileri</span></h2>
                            <div id="map"><iframe width="100%" height="310" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385398.58987413545!2d28.731987906032746!3d41.0049822710558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1490361683950"></iframe></div>
                            <p>İstanbul<br/>Türkiye</p>
                            <p>Telefon: 1-500-677-5694<br/>Fax: 1-500-256-2768<br/>Email: <a href="mailto:#">murat@gmail.com</a><br/>Web: <a href="#">http://murat.com</a></p>



                        </div>
                    	<div class="span8">
                        	<h2 class="title"><span>Formu Doldurunuz</span></h2>
                            <div class="contact_form">  
                            	<div id="note"></div>
                                <div id="fields">
                                    <form  action="gonder.php" method="POST" >
                                        <input class="span7" type="text" required="" name="name" value="" placeholder="İsminizi giriniz" />
                                        <input class="span7" type="email" required="" name="email" value="" placeholder="Mail adresinizi giriniz" />
                                        <input class="span7" type="text" name="subject" value="" placeholder="Konu" />
                                        <textarea name="message" id="message" class="span8" placeholder="Mesaj"></textarea>
                                        <div class="clear"></div>
                                        <input type="reset" class="btn dark_btn" value="Temizle" />
                                    
                                        <button type="submit" class="btn send_btn"  name="gonder">Gönder</button>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>                   
                        </div>                	
                	</div>
                </section>
            </div>
        </div>
    </div>
    <!--//page_container-->
    
    
	
</body>
</html>
<?php include 'footer.php'; ?>