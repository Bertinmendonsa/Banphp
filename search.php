<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bangalore Nethralaya</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
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
    <link href="assets/css/services.css" rel="stylesheet">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/standard.css">

<script type="text/javascript" src="assets/js/tipuesearch_set.js"></script>
<script type="text/javascript" src="assets/js/tipuesearch_content.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/tipuesearch.css">
<script type="text/javascript" src="assets/js/tipuesearch.min.js"></script>

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
<!-- head -->


 <div class="navbar navbar-default navbar-fixed-top">
		<?php require("header.php"); ?>
        </div>  
       

<!-- body -->

<!--

<div class="center" style="padding-top: 97px;"><a href="http://www.tipue.com/search"><img src="../../img/front_6.jpg" class="front_img" alt="Tipue Search"></a></div>
<div class="center" style="padding-top: 21px;"><h2>Tipue Search Static Mode Demo</h2></div>
-->
    <main id="mainContent" class="main-content" style="padding-top: 6em;">
        	<section class="section breadcrumb-area bg-ct pt-100 pb-80 subbanner overlay overlaybg" >
                <div class="container t-center">
	            	<div class="row">
		            	<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
							<div class="section-top-title">
								<h1 class="t-uppercase font-45">Welcome to Bangalore Nethralaya</h1>
<!--
								<ol class="breadcrumb">
								  <li><a href="index.php"><i class="fa fa-home mr-10"></i>Home</a></li>
								  <li class="active">Appointment</li>
								</ol>
-->
							</div>
						</div>
					</div>
				</div>
            </section>
    </main>
    
<div class="block" style="padding-top: 100px;">
<!--    <h1 class="color-blue t-c">Welcome to Bangalore Nethralaya</h1>-->
<form action="search.php">
<div class="tipue_search_left"><img src="assets/images/search.png" class="tipue_search_icon"></div>
<div class="tipue_search_right"><input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required></div>
<div style="clear: both;"></div>
</form>
<div id="tipue_search_content" class="pb-30"></div>


<!--<div class="center mow" style="padding: 39px 0 30px 0;">&copy; 2017, Mahat Consulting, Made in INDIA</div>-->

<script>
$(document).ready(function() {
     $('#tipue_search_input').tipuesearch();
});
</script>
    </div>
     <footer class="main-footer">
            <?php require("footer.php"); ?>
        </footer>
 <!-- –––––––––––––––[ FOOTER END ]––––––––––––––– -->
    <script>
	   $(document).ready(function(){
		   $('.dropdown-submenu a.test').on("click", function(e){
			   $(this).next('ul').toggle();
			   e.stopPropagation();
			   e.preventDefault();
		   });
	   });
   </script>
   <!-- =====[ Custom Template JavaScript ]===== -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/demo.js"></script>
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
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </div>
</body>
</html>
