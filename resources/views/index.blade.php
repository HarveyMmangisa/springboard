<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>Springboard - Welcome</title>

  <!--cs files-->
  @include('links.style')

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('layout.header')

  <div class="page-banner home-banner">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1 class="mb-4">Every business needs a financial muscle to run!</h1>
          <p class="text-lg mb-5">Ignite the most powerfull growth engine you have ever built for your company</p>

          <a href="{{route('about')}}" class="btn btn-outline border text-secondary">More Info</a>
          <a href="#" class="btn btn-primary btn-split ml-2">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
        </div>
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place">
            <img src="../assets/img/bg_image_1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <main>

    <!--services-->
    <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Our Services</h2>
          <div class="divider mx-auto"></div>
        </div>

        <div class="row mt-5 text-center">
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Business Loans </h5>
            <p>Our loans are designed to meet the unique needs of small businesses, with flexible repayment terms, low interest rates, and no hidden fees. </p>

            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>

          </div>

          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Working Capital Loans</h5>
            <p>Our loans are designed to meet the unique needs of small businesses, with flexible repayment terms, low interest rates, and no hidden fees. </p>

            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>

          </div>

          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Savings Accounts</h5>
            <p>SBM understands the challenges faced by these businesses and provides them with flexible and affordable loan options tailored to their needs. </p>

            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>

          </div>

          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Financial Literacy </h5>
            <p>SBM understands the challenges faced by these businesses and provides them with flexible and affordable loan options tailored to their needs. </p>

            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>

          </div>

          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Business Development Support </h5>
            <p>SBM understands the challenges faced by these businesses and provides them with flexible and affordable loan options tailored to their needs. </p>

            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>

          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!--<div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="../assets/img/bg_image_2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <h2 class="title-section">We're <span class="marked">Dynamic</span> Team of Creatives People</h2>
            <div class="divider"></div>
            <p>We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
            <div class="img-place mb-3">
              <img src="../assets/img/testi_image.png" alt="">
            </div>
            <a href="#" class="btn btn-primary">More Details</a>
            <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
          </div>
        </div>
      </div>  
    </div> .page-section -->

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

    <!--Why choose us-->
    <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">Why Choose Us</div>
          <h2 class="title-section">Your <span class="marked">needs</span> is Our Priority</h2>
          <div class="divider mx-auto"></div>
        </div>

        <div class="row mt-5 text-center">
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>High Professionalism</h5>
            <p>SBM is led by a team of experienced professionals with a deep understanding of the microfinance industry and the challenges faced by small businesses in Malawi.
              Our management team has a proven track record of delivering innovative financial solutions and creating sustainable impact in communities.</p>
          </div>

          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Impact-Oriented</h5>
            <p>SBM is committed to making a positive impact in the communities we serve. Our aim is to provide access to financial services to small businesses that would otherwise be excluded from the formal banking system.
              By doing so, we hope to support the growth of these businesses, create job opportunities, and ultimately improve the living standards of their communities.</p>
          </div>

          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Affordability</h5>
            <p>SBM understands the challenges faced by these businesses and provides them with flexible and affordable loan options tailored to their needs. </p>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!--Testimonials-->
    <div class="page-section bg-light">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Hear our Clients<span class="marked"></span></h2>
          <div class="divider mx-auto"></div>
        </div>
        <div class="owl-carousel wow fadeInUp" id="testimonials">
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

    <!--word out-->
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            <h2 class="title-section">We're <span class="marked">ready to</span> Serve you with best</h2>
            <div class="divider"></div>
            <p class="mb-5">We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
            <a href="#" class="btn btn-primary">Get a Service</a>
            <a href="{{route('getQuote')}}" class="btn btn-outline ml-2">Get a Quote</a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="../assets/img/bg_image_3.png" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->


    <!--
    <div class="page-section features">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5>Served by Professionals</h5>
                <p>SBM is led by a team of experienced professionals with a deep understanding of the microfinance industry and the challenges faced by small businesses in Malawi.
                  Our management team has a proven track record of delivering innovative financial solutions and creating sustainable impact in communities.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5>Complete solutions for global organisations</h5>
                <p>Copywrite, blogpublic realations content translation.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5>Provide financial advice by our advisor</h5>
                <p>Copywrite, blogpublic realations content translation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>.page-section -->

    <!--Pricing Plan-->
    <div class="page-section border-top">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Pricing Plan</h2>
          <div class="divider mx-auto"></div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-lg-auto py-3 wow fadeInLeft">
            <div class="card-pricing">
              <div class="header">
                <div class="price-icon"><span class="mai-people"></span></div>
                <div class="price-title">Membership</div>
              </div>
              <div class="body py-3">
                <div class="price-tag">
                  <span class="currency">$</span>
                  <h2 class="display-4">30</h2>
                  <span class="period">/monthly</span>
                </div>
                <div class="price-info">
                  <p>Choose the plan that right for you</p>
                </div>
              </div>
              <div class="footer">
                <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-auto py-3 wow fadeInUp">
            <div class="card-pricing active">
              <div class="header">
                <div class="price-labled">Best</div>
                <div class="price-icon"><span class="mai-business"></span></div>
                <div class="price-title">Dedicated</div>
              </div>
              <div class="body py-3">
                <div class="price-tag">
                  <span class="currency">$</span>
                  <h2 class="display-4">60</h2>
                  <span class="period">/monthly</span>
                </div>
                <div class="price-info">
                  <p>Choose the plan that right for you</p>
                </div>
              </div>
              <div class="footer">
                <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-auto py-3 wow fadeInRight">
            <div class="card-pricing">
              <div class="header">
                <div class="price-icon"><span class="mai-rocket-outline"></span></div>
                <div class="price-title">Private</div>
              </div>
              <div class="body py-3">
                <div class="price-tag">
                  <span class="currency">$</span>
                  <h2 class="display-4">90</h2>
                  <span class="period">/monthly</span>
                </div>
                <div class="price-info">
                  <p>Choose the plan that right for you</p>
                </div>
              </div>
              <div class="footer">
                <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->


    <div class="page-section border-top">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Our News<span class="marked"></span></h2>
          <div class="divider mx-auto"></div>
        </div>
        <div class="row my-5 card-blog-row">
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="{{route('news-single')}}">What is Business Management?</a></div>
              </div>
              <div class="footer">
                <a href="{{route('news-single')}}">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="{{route('news-single')}}">What is Business Management?</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="{{route('news-single')}}">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_2.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="{{route('news-single')}}">What is Business Management?</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="{{route('news-single')}}">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_3.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="{{route('news-single')}}">What is Business Management?</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="{{route('news-single')}}">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center">
          <a href="{{route('news')}}" class="btn btn-outline-primary rounded-pill">Discover More</a>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item wow zoomIn">
            <img src="../assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="../assets/img/clients/google.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="../assets/img/clients/stripe.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="../assets/img/clients/paypal.png" alt="">
          </div>
          <div class="item wow zoomIn">
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