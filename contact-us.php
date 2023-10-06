<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Contact us</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.jpg" />

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />
  </head>

  <body>
   

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Top header  -->
      <!-- ============================================================== -->
      <!-- Start Navigation -->
      <?php
include('header.php');
?>
      <!-- End Navigation -->
      <div class="clearfix"></div>
      <!-- ============================================================== -->
      <!-- Top header  -->
      <!-- ============================================================== -->

      <!-- ============================ Page Title Start================================== -->
      <div
        class="page-title"
        style="background: #017efa url(assets/img/page-title.png) no-repeat"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <h2 class="ipt-title">Get In touch</h2>
              <span class="ipn-subtitle">Get all latest news and updates</span>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================ Page Title End ================================== -->

      <!-- ============================ Contact Start ================================== -->
      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
              <div class="sec-heading center">
                <label class="label text-success bg-light-success"
                  >Grow Your Business</label
                >
                <h2>Activate Next Now</h2>
                <p>
                  Please fill the form and we will guide you to the best
                  solution. Our experts will get in touch soon.
                </p>
              </div>
            </div>
          </div>

          <!-- row Start -->
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-12">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control simple" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control simple" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control simple" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Phone.</label>
                    <input type="text" class="form-control simple" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control simple"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                      Submit Request
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /row -->

          <!-- row Start -->
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 col-md-12">
              <div class="ctr-veshm-box">
                <div class="ctr-veshm-signl">
                  <div class="ctr-veshm-signl-ico">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="ctr-veshm-signl-caption">
                    <h5>Rishikesh</h5>
                    <p>
                      Krishe Emerald, Whitefields, Kondapur, Hyderabad,
                      Telangana 500081
                    </p>
                    <p>nikhil@gmail.com</p>
                  </div>
                </div>
                <div class="ctr-veshm-signl">
                  <div class="ctr-veshm-signl-ico">
                    <i class="fa-solid fa-map-location-dot"></i>
                  </div>
                  <div class="ctr-veshm-signl-caption">
                    <h5>Tapovan</h5>
                    <p>
                      Prestige Cube, Koramangala, Bengaluru, Karnataka 560029
                    </p>
                    <p>nikhil@gmail.com</p>
                  </div>
                </div>
                <div class="ctr-veshm-signl">
                  <div class="ctr-veshm-signl-ico">
                    <i class="fa-solid fa-map-location"></i>
                  </div>
                  <div class="ctr-veshm-signl-caption">
                    <h5>Shivpuri</h5>
                    <p>
                      B-101, Vedant Sapphire, Sneha Nagar, Nagpur, Maharashtra,
                      440015
                    </p>
                    <p>nikhil@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
      </section>
      <!-- ============================ Contact End ================================== -->

     
      <!-- ============================ Call To Action End ================================== -->

      <!-- ============================ Footer Start ================================== -->
      <?php include 'footer.php';?>
      <!-- ============================ Footer End ================================== -->

      <!-- Log In Modal -->
      <div
        class="modal fade"
        id="login"
        tabindex="-1"
        role="dialog"
        aria-labelledby="registermodal"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-centered login-pop-form"
          role="document"
        >
          <div class="modal-content" id="registermodal">
            <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"
              ><i class="fas fa-close"></i
            ></span>
            <div class="modal-header">
              <div class="mdl-thumb">
                <img
                  src="assets/img/ico.png"
                  class="img-fluid"
                  width="70"
                  alt=""
                />
              </div>
              <div class="mdl-title">
                <h4 class="modal-header-title">Hello, Again</h4>
              </div>
            </div>
            <div class="modal-body">
              <div class="modal-login-form">
                <form>
                  <div class="form-floating mb-4">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="name@example.com"
                    />
                    <label>User Name</label>
                  </div>

                  <div class="form-floating mb-4">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                    />
                    <label>Password</label>
                  </div>

                  <div class="form-group">
                    <button
                      type="submit"
                      class="btn btn-primary full-width font--bold btn-lg"
                    >
                      Log In
                    </button>
                  </div>

                  <div class="modal-flex-item mb-3">
                    <div class="modal-flex-first">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          id="savepassword"
                          value="option1"
                        />
                        <label class="form-check-label" for="savepassword"
                          >Save Password</label
                        >
                      </div>
                    </div>
                    <div class="modal-flex-last">
                      <a href="JavaScript:Void(0);">Forget Password?</a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="social-login">
                <ul>
                  <li>
                    <a href="JavaScript:Void(0);" class="btn connect-fb"
                      ><i class="fa-brands fa-facebook"></i>Facebook</a
                    >
                  </li>
                  <li>
                    <a href="JavaScript:Void(0);" class="btn connect-google"
                      ><i class="fa-brands fa-google"></i>Google+</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-footer">
              <p>
                Don't have an account yet?<a
                  href="signup.html"
                  class="theme-cl font--bold ms-1"
                  >Sign Up</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal -->

      <a id="back2Top" class="top-scroll" title="Back to top" href="#"
        ><i class="ti-arrow-up"></i
      ></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/dropzone.js"></script>
    <script src="assets/js/datedropper-javascript.js"></script>

    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
  </body>
</html>
