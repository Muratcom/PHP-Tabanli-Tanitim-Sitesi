  <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user13.png" class="img-thumbnail">

                            <div class="inner-text">
                             Hoşgeldiniz:    <?php 
                                    if(isset($_SESSION['admin_kadi'])){
                              echo $_SESSION['admin_kadi'];
                                            }
                                ?>
                            <br>
                            
                                <small>Sisteme Giriş : <?php 
                                    if(isset($_SESSION['admin_tarih'])){
                              echo $_SESSION['admin_tarih'];
                                            }
                                ?> </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-home"></i>Anasayfa</a>
                    </li>


                        <?php 
                        $admin=$_SESSION['admin_kadi'];
                        $adminsor=mysql_query("select * from admin where admin_kadi='$admin'");
                        $admincek=mysql_fetch_assoc($adminsor);

                        if ( $admincek['admin_yetki']=='0') { ?>
                            <li>
                        <a href="admin_menuler.php"><i class="fa fa-bars "></i>Menuler</a>
                    </li>

                       <?php } ?> 
                        

                     
                    <li>
                        <a href="admin_haberler.php"><i class="fa fa-exclamation "></i>Haberler</a>
                    </li>

                     <li>
                        <a href="slider.php"><i class="fa fa-slideshare "></i>Slider</a>
                    </li>
                     <li>
                        <a href="sayfalar.php"><i class="fa fa-file-text "></i>Sayfalar</a>
                    </li>

                    <li>
                        <a href="admin_blog.php"><i class="fa fa-file-text "></i>Blog</a>
                    </li>
                   
                           
                        </ul>
                    </li>
                  

            </div>

        </nav>