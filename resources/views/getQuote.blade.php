<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>Springboard - Get Quote</title>

  <!--cs files-->
  @include('links.style')

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!--Header-->
  @include('layout.header')


  <main>
    <div class="page-section justify-content-center align-items-center mt-5">
      <div class="container mt-5">
        <div class="row align-items-center">

          <div class="col-lg-6 md-6 py-3 container">
            <h3 class="title-section">Request a Quotation</h3>
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
              <button type="submit" class="btn btn-primary rounded-pill mt-4">Request a Quote</button>
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