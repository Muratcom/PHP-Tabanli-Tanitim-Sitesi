<?php 
include '../baglan.php'; 

ob_start();
session_start();

date_default_timezone_set('Europe/Istanbul');
//menu silme
if ($_GET['menusil']=='ok') {
	$menusil=mysql_query("delete from menuler where menu_id='".$_GET['menu_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:admin_menuler.php");
}
}


//menu ekleme
if (isset($_POST['menu_kaydet'])) {
$menuekle=mysql_query("insert into menuler (menu_ad,menu_link) VALUES('".$_POST['menu_ad']."','".$_POST['menu_link']."') ");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:menu_ekle.php?durum=ok");
}
else 
	header("Location:menu_ekle.php?durum=no");
} 

//menu güncelleme
if (isset($_POST['menu_düzen'])) {
	$id=$_POST['menu_id'];
	$menuguncelle=mysql_query("update menuler set menu_ad='".$_POST['menu_ad']."',menu_link='".$_POST['menu_link']."' where menu_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:menu_duzenle.php?durum=ok&menu_id=$id");
}
else
	header("Location:menu_duzenle.php?durum=no&menu_id=$id");
}
//Slider ekleme
if (isset($_POST['slider_kaydet'])) {
	$uploads_dir='uploads';
	$tmp_name=$_FILES['slidegorsel']["tmp_name"];
	$name=$_FILES['slidegorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$sliderekle=mysql_query("insert into slider (slider_resimyol,slider_url,slider_sira,slider_ad)  VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."')");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:slider_ekle.php?durum=ok");
}
else
	header("Location:slider_ekle.php?durum=no");
}

//slider silme
if ($_GET['slidersil']=='ok') {
	$slidersil=mysql_query("delete from slider where slider_id='".$_GET['slider_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//

		$slidersil=$_GET['sliderresimsil'];
		unlink("$slidersil");
	header("Location:slider.php");
	
}
}

//slider sira düzenleme
if (isset($_POST['sira_duzenle'])) {
	$id=$_POST['slider_id'];
	$siraguncelle=mysql_query("update slider set slider_sira='".$_POST['slider_sira']."' where slider_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:slider.php?durum=ok&menu_id=$id");
}
else
	header("Location:slider.php?durum=no&menu_id=$id");
}

//Sayfa ekleme işlemleri resmlerle birlikte :)

if (isset($_POST['sayfa_kaydet'])) {
	$zaman=date('Y-m-d H:i');
	$uploads_dir='uploadsayfa';
	$tmp_name=$_FILES['sayfagorsel']["tmp_name"];
	$name=$_FILES['sayfagorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$sayfaekle=mysql_query("insert into sayfa (sayfa_resimyol,sayfa_baslik,sayfa_tarih,sayfa_yazar,sayfa_detay)  VALUES ('".$refimgyol."','".$_POST['sayfa_baslik']."','".$zaman."','".$_POST['sayfa_yazar']."','".$_POST['sayfa_detay']."')");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:sayfa_ekle.php?durum=ok");
}
else
	header("Location:sayfa_ekle.php?durum=no");
}

//Sayfa Düzenleme İşlemleri
if (isset($_POST['sayfa_duzen'])) {
	$zaman=date('Y-m-d H:i');
	$id=$_POST['sayfa_id'];
	$menuguncelle=mysql_query("update sayfa set sayfa_baslik='".$_POST['sayfa_baslik']."',sayfa_yazar='".$_POST['sayfa_yazar']."',sayfa_detay='".$_POST['sayfa_detay']."',sayfa_tarih='".$zaman."' where sayfa_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:sayfa_duzenle.php?durum=ok&sayfa_id=$id");
}
else
	header("Location:sayfa_duzenle.php?durum=no&sayfa_id=$id");
}

//Sayfa silme işlemleri
if ($_GET['sayfasil']=='ok') {
	$sayfasil=mysql_query("delete from sayfa where sayfa_id='".$_GET['sayfa_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//

		$sayfasil=$_GET['sayfaresimsil'];
		unlink("$sayfasil");
	header("Location:sayfalar.php");
	
}
}
//Admin login giriş işlemleri
if (isset($_POST['loggin'])) {
	$zaman=date('Y-m-d H:i');
	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);
	if ($admin_kadi && $admin_sifre) {
		$tarih=mysql_query("update admin set admin_tarih='".$zaman."' where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'  ");
		$verisay=mysql_num_rows($sorgula);// Eğer kayıt varsa kaç tane kayıt olduğunu döndürür. Varsa "1" ,yoksa "0" döndürür.
		if ($verisay>
0) {		$_SESSION['admin_tarih']=$zaman;
			$_SESSION['admin_kadi']=$admin_kadi;//Burada oturum açmış oluyoz hostta. Biz tarayıcıyı kapatana kadar oturum bilgileri burada tutulur.
			header("Location:index.php");
		}
		else
			header("Location:login.php?Login=no");
	}
}


//İeltişim sayfasından mail yollama işlemleri
if (isset($_POST['gonder'])) {
$ad_soyad     = $_POST["name"];

$email         = $_POST["email"];
$mesaj        = $_POST["message"];
$adres        = "murat.3878@hotmail.com"; // Buraya e-postanin gonderilecegi mail adresini yaziniz
$konu        = "Iletisim Formu";
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
$mesajveri.="Mesaj:  ".$mesaj;
 
$mesajyolla = mail($adres, $konu, $mesajveri, "Content-type: text/html; charset=utf-8\r\n");
 
if($mesajyolla)
{
 
echo "<center>Iletisim mailiniz bize ulasti, en kisa surede cevaplanacaktir. Ilginiz icin tesekkur ederiz.<br><a href=../index.php>Anasayfa</a></center>";
 
	}
else
		{
 
		echo "<center>E-Mail gonderilirken hata olustu! Lutfen daha sonra tekrar deneyiniz.</center>";
 
		}
	}


}

//Blog haberi ekleme işlemleri

if (isset($_POST['blog_kaydet'])) {
	$zaman=date('Y-m-d H:i');
	$uploads_dir='uploadsblog';
	$tmp_name=$_FILES['bloggorsel']["tmp_name"];
	$name=$_FILES['bloggorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$blogekle=mysql_query("insert into blog (blog_resimyol,blog_baslik,blog_tarih,blog_icerik)  VALUES ('".$refimgyol."','".$_POST['blog_baslik']."','".$zaman."','".$_POST['blog_icerik']."')");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:blog_ekle.php?durum=ok");
}
else
	header("Location:blog_ekle.php?durum=no");
}

//Blog haberi düzenleme işlemleri
if (isset($_POST['blog_duzen'])) {
	$zaman=date('Y-m-d H:i');
	$id=$_POST['blog_id'];
	$menuguncelle=mysql_query("update blog set blog_baslik='".$_POST['blog_baslik']."',blog_icerik='".$_POST['blog_icerik']."',blog_tarih='".$zaman."' where blog_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:blog_duzenle.php?durum=ok&sayfa_id=$id");
}
else
	header("Location:blog_duzenle.php?durum=no&sayfa_id=$id");
}


//Blog Haberi silme işlemleri
if ($_GET['blogsil']=='ok') {
	$blogsil=mysql_query("delete from blog where blog_id='".$_GET['blog_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//

		$blogresimsil=$_GET['blogresimsil'];
		unlink("$blogresimsil");
	header("Location:admin_blog.php");
	
}
}

 ?>