<?php include 'inc/header.php'; ?>

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">

      </div>
  </section>
  <!--================ End Banner Area =================-->



  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Thank's for hiring me.<br>Please send me a message with your work details or requirment</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>

              <div class="col-12">
                <div class="form-group">

                  Select a Demo File: <input type="file" name="fupload" /><br />

                </div>
              </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>

            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="primary_btn button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->


        
<?php include 'inc/footer.php'; ?>