<?php
require_once 'database/dbcon.php';
// Rest of your code follows...
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Rishikesh visit - Residence & Real Estate</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

  <!-- Custom CSS -->
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>

  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <?php include("header.php"); ?>

    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->








    <!-- ============================ What Happening End ================================== -->


    <!-- ============================ Achievements End ================================== -->

    <!-- ================================= Recently Property ================================== -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-10 text-center">
            <div class="sec-heading center">
              <h2>Yoga Schools for you</h2>
              <p>
                Discover Inner Peace and Wellness: Yoga Schools For You - Nurturing Mind, Body, and Soul in the Serene
                Heart of Rishikesh, Uttarakhand, India.
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center gx-3 gy-4">
          <!-- Single Property -->
          <?php
          $main_cat_id = $_GET['main_cat_id'];
          $yogahours = $_GET['yogahours'];
          $data_fetch_query = mysqli_query($conn, "select * from allaboutproperty where category = '$main_cat_id' AND sort='$yogahours'");
          while ($row_query = mysqli_fetch_array($data_fetch_query)) {
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type fr-sale"><span>
                    <?php echo $row_query['category']; ?>
                  </span></div>

                <div class="veshm-list-thumb">

                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a
                          href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"><img
                            src="<?php echo $row_query['img_1']; ?>" class="img-fluid mx-auto" alt="" /></a>
                      </div>
                      <div>
                        <a
                          href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"><img
                            src="<?php echo $row_query['img_2']; ?>" class="img-fluid mx-auto" alt="" /></a>
                      </div>
                      <div>
                        <a
                          href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"><img
                            src="<?php echo $row_query['img_3']; ?>" class="img-fluid mx-auto" alt="" /></a>
                      </div>
                      <div>
                        <a
                          href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"><img
                            src="<?php echo $row_query['img_4']; ?>" class="img-fluid mx-auto" alt="" /></a>
                      </div>
                      <div>
                        <a
                          href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"><img
                            src="<?php echo $row_query['img_5']; ?>" class="img-fluid mx-auto" alt="" /></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="veshm-list-block">
                  <div class="veshm-list-head">
                    <div class="veshm-list-head-caption">
                      <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">
                          <?php echo $row_query['price']; ?>
                          <span class="monthly">/Person</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"
                            class="prt-link-detail">
                            <?php echo substr($row_query['title'], 0, 40); ?>
                          </a>
                        </h5>
                      </div>
                      <div class="nerb-lists-sgl-04">
                        <div class="nerb-section-number">
                          <div class="prt-ves-ratting">
                            <?php echo $row_query['prop_stars']; ?>
                          </div>
                        </div>
                        <i class="fa-solid fa-people-group"></i>
                        <?php echo $row_query['prop_no_of_reviews']; ?> Reviews

                      </div>

                    </div>
                  </div>

                  <div class="veshm-list-footer">
                    <div class="prty-veryfy ">
                      <?php echo $row_query['air_services']; ?>
                    </div>
                    <div class="prty-veryfy">
                      <i class="fa-solid fa-utensils"></i>
                      <?php echo $row_query['meal_services']; ?>
                    </div>
                    <div class="prty-veryfy">
                      <i class="fa-solid fa-circle-check"></i>
                      Certified Instructors
                    </div>
                    <div class="prty-veryfy">
                      <i class="fa-solid fa-language"></i>
                      <?php echo $row_query['faculty_language']; ?>
                    </div>
                    <div class="prty-veryfy">
                      <i class="fa-solid fa-calendar"></i>
                      <?php echo $row_query['no_of_days']; ?> Days
                    </div>

                  </div>
                  <div class="veshm-list-availabilty">
                    <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query['prop_id']; ?>&main_category=<?php echo $row_query['category']; ?>"
                      class="btn btn-avalability">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>

        </div>
      </div>
    </section>
    <!-- ================= Recent Property End ================= -->




    <!-- ============================ Footer Start ================================== -->
    <?php include 'footer.php'; ?>
    <!-- ============================ Footer End ================================== -->




    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
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