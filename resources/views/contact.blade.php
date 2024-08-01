<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>Springboard - Contact </title>

  <!--cs files-->
  @include('links.style')

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!--Header-->
  @include('layout.header')


  <main>
    <div class="page-section">
      <div class="text-center wow fadeInUp py-5">
        <h2 class="title-section py-5">Contact Us<span class="marked"></span></h2>
        <div class="divider mx-auto"></div>
      </div>
      
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <h2 class="title-section">Get in Touch</h2>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem veritatis!</p>

            <ul class="contact-list">
              <li>
                <div class="icon"><span class="mai-map"></span></div>
                <div class="content">Lilongwe, Malawi</div>
              </li>
              <li>
                <div class="icon"><span class="mai-mail"></span></div>
                <div class="content"><a href="mailto:springboardmw@outlook.com">springboardmw@outlook.com </a></div>
              </li>
              <li>
                <div class="icon"><span class="mai-phone-portrait"></span></div>
                <div class="content"><a href="#">+265 984 019 494 / +265 994 381 323</a></div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3">
            <div class="subhead">Contact Us</div>
            <h2 class="title-section">Drop Us a Line</h2>
            <div class="divider"></div>

            <form action="#">
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Full name">
              </div>
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="py-2">
                <textarea rows="6" class="form-control" placeholder="Enter message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4">Send Message</button>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

  <!--Footer-->
  @include('layout.footer')

  <!--javascript-->
  @include('links.js')

  <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->


</body>

</html>