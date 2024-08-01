<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>Springboard - About</title>

  <!--cs files-->
  @include('links.style')

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!--Header-->
  @include('layout.header')

  <div class="container mt-5">
  </div>

  <main>
    <div class="page-section mt-5">
      <div class="text-center py-5">
        <h2 class="title-section py-5">About Us<span class="marked"></span></h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="container mt-4">
        <div class="row align-items-center fadeInUp">
          <div class="col-lg-6 py-3">
            <div class="img-fluid text-center">
              <img src="../assets/img/bg_image_2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 pr-lg-5">
            <h3 class="title-section">We are a licensed<span class="marked"> Micro-credit Agency </span></h3>
            <div class="divider"></div>
            <p>Established in Lilongwe - Malawi, our mission is to provide financial services to small businesses that have no access to financing in formal lending markets.
              Our goal is to support the growth of these businesses, create job opportunities, and ultimately improve the living standards of their communities.</p>

            <h3 class="title-section mt-5">Target Market</h3>
            <div class="divider"></div>
            <p>SBM targets small businesses operating in informal sectors such as agriculture, retail, and services.
              These businesses are often overlooked by traditional banks and financial institutions due to their lack of collateral, limited credit history, and small loan sizes.
              SBM understands the challenges faced by these businesses and provides them with flexible and affordable loan options tailored to their needs. </p>

            <a href="#testimony" class="btn btn-outline border ml-2">Success Stories</a>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section counter-section">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-lg-4">
            <p>Total Invest</p>
            <h2>$<span class="number" data-number="816278"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Yearly Revenue</p>
            <h2>$<span class="number" data-number="216422"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Growth Ration</p>
            <h2><span class="number" data-number="73"></span>%</h2>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Testimonials -->
    <div class="page-section bg-light" id="testimony">
      <div class="container">

        <h2>Testimonials</h2>
        <div class="divider"></div>

        <div class="owl-carousel" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../assets/img/person/harvey.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente quo.</p>
                  <div class="entry-footer">
                    <strong>Harvey Mmangisa</strong> <br><span class="text-grey">CEO - Octet Systems</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../assets/img/person/vin.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Repudiandae vero assumenda sequi labore ipsum eos ducimus provident a nam vitae et, dolorum temporibus inventore quaerat consectetur quos! Animi, qui ratione?</p>
                  <div class="entry-footer">
                    <strong>Vincent Ngoma</strong><br><span class="text-grey">CSO - Octet Systems</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item">
            <img src="../assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/google.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/stripe.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/paypal.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/mailchimp.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>

  <!--Footer-->
  @include('layout.footer')

  <!--javascript-->
  @include('links.js')

</body>

</html>