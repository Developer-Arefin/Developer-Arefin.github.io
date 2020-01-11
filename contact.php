<?php include 'inc/header.php'; ?>

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Contact Us</h2>
                  <div class="page_link">
                      <a href="index.php">Home</a>
                      <a href="blog.php">Contact</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->



  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px; margin: 0px auto; width: 450px; "></div>
        <script>
          function initMap() {
            var uluru = {lat: 23.8103, lng: 90.4125};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 23.8103, lng: 90.4125},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          };
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>

<?php  
  
   if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $message  = $_POST['message'];
    $name     =$fm->validation($_POST['name']) ;
    $email    = $fm->validation($_POST['email']);
    $subject  = $fm->validation($_POST['subject']);

    $vmessage         = mysqli_real_escape_string($db->link, $message);
    $vname            = mysqli_real_escape_string($db->link, $name);
    $vemail           = mysqli_real_escape_string($db->link, $email);
    $vsubject         = mysqli_real_escape_string($db->link, $subject);

    if ($vmessage =="" || $vname=="" ||$vemail==""||$vsubject=="") {
      echo "Filed Must not be empty";
    }else{
      $query  ="INSERT INTO tbl_message(message, name ,email,subject) VALUES('$vmessage','$vname','$vemail','$vsubject')";
      $post= $db->INSERT($query);
      if ($post) {?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

swal("Thanks!", "Your message successfully sent!", "success").then(function() {
    window.location = "contact.php";
});
</script>';

        <?php
      }else{
        echo "Codind problem";
      }
    }
    
  }
 ?>
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 " name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
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
              <button type="submit" id="submit" name="submit"class="primary_btn button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Dhaka, Bangladesh.</h3>
              <p>Shanarpar, Rd no 1246</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:01315391066">01315391066</a></h3>
              <p>Contact with me any time</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="arefinislam634@gmail.com">arefinislam634@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

 <script>  
 $(document).ready(function()
 {  
      $('#submit').click(function()
      {  
           var content = $("#message", "#name", "#email" ,"#subject").val();  
          if ($.trim(content) !='') {} 
      });  
 });  
 </script>  
        
<?php include 'inc/footer.php'; ?>