<?php include 'inc/header.php'; ?>

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Our Services</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="services.php">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    

	<!--================ Start Features Area =================-->

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
				<?php 
				$query ="SELECT * FROM tbl_services";
				$post = $db->select($query);
				if ($post) {
					while ($result= $post->fetch_assoc()) {?>
						

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="service_item">
						<img class="img-fluid" src="admin/<?php echo $result['image'] ;?>" alt="">
						<h4><?php echo $result['name']; ?></h4>
						<p><?php echo $fm->textShorten($result['details']); ?></p>
						<a href="details.php?detailid=<?php echo $result['id'];?>" class="primary_btn2 mt-35">Learn More</a>
					</div>
				</div>
    <?php } }else{
    	echo "Coding problem";
 } ?>

			</div>
		</div>
	</section>
  <!--================ End Features Area =================-->
  

	<!--================ Start Testimonial Area =================-->
	<section class="testimonial_area pb-xl-300px">
		<div class="container">
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