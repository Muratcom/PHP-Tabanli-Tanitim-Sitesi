
<?php include 'header.php';?>
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
                        	<h2 class="title"><span>Mail Durum Bilgisi</span></h2>
                            <div class="contact_form">  
                            	<div id="note"></div>
                                <div id="fields">
                                    <?php
 

$ad_soyad     = $_POST["name"];

$email         = $_POST["email"];
$mesaj        = $_POST["message"];
$adres        = "murat.3878@hotmail.com"; // Buraya e-postanin gonderilecegi mail adresini yaziniz
$konu        = $_POST["subject"];
$tarih        = date('Y-m-d');
$ip_adresi    = $_SERVER['REMOTE_ADDR'];
 
if(($ad_soyad=="")  or ($email=="") or ($mesaj=="")){
 
echo "<center>Lutfen Ad Soyad, Telefon, E-Mail ve Mesaj alanlarini bos birakmayiniz.<br><a href=index.php>Geri don</a></center>";
 
}
else
{
 
$mesajveri.="ILETISIM FORMU MESAJI<br/><br/>";
$mesajveri.="E-Mail:  ".$email."<br/>";
$mesajveri.="Tarih:  ".$tarih."<br/>";
$mesajveri.="IP Adresi   :".$ip_adresi."<br/>";
$mesajveri.="Konu:  ".$konu."<br/>";
$mesajveri.="Mesaj:  "."<br/>".$mesaj;
 
$mesajyolla = mail($adres, $konu, $mesajveri, "Content-type: text/html; charset=utf-8\r\n");
 
if($mesajyolla)
{
 
echo "<center>İletişim mailiniz bize ulaştı, en kısa sürede cevaplanacaktır. İlginiz için tesekkür ederiz...<br></center>";
echo "<br>";
 
	}
else
		{
 
		echo "<center>E-Mail gonderilirken hata olustu! Lutfen daha sonra tekrar deneyiniz.</center>";
 
		}
	}



 
?><p><center><a href=index.php><button type="submit" class="btn send_btn" >Anasayfa</button></a></center></p>
 

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