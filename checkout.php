
<?php
require_once 'database/dbcon.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Hillways - Residence & Real Estate</title>
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
              <h2 class="ipt-title">Checkout</h2>
              <span class="ipn-subtitle"
                >Complete your checkout and proceed</span
              >
            </div>
          </div>
        </div>
      </div>
      <!-- ============================ Page Title End ================================== -->

      <!-- ============================ Our Story Start ================================== -->

  
      <section>
        <div class="container">
          <!-- row Start -->
          <div class="row">
           

            <div class="col-lg-12 col-md-12">
              <div id="login-frm" class="collapse mb-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control border"
                        placeholder="Username"
                      />
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control border"
                        placeholder="*******"
                      />
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary full-width">
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- /row -->

          <!-- row Start -->
          <div class="row form-submit">
            <div class="col-lg-8 col-md-12 col-sm-12">
              <!-- row -->
              <div class="row m-0">
                <div class="submit-page">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h3>Billing Detail</h3>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Name<i class="req">*</i></label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Email<i class="req">*</i></label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                   

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Country<i class="req">*</i></label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Address<i class="req">*</i></label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                    

                   

                   


                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Contact number<i class="req">*</i></label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                    

                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Additional Information</label>
                        <textarea class="form-control ht-50"></textarea>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
              <!--/row -->

              <div class="panel-group pay_opy980" id="payaccordion">
                <!-- Pay By Paypal -->
                <div class="panel panel-default">
                  <div class="panel-heading" id="pay">
                    <h4 class="panel-title">
                      <a
                        data-bs-toggle="collapse"
                        role="button"
                        data-bs-parent="#payaccordion"
                        href="#payPal"
                        aria-controls="payPal"
                        class=""
                        >PayPal<img
                          src="assets/img/paypal.html"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </h4>
                  </div>
                  <div
                    id="payPal"
                    class="panel-collapse collapse show"
                    aria-labelledby="pay"
                    data-bs-parent="#payaccordion"
                  >
                    <div class="panel-body">
                      <form>
                        <div class="form-group">
                          <label>PayPal Email</label>
                          <input
                            type="text"
                            class="form-control simple"
                            placeholder="paypal@gmail.com"
                          />
                        </div>
                        <div class="form-group">
                          <button
                            type="submit"
                            class="btn btn-primary full-width"
                          >
                            Pay 400.00 USD
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Pay By Strip -->
                <div class="panel panel-default">
                  <div class="panel-heading" id="stripes">
                    <h4 class="panel-title">
                      <a
                        data-bs-toggle="collapse"
                        role="button"
                        data-bs-parent="#payaccordion"
                        href="#stripePay"
                        aria-controls="stripePay"
                        class=""
                        >Stripe<img
                          src="assets/img/strip.html"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </h4>
                  </div>
                  <div
                    id="stripePay"
                    class="collapse"
                    aria-labelledby="stripes"
                    data-bs-parent="#payaccordion"
                  >
                    <div class="panel-body">
                      <form>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                              <label>Card Holder Name</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                              <label>Card Number</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="form-group">
                              <label>Expire Month</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="form-group">
                              <label>Expire Year</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                              <label>CVC</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                              <input
                                id="am-2"
                                class="form-check-input"
                                name="am-2"
                                type="checkbox"
                              />
                              <label for="am-2" class="form-check-label"
                                >By Continuing, you ar'e agree to
                                conditions</label
                              >
                            </div>
                          </div>

                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group text-center">
                              <a href="#" class="btn btn-primary full-width"
                                >Pay 202.00 USD</a
                              >
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Pay By Debit or credtit -->
                <div class="panel panel-default">
                  <div class="panel-heading" id="dabit">
                    <h4 class="panel-title">
                      <a
                        data-bs-toggle="collapse"
                        role="button"
                        href="#payaccordion"
                        data-bs-target="#debitPay"
                        aria-controls="debitPay"
                        class=""
                        >Debit Or Credit<img
                          src="assets/img/debit.html"
                          class="img-fluid"
                          alt=""
                      /></a>
                    </h4>
                  </div>
                  <div
                    id="debitPay"
                    class="panel-collapse collapse"
                    aria-labelledby="dabit"
                    data-bs-parent="#payaccordion"
                  >
                    <div class="panel-body">
                      <form>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                              <label>Card Holder Name</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                              <label>Card Number</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="form-group">
                              <label>Expire Month</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="form-group">
                              <label>Expire Year</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                              <label>CVC</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                              <input
                                id="aj-2"
                                class="form-check-input"
                                name="aj-2"
                                type="checkbox"
                              />
                              <label for="aj-2" class="form-check-label"
                                >By Continuing, you ar'e agree to
                                conditions</label
                              >
                            </div>
                          </div>

                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group text-center">
                              <a href="#" class="btn btn-primary full-width"
                                >Pay 202.00 USD</a
                              >
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>


           

            <!-- Col-lg 4 -->
    <div class="col-lg-4 col-md-12 col-sm-12">
     <?php
            $main_id=$_GET['main_id'];
            
$data_fetch_query=mysqli_query($conn,"select * from allaboutproperty where prop_id = '$main_id'");
while($row_query=mysqli_fetch_array($data_fetch_query))

{
    ?> 
        
          
              <div class="check-ourio-wrap">
                <div class="check-ourio-head"><h5>Order Summary</h5></div>
                <div class="check-ourio-caption">
                  <div class="check-ourio-single">
                    <div class="check-ourio-first">
                      <img
                        src="<?php echo $row_query['img_1'];?>"
                        class="img-fluid rounded"
                        alt=""
                      />
                    </div>
                    <div class="check-ourio-last">
                      <h5><?php echo $row_query['title'];?></h5>
                      <div class="rlhc-prt-location">
                        <img
                          src="assets/img/pin.svg"
                          width="16"
                          class="me-1"
                          alt=""
                        /><?php echo $row_query['full_address'];?>
                      </div>
                      <div class="prt-jhio-price"><h4><?php echo $row_query['price'];?></h4></div>
                    </div>
                  </div>
                  <?php
}
?>

<?php
            $main_id=$_GET['main_id'];
            $package_category=$_GET['package_category'];
$data_fetch_query=mysqli_query($conn,"select * from packages_plan where prop_id = '$main_id' LIMIT 1");
while($row_query=mysqli_fetch_array($data_fetch_query))

{
    ?> 

                  <div
                    class="booking-info-try rounded bg-light-success border border-success mb-4"
                  >
                    <ul>
                      <li>
                        <h6>#125469</h6>
                        <span>$87,000</span>
                      </li>
                      <li>
                        <h6>#125492</h6>
                        <span>$95,000</span>
                      </li>
                      <li>
                        <h6>GST</h6>
                        <span>$12,417</span>
                      </li>
                      <li>
                        <h6>Tax</h6>
                        <span>$72,000</span>
                      </li>
                      <li>
                        <h6 class="total-title"><?php echo $row_query['package_tier'];?></h6>
                        <span class="total-price">$$2,14570</span>
                      </li>
                    </ul>
                  </div>
                  <button class="btn btn-theme font--medium full-width">
                    Confirm Payment
                  </button>
                </div>
              </div>
            </div>
            <?php
}
?>

            <!-- /col-lg-4 -->
          </div>

          <!-- /row -->
        </div>

      </section>



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
        aria-labelledby="loginmodal"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-centered login-pop-form"
          role="document"
        >
          <div class="modal-content" id="loginmodal">
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
