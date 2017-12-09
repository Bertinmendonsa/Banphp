<?php
require("admin/dbconnection.php");
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile specific meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 

	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- PAGE TITLE                                -->
	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<title>Bangalore Nethralaya</title>

	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- SEO METAS                                 -->
	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="description" content="brief description here">
	<meta name="keywords" content="insert, keywords, here">
	<meta name="robots" content="index, follow">
    <meta name="author" content="EvenThemes">        
	<link rel="icon" type="image/icon" href="assets/images/favicon/favicon.png">

	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- GOOGLE FONTS                              -->
	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:600,700" rel="stylesheet"> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>


	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- Include CSS Filess                        -->
	<!-- ––––––––––––––––––––––––––––––––––––––––– -->

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Linearicons -->
    <link href="assets/vendors/linearicons/css/linearicons.css" rel="stylesheet">

    <!-- Webfont Medical Icons -->
	<link href="assets/vendors/webfont-medical-icons/css/wfmi-style.css" rel="stylesheet">

	<!-- Owl Carousel -->
	<link href="assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendors/owl-carousel/owl.theme.min.css" rel="stylesheet">

	<!-- Magnific popup -->
	<link href="assets/vendors/magnific-popup/css/magnific-popup.css" rel="stylesheet">

    <!-- YTPlayer -->
    <link href="assets/vendors/YTPlayer/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">

    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-datepicker/css/bootstrap.datepicker.css">

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	
	<!-- footer css -->
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	
	<!-- Template Stylesheet -->
	<link href="assets/css/base.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/clinical.css" rel="stylesheet">
	<link href="assets/css/demo.css" rel="stylesheet">
    <link href="assets/css/search1.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dropdown.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <script src="assets/js/slider.js"></script>
<!--        search links-->
	<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/standard.css">

<link rel="stylesheet" type="text/css" href="assets/css/tipuesearch.css">
	

    </head>
        <body id="body" class="wide-layout preloader-active">

	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- PRELOADER                                 -->
	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- Preloader -->
	<div id="preloader" class="preloader">
		<div class="loader pos-center">
			<img src="assets/images/preloader.gif" alt="">
		</div>
	</div>
	<!-- End Preloader -->

	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<!-- WRAPPER                                   -->
	<!-- ––––––––––––––––––––––––––––––––––––––––– -->
	<div id="pageWrapper" class="page-wrapper">
		
		<!-- –––––––––––––––[ HEADER START ]––––––––––––––– -->
		<!-- Start Top Bar -->
        <div class="navbar navbar-default navbar-fixed-top">
		  <?php require("header.php"); ?>
        </div>  
            
        <!-- –––––––––––––––[ HEADER END ]––––––––––––––– -->
		
		 <!-- –––––––––––––––[ Start Content ]––––––––––––––– -->
              <main id="mainContent_gen" class="main-content">
                    <div class="container-fluid nopadding"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
<!--
        
-->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="general1">
      <div class="item active">
        <img src="assets/images/slider/option1.JPG" alt="Image"  >
      </div>

      <div class="item  slide1">
        <img src="assets/images/retina_bns.jpg" alt="Image" >
      </div>
    
<!--
      <div class="item">
        <img src="assets/images/banner_3.jpg" alt="Image" style="height: 400px; width: 100%">
      </div>
-->
        
        <div class="item">
        <img src="assets/images/slider/bn1.jpg" alt="Image">
      </div>
        
        <div class="item">
        <img src="assets/images/banner_4.jpg" alt="Image" >
      </div>
        

        <div class="item">
        <img src="assets/images/slider/img2.jpg" alt="Image" >
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
            <!-- End Hero Area -->
                <!-- start of area two -->
                <!-- Start About Us Area -->
            <section class="section about-us-area pt-30" id="mission">
                <div class="container">
<!--                   <h1 class="mb-10" style="text-align:center">Overview</h1>-->
                    <div class="row">
                        <div class="col-md-offset-8 col-md-4" id="general2">
                            <button class="btn fontsize" onclick="one()"><i class="fa fa-font" aria-hidden="true"></i></button>
                            <button class="btn fontsize" onclick="two()"><i class="fa fa-font fa-2x" aria-hidden="true"></i></button>
                            <button class="btn fontsize" onclick="three()"><i class="fa fa-font fa-3x" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row pt-30">
                        <div class="col-md-6">
                            <?php
                            
                            $filename = "admin/content/home.txt";
                           
                            $text = file_get_contents($filename);

?>
                            
                            <div class="who-we-are mb-40">
								
                               
                              <?php echo $text; ?>
                               
                               
                            </div>
                        </div>
                        <div class="col-md-6 t-xs-center t-md-center animated fadeInLeft">
                            <img src="assets/images/DSC06642.JPG" alt="">
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-4">
                               
                                <a href="about.php" class="btn btn-blue">About us</a>
                                   </div>
                        <div class="col-md-offset-2 col-md-4">
                               
                                <a href="about.php#chairman" class="btn btn-blue">Chairman's message</a>
                                   </div>
                    </div>
                </div>
                <br>
            </section>
            <!-- End About Us Area -->
      
    <section class="section features-area ptb-60 bg-gray counter" id="counter">
              
            
                    <div class="container">
                        <div class="row">
                             <br>
                            <div class="main_counter_content text-center white-text wow fadeInUp">
                                <div class="col-md-6 border shadow" id="general3">
                                    
                                    <div class="carousel carousel-showmanymoveone1 slide" id="itemslider3">
        <div class="carousel-inner" id="general4">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--                counterr code-->
                <div class="single_counter">
                                        <i class="fa fa-eye fa-2x"></i>
                    <h2 class="statistic-counter colorwhite">40000</h2>
                                        <p>Number of Surgeries</p>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--              counter code-->
                <div class="single_counter  colorwhite">
                                        <i class="fa fa-eye fa-2x"></i>
                    <h2 class="statistic-counter colorwhite">60000</h2>
                    <p>Number of Patients</p>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--              counter code-->
                <div class="single_counter ">
                                        <i class="fa fa-eye fa-2x"></i>
                    <h2 class="statistic-counter colorwhite">1500</h2>
                    <p>Free camps</p>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--            vcouner code-->
                <div class="single_counter">
                                        <i class="fa fa-eye fa-2x"></i>
                    <h2 class="statistic-counter colorwhite">20</h2>
                    <p>Number of Doctors</p>
                </div>
            </div>
          </div>

          

        </div>
        <br>
        <a class="btn btn-blue">Statistics</a>
        <h3></h3>

       
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 shadow" id="general5">
                                    
                                    <div class="carousel carousel-showmanymoveone1 slide" id="itemslider4">
        <div class="carousel-inner" id="general6" >

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--                counterr code-->
                <div class="single_counter" >
                     <p>Fine treatment and qualified Doctors-Thoroughly Satisfied</p>   
                    <h6>Rajini Kumari T</h6>
                    <p>04-Jun-2017</p>
                </div>
            </div>
          </div>

          

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--              counter code-->
                <div class="single_counter">
                       <p>I am feeling happy after treatment taking treatment in this hospital</p>       
                    <h6>Sheetal. P</h6>
                    <p>05-Jun-2017</p>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-6">
<!--            vcouner code-->
                <div class="single_counter">
                    <p>Very good staff and advanced facilities</p>                <h6>Aseem </h6>  
                    <p>18-Jan-2017	</p>
                </div>
            </div>
          </div>

          

        </div>
        <br>
                                        <a class="btn btn-blue">Testimonials</a>
      
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <a id="sliders"></a>
                    </div>
                
   
                  </section>              
                           
                
 <section id="slider">
        <!--Item slider text-->
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="float-center color-blue">MEET OUR SPECIALISTS</h2>
    </div>
  </div>
    <div class="row pb-5" >
      <div  class="col-md-1 col-md-offset-11">
          <a class="btn-mor" href="#itemslider" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
          <a class="btn-mor" href="#itemslider" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
          </div>
</div>

<!-- Item slider-->
<div class="container">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          


            
            <?php 
            
            $query1 = "select * from doctors where name = 'Dr.N.Veerbhadra rao'";
            $exe1 = mysqli_query($conn,$query1);
            while($row1 = mysqli_fetch_array($exe1)){
                 echo '<div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
                    <div class="slid-img">
                        <img src="admin/images/doctors/'.$row1['image'].'" class="img-responsive center-block">
                    </div>
                    <div class="slid-content">
                        <h3 class="text-center font-Name">'.$row1['name'].'</h3>
                        <h4 class="text-center padd">'.$row1['desig'].'</h4>
                        
                        <div class="top-border">
                            <div class="left-float" >
                                <a href="'.$row1['banurl'].'.php" ><button class="btn-mor btn-pro"><span>View Profile</span></button></a>
                            </div>
                            <div class="right-float" >
                                <a  href="'.$row1['fburl'].'" class="btn-ancr social-icons__item pt-10"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a  href="'.$row1['twurl'].'" class="btn-ancr social-icons__item pt-10"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                        <a  href="'.$row1['lnurl'].'" class="btn-ancr social-icons__item pt-10"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>   
                    </div>
                </div>
                
            </div>
          </div>';
            
            }
            
           
            $query = "select * from doctors where name!='Dr.N.Veerbhadra rao'";
            $exe = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($exe)){
                echo '<div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
              <div class="slid-img">
                    <img src="admin/images/doctors/'.$row['image'].'" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">'.$row['name'].'</h3>
                    
                    <h4 class="text-center padd">'.$row['desig'].'</h4>  
                    
                    <div class="top-border">
                            <div class="left-float" >
                                <a href="'.$row['banurl'].'.php" ><button class="btn-mor btn-pro"><span>View Profile</span></button></a>
                            </div>
                            <div class="right-float" >
                                <a  href="'.$row['fburl'].'" class="btn-ancr"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a  href="'.$row['twurl'].'" class="btn-ancr"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                        <a  href="'.$row['lnurl'].'" class="btn-ancr"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        
                </div>
                </div>
            </div>
          </div>';
            }
            
            
            ?>



        </div>

      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->
                      <br><br>

        </section>

                  
                  	 <!--team slider -->
                  <section id="clinical services" class="bg-gray">
        <!--Item slider text-->
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="float-center color-blue">CLINICAL SERVICES</h2>
    </div>
      <div class="row pb-5" >
      <div  class="col-md-1 col-md-offset-11">
          <a class="btn-mor" href="#itemslider1" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
          <a class="btn-mor" href="#itemslider1" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
          </div>
      
  </div> 
</div>

<!-- Item slider-->
<div class="container">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider1">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
                    <div class="slid-img">
                        <img src="assets/images/clinicalservice/cataract-service.gif" class="img-responsive center-block">
                    </div>
                    <div class="slid-content">
                        <h3 class="text-center font-Name">Cataract Services</h3>
<br>
                        <a href="cataractservice.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a>
                    </div>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
                <div class="slid-img">
                    <img src="assets/images/clinicalservice/refractive.jpg" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">Refractive  Services</h3>
                    
<br>
                    <a href="refraciveservices.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a>
                </div>
                </div>
              
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
              <div class="slid-img">
                    <img src="assets/images/clinicalservice/vitreo.jpg" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">Vitreoretinal Services</h3>
                    
<br>
                    <a href="vitreoretinal.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a>
                </div>
                </div>
            </div>
          </div>

         
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
             <div class="slid-img">
                    <img src="assets/images/clinicalservice/glucoma.jpg" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">Glaucoma Services</h3>
                    
<br>
                    <a href="glaucoma_service.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a>
                </div>
                </div>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
              <div class="slid-img">
                    <img src="assets/images/clinicalservice/cornea.jpg" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">Cornea & Contact Lens</h3>
                    
<br>
                    <a href="cornea.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a>
                </div>
                </div>
            </div>
          </div>
            <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
              <div class="slid-img">
                    <img src="assets/images/clinicalservice/OCCULOPLASTY.jpg" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">Orbit & Oculoplasty</h3>
                    
<br>
                    <a href="orbit.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a>
                </div>
                </div>
            </div>
          </div>
            <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-card">
              <div class="slid-img">
                    <img src="assets/images/clinicalservice/squint.jpg" class="img-responsive center-block">
                </div>
                <div class="slid-content">
                    <h3 class="text-center font-Name">Squint & Pediatric Opthamology</h3>
                    <br>
                        <div> <a href="squintpediatric.php"><button class="btn-mor btn-pro"><span>View Details</span></button></a></div>
                   
                </div>
                </div>
            </div>
          </div>
            
        </div>

       
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->
<br>
                <br>
        </section>

            <!-- End Features Area -->
     <div class="row" id="general7" >
              <marquee> <p id="marque"><a id="myBtn"> CME programme on 19<sup>th</sup> November 2017</a></p> </marquee>
         
         <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CME programme on 19 <sup>th</sup> November 2017</h4>
        </div>
        <div class="modal-body">
            <img src="assets/images/events/IMG-20171114-WA0010.jpg" alt="november19th2017">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
         
         
          </div>
                  
                
            </main>
       
		  <!-- –––––––––––––––[ FOOTER START ]––––––––––––––– -->
		<footer class="main-footer">
            <?php require("footer.php") ?>
        </footer>
 <!-- –––––––––––––––[ FOOTER END ]––––––––––––––– -->
        </div>
        
    <!-- =========[ jQuery library ]========= -->
	<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>

	<!-- ========[ Latest Bootstrap ]======== -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

	<!-- ========[ JavaScript Plugins ]======== -->
	<!-- (!) Include all compiled plugins (below), or include individual files as needed -->

	<!-- Owl Carousel -->
	<script type="text/javascript" src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
            
<!-- clinical services slider-->
            
	<!-- Magnific popup -->
	<script type="text/javascript" src="assets/vendors/magnific-popup/js/jquery.magnific-popup.min.js"></script>

	<!-- jQuery Easing v1.3 -->
	<script type="text/javascript" src="assets/vendors/jquery.easing.1.3.min.js"></script>

	<!-- MixItUp v2.1.11 -->
<script type="text/javascript" src="assets/vendors/jquery.mixitup.js"></script>

	<!-- Bootstrap Datepicker -->
	<script type="text/javascript" src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

	<!-- YTPlayer -->
    <script type="text/javascript" src="assets/vendors/YTPlayer/js/jquery.mb.YTPlayer.min.js"></script>

	<!-- =====[ Custom Template JavaScript ]===== -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/demo.js"></script>
   <script>
	   $(document).ready(function(){
		   $('.dropdown-submenu a.test').on("click", function(e){
			   $(this).next('ul').toggle();
			   e.stopPropagation();
			   e.preventDefault();
		   });
	   });
   </script>
   <!-- counter cdn -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
            <!-- counter script -->
             <script>
    jQuery('.statistic-counter').counterUp({
                delay: 10,
                time: 2000
            }); 
    </script>
            
            
<!--   mega dropdown menu   -->
            <script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>
            <!--    toggle for  services-->
<script>
$(document).ready(function(){
    $(".hi").click(function(){
        $("#mainHeader > div > div > div > div.col-md-9 > nav > ul > li.dropdown-1.dropdown.mega-dropdown.cs1.hi > div").toggleClass(function(n){
            return "listitem1";
        });
    });
});
</script>
             <script>
function one(){
    document.getElementById('fsize').style.fontSize='14px';
}
function two(){
    document.getElementById('fsize').style.fontSize='16px';
}
function three(){
    document.getElementById('fsize').style.fontSize = '18px';
}
</script>
            
<!-- modal script-->
            <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="assets/js/slider.js"></script>
    </body>
</html>