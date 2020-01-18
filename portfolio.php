<?php include 'inc/header.php'; ?>
<style>
	
	.pagination{ display: block; font-size: 20px;margin-top: 10px; padding: 10px; text-align: center; }
	.pagination a {
	 background: #021017 none repeat scroll 0 0;
	 border: 1px solid #593ACF;
	 border-radius: 3px;
	 color: #ffff;
	 margin-left: 2px;
	 padding: 2px 10px;
	 text-decoration: none;
	 
	 }
	.pagination a:hover{
	background:  #CF3FBC none repeat scroll 0 0;
	

	}
</style>

<!-- Start Pagination-->

<?php  
	$per_page = 4;
	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}else{
		$page = 1;
	}
	$start_from = ($page-1) * $per_page;
?>
<!-- End Pagination-->

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="index.php">Home</a>
                      <a href="portfolio.php">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->

<style>
.scroll {
  
  overflow: auto;
  white-space: nowrap;
  height: 650px;
}


</style>
  <!--================ Start Portfolio Area =================-->
 
	<section class="portfolio_area section-margin pb-0" id="portfolio">
		<div class="container" >
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Portfolio <span></span></p>
						<h2>Check Our Recent <br>
							Client Work </h2>
					</div>
				</div>
			</div>

			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					
					<li data-filter=".latest"> latest</li>
					
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
 
			<div  class="filters-content">
				<div class="scroll">
				<div class="row portfolio-grid " >
					<div class="grid-sizer col-md-3 col-lg-3"></div>
					<?php  
					$query = "SELECT * FROM tbl_portfolio   ";
					$post  =$db->SELECT($query);
					if ($post) {
						while ($result = $post->fetch_assoc()) {

					 ?>


					<div class="col-lg-3 col-md-6  all " >
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="admin/<?php echo $result['image']; ?>" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.php"><?php echo $result['workname']; ?></a></h4>
								<p><?php echo $result['workcategory']; ?></p>
							</div>
						</div>
					</div>
					<div class="grid-sizer col-md-3 col-lg-3"></div>
					<?php  } } ?>
					

					<?php  
					$query = "SELECT * FROM tbl_latest ORDER BY id ";
					$post  =$db->SELECT($query);
					if ($post) {
						while ($result = $post->fetch_assoc()) {

					 ?>

					<div class="col-lg-3 col-md-6  all latest  ">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="admin/<?php echo $result['image']; ?>" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">Logo design</a></h4>
								<p>Coming soon</p>
							</div>
						</div>
					</div>
					<?php  } } ?>

					<div class="col-lg-6 col-md-6 all upcoming ">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.php">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			</div>
			
		</div>
	</section>
	
	<!--================ End Portfolio Area =================-->
				<!-- Start Pagination-->
				<!--
				<?php  

				$pquery = "SELECT * FROM tbl_portfolio ";
				$result = $db->SELECT($pquery);
				$total_rows = mysqli_num_rows($result);
				$total_pages =ceil($total_rows/$per_page);
				echo "<span class='pagination' ><a href='portfolio.php?page=1'>".'First page'."</a>"; 
				for ($i=1; $i <=$total_pages ; $i++) { 
					echo "<a href='portfolio.php?page=".$i."'>".$i."</a>";
				}
			    echo "<a href='portfolio.php?page=$total_pages'>".'Last page'."</a></span>"; ?>
				-->
				<!-- End Pagination-->


	
<?php include 'inc/footer.php'; ?>

  <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>