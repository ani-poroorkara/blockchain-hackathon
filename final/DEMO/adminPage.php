 <?php
        session_start();

    if(!(isset($_SESSION['email']) && $_SESSION['email'] != ''))
	{
		echo "<script>alert('Login Required'); window.location.href='login.php';</script>";
		
	}
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <!-- META -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- TITLE -->
        <title>Woman Empowerment</title>

        <!-- Main StyleSheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="style-responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/libs/animate.css">

        <link rel="stylesheet" href="css/libs/main.css">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        

		<!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />


        <!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
        <!-- External libraries: jQuery & GreenSock -->
        <script src="layerslider/js/jquery.js" type="text/javascript"></script>
        <script src="layerslider/js/greensock.js" type="text/javascript"></script>
        <!-- LayerSlider script files -->
        <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        

		<!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
        <script>
		$(document).ready(function(){
		$('.bxslider').bxSlider({
								
								pager: false,
								controls: true,
								auto: true
								
								
								});
		});
		</script>



		<link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css" media="screen" />
		<script src="lightbox/jquery.fancybox.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                                           
                    $('.fancybox').fancybox();
 		
                });
        </script>


        <!-- GOTO TOP JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $('#gotop').fadeIn();	
                } else {
                    $('#gotop').fadeOut();
                }
            });
         
            $('#gotop').click(function() {
                $('body,html').animate({scrollTop:0},800);
            });	
        });
        </script>
            


		<!-- HEADER JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() >= 200) {
                    $('.header').addClass("header_fix");	
                } else {
                   $('.header').removeClass("header_fix");
                }
            });	
        });
        </script>
        
        
        <script type="text/javascript">
        
		if($(window).width() <= 900){
		$(document).ready(function() {
                                    
									
									
                    $('.mobile .title').click(function() {
												
												$(this).next("ul").slideToggle();
												$(this).toggleClass("minus");
												
												});
					
					
 		
                });
		
		}
        </script>
                            
</head>

<body>
       
        <div class="header">
        <div class="container">
        
        			<a href="#" class="logo"><img src="" alt="" /></a>
                    
                    <div class="nav mobile">
                    <div class="title">Menu <span class="fa "></span></div>
                    <ul>
                    
                    <?php
                    if(isset($_SESSION['email']))
                    {
                        $email = $_SESSION['email'] ;
                        $servername="localhost";
			            $username="root";
			            $password='';
			            $dbname="college";

			            $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $sql1 = "SELECT * FROM users WHERE email = '$email'";
                        $result = $conn->query($sql1);
                        $row = $result->fetch_assoc();
                        $name = $row['name'];
                        echo ' <li><a href=""> '. $name . '</a></li>';
                        
                        echo ' <li><a href="logout.php"> Logout</a><li>';
                    }
                    else
                    {
                        echo ' <li><a href="login.html">Login</a></li> ';
                    }
                    ?>
                    
                    </ul>
                    </div>
        
        </div>
        </div>
        
        
        
        <!-- Events-->
        
        
        
        
        <h1 class="display-1 " > Queued Events list </h1>
        <div class="container ">
              <div class="row">
                <div class="col-sm r">
                  Title
                </div>
                <div class="col-sm">
                  Organisation Name
                </div>
                <div class="col-sm">
                  Satus
                </div>
                  <div class="col-sm ">
                  Verify Event
                </div>
              </div>
            </div>
        
        <?php
	        
			$host='localhost';
			$username='root';
			$password='';
			$servername='college';

			$conn = mysqli_connect($host, $username, $password,$servername);

			$s = " select * from events where status=0 ";
			$result = $conn->query($s);

			if ($result->num_rows > 0)
				{
                    
                    while($row = $result->fetch_assoc())
                    {
                    ?>
        
        
        <div class="feature_section ano_feature_section" id="features">
        <div class="container">
        
            <div class="container ">
                  <div class="row">
                    <div class="col-sm">
                      <?php echo $row['title'] ?>
                    </div>
                    <div class="col-sm">
                      <?php echo $row['orgName'] ?>
                    </div>
                    <div class="col-sm">
                      <?php 
                        if($row['status']==0)
                        echo "Unverified"
                        ?>
                    </div>
                      <div class="col-sm">
                        <a href="localVerify.php?title=<?php echo $row['title']?>"  class="btn btn-primary float-left" onclick = "createEvent()" > Verify</a>
                    </div>
                  </div>
                </div>
            
            <?php
                    }
            }
                $conn->close();
        ?>
            
        
        </div>
        </div>
        
        
        
        
        
        
        
    


		<script>
            jQuery("#layerslider").layerSlider({
                responsive: false,
                responsiveUnder: 1100,
                layersContainer: 1100,
                skin: 'fullwidth',
                hoverPrevNext: false,
                skinsPath: 'layerslider/skins/'
            });
        
        
        </script>

		<script src="js/wow.js"></script>
        <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
        </script>

		<script type="text/javascript">
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top - 132
		}, 2000);
		return false;
		}
		}
		});
		});
        </script>
        
        
		<script type="text/javascript">
        
        
        $(document).ready(function() {
        
        if($(window).width() <= 1200){
        
        
        $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
        $('html,body').animate({
        scrollTop: target.offset().top - 132
        }, 2000);
        return false;
        }
        }
        });
        });
        
        
        
        }
        
        });
        
        
        </script> 
             

		
</body>
</html>
