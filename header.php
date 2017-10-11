<?php include 'baglan.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> Web Sayfam</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/docs.css" rel="stylesheet">
<link href="js/google-code-prettify/prettify.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->    
</head>
<body>
	<!--header-->
    <div class="header">
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span4">
                        	<div class="logo"><a href="index.php"><img src="img/logo.png" alt="" /></a></div>                        
                        </div>
                        <div class="span8">
                        	<div class="follow_us">
                                <ul>
                                    <li><a href="http://www.facebook.com" class="facebook">Facebook</a></li>
                                  
                                    <li><a href="http://www.twitter.com" class="twitter">Twitter</a></li>
                                    
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <nav id="main_menu"> 
                                <div class="menu_wrap">
                                    <ul class="nav sf-menu">

                                   <?php                                   
                              $menusor=mysql_query("select * from menuler");
                              while ( $menucek=mysql_fetch_assoc($menusor)) {?>
                                <li ><a href="<?php echo $menucek['menu_link']; ?>"><?php echo $menucek['menu_ad']; ?></a></li>
                              <?php } ?>
                                    </ul>
                                </div>
                            </nav>                         
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>