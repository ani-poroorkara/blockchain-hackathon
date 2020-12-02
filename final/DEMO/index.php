 <?php
        session_start();
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        #down
{
    float: left;
    width: 100%;
    text-align: center;
    margin-top: 5px;
}

    </style>
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
                    <!--<li><a href="#faqs_part">Info</a></li>-->
                    <li><a href="#features">Events</a></li>
                    
                    <li><a href="#pricing_part">Create Events</a></li>
                    
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
                        $orgname = $row['organisationName'];
                        echo '<li><a href="#contact_part">Contact</a></li>';

                        echo ' <li><a href=""> '. $orgname . '</a></li>';

                        echo ' <li><a href="logout.php"> Logout</a><li>';
                    }
                    else
                    {
                        echo ' <li><a href="login.php">Login</a></li> ';
                    }
                    ?>
                    
                    </ul>
                    </div>
        
        </div>
        </div>
        
        
        
        <!-- Events-->
        
        
        
        
        <h1 class="display-1 " > Events </h1>
        <?php
	        
			$host='localhost';
			$username='root';
			$password='';
			$servername='college';

			$conn = mysqli_connect($host, $username, $password,$servername);

			$s = " select * from events where status=1";
			$result = $conn->query($s);

			if ($result->num_rows > 0)
				{
                    
                    while($row = $result->fetch_assoc())
                    {
                    ?>
        
        
        <div class="feature_section ano_feature_section" id="features">
        <div class="container">
        
        			<div class="events">	
                        <div class="leftside " style="width:400px">
                        <h2><?php echo $row['title'] ?></h2>
                        <p>
                        <?php echo $row['content'] ?>
                        </p>
                        
                        <div class="feature">
                        <span class="fa fa-life-ring"></span>
                        <div class="description">
                        <strong><?php echo $row['subTitle1'] ?></strong> <br />
                        <?php echo $row['subContent1'] ?>
                        </div>
                        </div>
                        
                        <div class="feature">
                        <span class="fa fa-play-circle-o "></span>
                        <div class="description">
                        <strong><?php echo $row['subTitle2'] ?></strong> <br />
                        <?php echo $row['subContent2'] ?>
                        </div>
                        </div>
                         <a href="events.php?title=<?php echo $row['title']?>"  class="btn btn-primary float-left" > Read More</a>
                        </div>
                        
                        
                        <div class="rightside rightbox">
                        <img src="images/<?php echo $row['image'] ?>" alt="" class="wow bounceInRight animated imagethumb2" data-wow-offset="300" data-wow-delay="0.2s" width="100px" , height="100px"/>
                        </div>	
                    </div>
                   
            <?php
                    }
            }

                $conn->close();
        ?>
            
        
        </div>
        </div>
        
        
        
        
        
        
        <div class="pricing_table_section" id="pricing_part">
        <div class="container">
             <h2>Create Events</h2>
            <div class="text-center">
             <a href="event_create_page.php" class="btn btn-primary text-center" > Add Events</a>
            </div>
        
        </div>
        </div>
        
        
        <?php
        if(isset($_SESSION['email']))
                    {
                        ?>
        <div class="common_section" id="contact_part">
        <div class="container">
        
        			<h2>Get in touch with us</h2>
                    <h4>term sheet convertible note colluding bootstrapping</h4>
                    
                   
                   	<br clear="all" />
                    
                    
                    <form method="post" class="hpform">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="SEND" />
                    </form>
                  <?php
                    }
                  ?>  
                   
                    
        
        </div>
        </div>
        <div id="down">
            <a onclick="window.open('index.html')" class="btn btn-primary">Donate Now </a>

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
