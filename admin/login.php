<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Yönetici Girişi</title>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet"/>
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
<style>
  body{
   background-image: url("assets/img/login_bg.gif") ;
   background-attachment: fixed;
    -webkit-background-size:100% 100%;
    background-size: 100% 100%;
  }
</style>
</head>
<body>
<div class="container">
  <div class="row text-center " style="padding-top:100px;">
  </div>
  <div class="row ">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
      <div style="background-color: white; margin-top: 40px; opacity: 0.8;" class="panel-body">
        <form action="admin_islem.php" method="POST">
          <hr/>
          <h3 style="text-align: center;"><b> ADMİN GİRİŞİ </b></h3>
          <br/>
          <?php 
                          if (isset($_GET['Login'])) {
                            if ($_GET['Login'] == 'no')
                              echo "Kullanıcı adı  veya şifre hatalı<br>
          "; } ?> <br>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
            <input type="text" class="form-control" required="" name="admin_kadi" placeholder="Kullanıcı Adınız "/>
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" required="" class="form-control" name="admin_sifre" placeholder="Şifreniz"/>
          </div>
          <div class="form-group">
          </div>
          <button class="btn btn-primary" style="width: 100%;" type="submit" name="loggin">Giriş Yap</button>
          <hr/>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>