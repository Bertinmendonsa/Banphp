<?php
require("admin/dbconnection.php");
?>
<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
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
    <meta name="author" content="EvenThemes">        <link rel="icon" type="image/icon" href="assets/images/favicon/favicon.png">

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
	<link href="assets/css/footer.css" rel="stylesheet">

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


	<!-- Template Stylesheet -->
	<link href="assets/css/base.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/demo.css" rel="stylesheet">
    <link href="assets/css/search1.css" rel="stylesheet">
    <link href="assets/css/dropdown.css" rel="stylesheet">
        
<!--        -->
        
    
        <link href="assets/css/clinical.css" rel="stylesheet">
	
    <link href="assets/css/search1.css" rel="stylesheet">
     <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/standard.css">

<link rel="stylesheet" type="text/css" href="assets/css/tipuesearch.css">
        
        
        
        <style>
		.dropdown-submenu{
			position: relative;
		}	
		.dropdown-submenu .dropdown-menu{
			top: 0;
			left:100%;
			margin-top: -1px;
		}
		.dropdown-content a:hover {background-color: #107fc9;}

.dropdown1:hover .dropdown-content {
    display: block;
}

/*
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
*/
	</style>

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
		
		<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
		
            
       <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
		  <div class="navbar navbar-default navbar-fixed-top">
		 <?php require("header.php"); ?> 
		</div>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        
   
        
		<!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
		<main id="mainContent" class="main-content" style="padding-top: 6em;">
			<!-- Start Hero Area -->
			<section class="section breadcrumb-area bg-ct pt-100 pb-80 subbanner overlay overlaybg" >
                <div class="container t-center">
	            	<div class="row">
		            	<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
							<div class="section-top-title">
								<h1 class="t-uppercase font-45">make an appointment</h1>
								<ol class="breadcrumb">
								  <li><a href="index.php"><i class="fa fa-home mr-10"></i>Home</a></li>
								  <li class="active">Appointment</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
            </section>
            <!-- End Hero Area -->

            <!-- Start appointment Area -->
            <section class="section appointment-area pt-60">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
<!--                            <h6 class="section-subtitle mb-10 t-uppercase color-mid">WHY WE DO</h6>-->
                            <h2 class="section-title mb-20 font-22 t-uppercase">MAKE AN APPOINTMENT</h2>
                            <div class="heart-line">
                                <img src="assets/images/icon.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                    <div class="row services">
<!--
                        <div class="col-lg-6">
                            <img src="assets/images/appointment/img-01.png" alt="">
                        </div>
-->
                        <div class="col-md-offset-3 col-lg-6 ptb-40">
                            <div class="appointment-form">
                                <form method="post"  action="appfunc.php">
                                    <div class="row row-tb-10 row-rl-10">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-lg" placeholder="First Name" name="appfname" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-lg" placeholder="Last Name" name="applname" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control input-lg" placeholder="Address Email" name="appemail" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="tel" class="form-control input-lg" placeholder="Phone Number" name="appmobile" >
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control input-lg" name="appgender" >
                                                
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Child">Child</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control input-lg field-date" placeholder="appointment Date" name="appdate" >
                                        </div>
                                        <div class="col-xs-12">
                                            <textarea class="form-control input-lg" rows="7" placeholder="Message" name="appmessage" ></textarea>
                                        </div>
                                        <div class="col-xs-12">
                                            <button class="btn btn-lg btn-blue" style="margin-left:44%" type="submit" name="submit" id="appointmentSubmit">Submit</button>
                                        </div>
<!--
                                        <div class="col-xs-12">
                                            <div id="appointmentResponse" class="form-response">
                                                <span class="color-theme"><i class="fa fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </div>
                                        </div>
-->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Start appointment Area -->
            <!-- Start Testimonial Area -->

            <!-- End Testimonial Area -->
<br/> <br/>
		</main>
		<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
		
	 <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
		<footer class="main-footer">
            <?php require("footer.php"); ?>
        </footer>
      <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->

        </div>
        
    <!-- =========[ jQuery library ]========= -->
	<script src="assets/js/jquery-1.12.3.min.js"></script>

	<!-- ========[ Latest Bootstrap ]======== -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

	<!-- ========[ JavaScript Plugins ]======== -->
	<!-- (!) Include all compiled plugins (below), or include individual files as needed -->

	<!-- Owl Carousel -->
	<script type="text/javascript" src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>

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
            <script src="assets/js/dropdown.js"></script>
    </body>
</html>

