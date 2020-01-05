<?php include 'inc/header.php'; ?>

<?php 
  if (!isset($_GET['detailid']) && $_GET['detailid'] == NULL) {
    echo "Id Not Found";

  }else{

    $id = $_GET['detailid'];
  }
 ?>

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Services Details</h2>
                  <div class="page_link">
                      <a href="index.php">Home</a>
                      <a href="portfolio-details.php">Porfolio Single</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->

	<!--================Start Portfolio Details Area =================-->
	<section class="portfolio_details_area section-margin">
    <div class="container">
      <?php 
      $query = "SELECT * FROM tbl_services WHERE $id = id";
      $post  =$db->SELECT($query);
      if ($post) {
        $result = $post->fetch_assoc();
      }
       ?>
      <div class="row">
        <div class="offset-xl-1 col-xl-10">
          <div class="portfolio_details_inner">
            <div class="row">
              <div class="col-12">
                  <div class="left_img">
                      <img class="img-fluid" src="admin/<?php echo $result['image'] ;?>" alt="">
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <p><?php echo $result['details']; ?></p>
              </div>

            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Portfolio Details Area =================-->
    
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