<div id="footer">
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        	<div class="foot_logo">><a href="index.html"><img src="img/foot_logo.png" alt="" /></a></div>    
                        	<div class="copyright" style="padding-left: 40px;">Design By &copy; Murat Ekşi</div>                        
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	<form action="#" method="post">
                                        <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                                    </form>
                                </div>
                                <div class="follow_us">
                                 <ul>
                                 <?php 

                                 $footsor=mysql_query("select * from footer");

                                while ($footcek=mysql_fetch_assoc($footsor)) { ?>
                                    <li><a href="<?php echo $footcek['link_url']; ?>" class="<?php echo $footcek['link_class']; ?>"><?php echo $footcek['link_ad']; ?></a></li>

                                 	                               <?php }  ?>  
                                    
                                </ul>
                                </div>
                              
                            	
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script src="js/application.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){   
            $("#ajax-contact-form").submit(function() {
                var str = $(this).serialize();      
                $.ajax({
                    type: "POST",
                    url: "contact_form/contact_process.php",
                    data: str,
                    success: function(msg) {
                        // Message Sent - Show the 'Thank You' message and hide the form
                        if(msg == 'OK') {
                            result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
                            $("#fields").hide();
                        } else {
                            result = msg;
                        }
                        $('#note').html(result);
                    }
                });
                return false;
            });                                                         
        });     
    </script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
</body>
</html>

