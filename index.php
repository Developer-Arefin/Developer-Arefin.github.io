


    <?php include 'lib/Database.php'; ?>
    <?php include 'config/config.php'; ?>
    <?php include 'helpers/format.php'; ?>



    <?php 

    $db = new Database();
    $fm = new Format();

    ?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Breed Portfolio - Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<a class="navbar-brand logo_inner_page" href="index.php"><img src="img/logo2.png" alt=""></a>      
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
							<li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
									<li class="nav-item"><a class="nav-link" href="portfolio-details.php">Portfolio Details</a></li>
								</ul>
							</li>
							
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="banner_content">
							<h3>Hey There !</h3>
							<h1 class="text-uppercase">I am Arefin Islam</h1>
							<h5 class="text-uppercase">Web Developer And Graphics Designer</h5>
							<div class="social_icons my-5">
								<a href="https://www.instagram.com/arefin_clicker/"><i class="ti-instagram"></i></a>
								<a href="https://www.facebook.com/Arefin.Islam.33695?ref=bookmarks"><i class="ti-facebook"></i></a>
								
							</div>
							<a class="primary_btn" href="portfolio.php ?>"><span>See My Work</span></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="home_right_img">
							<?php 
							$query ="SELECT * FROM tbl_home";
							$post = $db->select($query);
							if ($post) {
								$result = $post->fetch_assoc();
							}
							 ?>
							<img class="img-fluid" src="admin/<?php echo $result['bannerimage'] ;?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Statistics Are
	<section class="statistics_area">
		<div class="container">
			<div class="row justify-content-lg-start justify-content-center">
				<div class="col-lg-2 col-md-3">
					
				</div>

				<div class="col-lg-2 col-md-3">
				<div class="statistics_item">
				<ul class="star_rating mt-4">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
					<h3><span class="counter">9</span>/10</h3>
						<p>Average Rating</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	================ End Statistics Area =================-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/slick.min.js"></script>
<script>
	$(document).ready(function(){
  $('#slide').slick({
  	slidesToShow: 3,
  	 slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  });
});
</script>

	<!--================ Start About Us Area =================-->
<div class="container" style="margin-bottom: 20px;">
	    <div class="row heading heading-icon" style="padding-top: 50px;">
        <h2 style="color: black;">Our Servics</h2>
    </div>

       <div id="slide" class="row">

          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">Graphics</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"> <i class="fa fa-globe" aria-hidden="true"></i> </div>
                 <h2 class="ssb-title">web service</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-camera" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">Photography</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-font" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">Fonts</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">Mockups</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-eyedropper" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">Colours</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-youtube" aria-hidden="true"></i> </div>
                 <h2 class="ssb-title">Video</h2>  
               </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="#">
                 <div class="ssb-icon"><i class="fa fa-volume-up" aria-hidden="true"></i> </div>
                 <h2 class="ssb-title">Audio</h2>  
               </a>
            </div>
          </div>
          
       </div>
    </div>
	<style >
a:hover, a:focus {
  color: #2a6496;
  text-decoration: none;
}
.square-service-block{
	position:relative;
	overflow:hidden;
	margin:15px auto;
	}
.square-service-block a {
  background-color: #e74c3c;
  border-radius: 5px;
  display: block;
  padding: 60px 20px;
  text-align: center;
  width: 100%;
}
.square-service-block a:hover{
  background-color: rgba(231, 76, 60, 0.8);
  border-radius: 5px;
}

.ssb-icon {
  color: #fff;
  display: inline-block;
  font-size: 28px;
  margin: 0 0 20px;
}

h2.ssb-title {
  color: #fff;
  font-size: 20px;
  font-weight: 200;
  margin:0;
  padding:0;
  text-transform: uppercase;
}


.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}


.our-webcoderskull{
  background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;
  
}
.our-webcoderskull .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   padding:30px 20px; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.our-webcoderskull .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#337ab7;
}
.our-webcoderskull .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
	margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

	</style>
	<!--================ Start Features Area =================-->
<section class="our-webcoderskull padding-lg">
  <div class="container" style="margin-bottom: 20px;">
    <div class="row heading heading-icon">
        <h2>Our Team</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Web coder skull</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Manish </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
    </ul>
  </div>
</section>
	<!--================ End Features Area =================-->

	<!--================ Start Features Area
	<section class="services_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Service <span></span></p>
						<h2>What Service We <br>
							Offer For You </h2>
					</div>
				</div>
			</div>

			<div class="row">

						

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="service_item">
						<img class="img-fluid" src="admin/<?php echo $result['image'] ;?>" alt="">
						<h4><?php echo $result['name']; ?></h4>
						<p><?php echo $fm->textShorten($result['details']); ?></p>
						<a href="details.php?detailid=<?php echo $result['id'];?>" class="primary_btn2 mt-35">Learn More</a>
					</div>
				</div>
				</div>

 } ?>

			
		</div>
	</section>
	<!--================ End Features Area =================-->


  <!--================ Start Testimonial Area =================-->
	<section class="testimonial_area">
		<div class="container" style="margin-top: 20px;">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Tesitmonial <span></span></p>
						<h2>Honourable Client Says <br>
							About Me </h2>
					</div>
				</div>
      </div>

      <div class="owl-carousel owl-theme testimonial-slider ">
        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/testimonials/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Roser Henrique</h4>
                <p><small>Project Manager, Apple</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-4">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/testimonials/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Roser Henrique</h4>
                <p><small>Project Manager, Apple</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-3">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/testimonials/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Roser Henrique</h4>
                <p><small>Project Manager, Apple</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-3">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!--================ End Testimonial Area =================-->




	<!--================ Start Portfolio Area =================-->



	<!--================ Start Brands Area =================-->
	<section class="brands-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="owl-carousel brand-carousel">
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo1.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo2.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo4.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo5.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brands Area =================-->

<?php include 'inc/footer.php'; ?>