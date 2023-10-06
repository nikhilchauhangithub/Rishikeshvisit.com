<?php
include 'database/dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Rishikesh visit - Yoga and tourism</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

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
      <?php include("header.php"); ?>
      <!-- End Navigation -->
      <div class="clearfix"></div>
      <!-- ============================================================== -->
      <!-- Top header  -->
      <!-- ============================================================== -->

      <!-- ============================ Hero Banner  Start================================== -->
      <?php
      $main_id = $_GET['main_id'];
      $data_fetch_query = mysqli_query($conn, "select * from allaboutproperty where prop_id = '$main_id'");
      while ($row_query = mysqli_fetch_array($data_fetch_query)) {
        ?>
                  <div class="featured_slick_gallery gray">
                    <div class="featured_slick_gallery-slide">
                      <div class="featured_slick_padd">
                        <a href="<?php echo $row_query['img_1']; ?>" class="mfp-gallery"
                          ><img
                            src="<?php echo $row_query['img_1']; ?>"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div class="featured_slick_padd">
                        <a href="<?php echo $row_query['img_2']; ?>" class="mfp-gallery"
                          ><img
                            src="<?php echo $row_query['img_2']; ?>"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div class="featured_slick_padd">
                        <a href="<?php echo $row_query['img_3']; ?>" class="mfp-gallery"
                          ><img
                            src="<?php echo $row_query['img_3']; ?>"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div class="featured_slick_padd">
                        <a href="<?php echo $row_query['img_4']; ?>" class="mfp-gallery"
                          ><img
                            src="<?php echo $row_query['img_4']; ?>"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div class="featured_slick_padd">
                        <a href="<?php echo $row_query['img_5']; ?>" class="mfp-gallery"
                          ><img
                            src="<?php echo $row_query['img_5']; ?>"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
        
                    </div>
                  </div>


                  <!-- ============================ Hero Banner End ================================== -->

                  <!-- ============================ Property Detail Start ================================== -->
                  <section class="gray-simple">
                    <div class="container">
                      <div class="row">
                        <!-- property main detail -->
                        <div class="col-lg-8 col-md-12 col-sm-12">
                          <!-- Main Info Detail -->
                          <div class="vesh-detail-bloc">
                            <div class="vesh-detail-headup">
                              <div class="vesh-detail-headup-first">
                                <div class="prt-detail-title-desc">
                                  <span class="label label-success"><?php echo $row_query['category']; ?></span>
                                  <h4><?php echo $row_query['title']; ?></h4>
                                  <span class="text-mid"
                                    ><i class="fa-solid fa-location-dot me-2"></i><?php echo $row_query['full_address']; ?></span
                                  >
                                  
                                  <div class="list-fx-features mt-2">
                                    <div class="list-fx-fisrt">
                                      <span
                                        class="label font--medium label-light-success me-2"
                                        ><?php echo $row_query['prop_stars']; ?></span
                                      >
                                      <span class="label font--medium label-light-info me-2"
                                        ><i class="fa-solid fa-people-group"></i> <?php echo $row_query['prop_no_of_reviews']; ?></span
                                      >
                                      <span class="label font--medium label-light-danger me-2"
                                        ><i class="fa-solid fa-calendar"></i> <?php echo $row_query['no_of_days']; ?> Days</span
                                      >
                                    </div>
                                    <div class="list-fx-last"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="vesh-detail-headup-last">
                                <h3 class="prt-price-fix theme-cl">
                                <?php echo $row_query['price']; ?>
                                  <span> One Person</span>
                                </h3>
                              </div>
                            </div>
                          </div>

                          <!-- About Property Detail -->
                          <div class="vesh-detail-bloc">
                            <div class="vesh-detail-bloc_header">
                              <h4 class="property_block_title no-arrow">About Property</h4>
                            </div>
                            <div class="vesh-detail-bloc-body">
                              <div class="row g-3">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                  <p>
                                  <?php echo $row_query['about']; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php
      }
      ?>

<!--//? Amenties Detail -->
              <div class="vesh-detail-bloc">
                <div class="vesh-detail-bloc_header">
                  <a
                    data-bs-toggle="collapse"
                    data-parent="#amenitiesinfo"
                    data-bs-target="#amenitiesinfo"
                    aria-controls="amenitiesinfo"
                    href="javascript:void(0);"
                    aria-expanded="false"
                    ><h4 class="property_block_title">Amenties</h4></a
                  >
                </div>
                <div
                  id="amenitiesinfo"
                  class="panel-collapse collapse show"
                  aria-labelledby="amenitiesinfo"
                >
                  <div class="vesh-detail-bloc-body">
                    <ul class="avl-features third color">
                    <?php
                    $main_id = $_GET['main_id'];
                    $data_fetch_query = mysqli_query($conn, "select * from amenity where prop_id = '$main_id'");
                    while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                      ?>                     
                                  <li> <?php echo $row_query['amenities']; ?></li>                  
                                  <?php
                    }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>

<!-- // ?yoga styles -->
              <div class="vesh-detail-bloc">
                <div class="vesh-detail-bloc_header">
                  <a
                    data-bs-toggle="collapse"
                    data-parent="#amenitiesinfo"
                    data-bs-target="#amenitiesinfo"
                    aria-controls="amenitiesinfo"
                    href="javascript:void(0);"
                    aria-expanded="false"
                    ><h4 class="property_block_title">Yoga Styles</h4></a
                  >
                </div>
                <div
                  id="amenitiesinfo"
                  class="panel-collapse collapse show"
                  aria-labelledby="amenitiesinfo"
                >
                  <div class="vesh-detail-bloc-body">
                    <ul class="avl-features third color">
                    <?php
                    $main_id = $_GET['main_id'];
                    $data_fetch_query = mysqli_query($conn, "select * from yoga_styles where prop_id = '$main_id'");
                    while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                      ?>
                      
                                  <li> <span class="label font--medium label-success me-2"> <?php echo $row_query['yoga_style']; ?></span></li>
                                  <?php
                    }
                    ?>

                    </ul>
                  </div>
                </div>
              </div>

              <!-- // todo location -->
             <div class="vesh-detail-bloc">
                <div class="vesh-detail-bloc_header">
                  <a
                    data-bs-toggle="collapse"
                    data-parent="#locationinfo"
                    data-bs-target="#locationinfo"
                    aria-controls="locationinfo"
                    href="javascript:void(0);"
                    aria-expanded="false"
                    ><h4 class="property_block_title">Retreat Location</h4></a
                  >
                </div>
                <div
                  id="locationinfo"
                  class="panel-collapse collapse show"
                  aria-labelledby="locationinfo"
                >

                  <div class="vesh-detail-bloc-body">
                    <h7 class="font--medium">This training will be held at the <strong>Moksha Ashram </strong> and the <strong>Kriya Yoga Ashram</strong> in
Rishikesh, India.</h7>
                  </div>


                </div>
              </div>

              <!--// todo how to get there -->
               
              <div class="vesh-detail-bloc">
    <div class="vesh-detail-bloc_header">
        <a
            data-bs-toggle="collapse"
            data-parent="#airportinfo"
            data-bs-target="#airportinfo"
            aria-controls="airportinfo"
            href="javascript:void(0);"
            aria-expanded="false"
            ><h4 class="property_block_title">How to get there</h4></a
        >
    </div>
    <div
        id="airportinfo"
        class="panel-collapse collapse show"
        aria-labelledby="airportinfo"
    >

        <div class="vesh-detail-bloc-body">
            <h6 class="font--medium">Recommended Airports</h6>
            <div class="row gx-xl-4 gx-lg-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="vesh-list-categ-box">
                        <div class="vesh-categ-list-links">
                            <div class="vesh-categ-list-icons">
                                <i class="fa-solid fa-plane-arrival"></i>
                            </div>
                            <!-- airport 1 -->
                            <div class="vesh-categ-list-content">
                                <div class="veshm-list-098 "><span>252 km</span></div>
                                <h4 class="vesh-content-title"> IGI, Terminal-3</h4>
                                <div class="vesh-prt-location">Indira Gandhi International Airport</div>

                                <div class="vesh-categ-strt">
                                    <span class="starting">Delhi, India</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="vesh-list-categ-box">
                        <div class="vesh-categ-list-links">
                            <div class="vesh-categ-list-icons">
                                <i class="fa-solid fa-plane-arrival"></i>
                            </div>
                            <!-- airport 2 -->
                            <div class="vesh-categ-list-content">
                                <div class="veshm-list-098 "><span>21 km</span></div>
                                <h4 class="vesh-content-title">JL</h4>
                                <div class="vesh-prt-location">Jollygrant International Airport</div>

                                <div class="vesh-categ-strt">
                                    <span class="starting">Dehradun, India</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

              

             
           <!--//?  Yoga instructors Detail -->
           <div class="vesh-detail-bloc">
                <div class="vesh-detail-bloc_header">
                  <h4 class="property_block_title no-arrow">
                    Our Instructors
                  </h4>
                </div>
                <div class="panels">
                  <div class="vesh-detail-bloc-body">
                    <div class="prt-reviews-groups">
                      
              <?php
              $main_id = $_GET['main_id'];
              $data_fetch_query = mysqli_query($conn, "select * from yoga_instructors where prop_id = '$main_id'");
              while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                ?>
            <div class="prt-reviews-single">
                                    <div class="prt-reviews-single-thumb">
                                      <div class="prt-rvs-head">
                                        <div class="prt-rvs-head-img">
                                          <img
                                            src=" <?php echo $row_query['instructor_img']; ?>"
                                            class="img-fluid square--80 rounded-circle "
                                            alt=""
                                          />
                                        </div>

                                        <div class="prt-rvs-head-caption">
                                          <div class="prt-ves-ratting">
                                          <?php echo $row_query['instructor_specialty']; ?>
                                          </div>

                                          <div class="prt-ves-reviewer">
                                            <h4> <?php echo $row_query['instructor_name']; ?></h4>
                                          </div>
                                          <div class="prt-ves-ratting-title">
                                            <h5 class="text-success"> <?php echo $row_query['instructor_exp']; ?> years Experienced</h5>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="prt-reviews-single-content">
                                      <div class="prt-ves-paragraph">
                                        <p>
                                        <?php echo $row_query['instructor_info']; ?>
                                        </p>
                                      </div>
                                      <div class="prt-post-date">
                                      <span class="label font--medium label-light-danger me-2"
                                        >certificates</span
                                      >
                                      </div>
                                    </div>
                                  </div>
                                  <?php
              }
              ?>
                    </div>
                    
                  </div>
                </div>
              </div>

              <!-- yoga instructors ends here  -->

              <!-- Property Reviews Detail -->
              <div class="vesh-detail-bloc">
                <div class="vesh-detail-bloc_header">
                  <h4 class="property_block_title no-arrow">
                    Property Reviews
                  </h4>
                </div>
                <div class="panels">
                  <div class="vesh-detail-bloc-body">
                    <div class="prt-reviews-groups">
                    <?php
                    $main_id = $_GET['main_id'];
                    $data_fetch_query2 = mysqli_query($conn, "select * from property_reviews where prop_id = '$main_id'");
                    while ($row_query2 = mysqli_fetch_array($data_fetch_query2)) {
                      ?>
                                  <div class="prt-reviews-single">
                                    <div class="prt-reviews-single-thumb">
                                      <div class="prt-rvs-head">
                                        <div class="prt-rvs-head-img">
                                          <img
                                            src="<?php echo $row_query2['user_pic_1']; ?>"
                                            class="img-fluid circle"
                                            alt=""
                                          />
                                        </div>
                                        <div class="prt-rvs-head-caption">
                                          <div class="prt-ves-ratting">
                                          <?php echo $row_query2['total_stars_1']; ?>
                                          </div>
                                          <div class="prt-ves-reviewer">
                                            <h4>By: <?php echo $row_query2['user_name_1']; ?></h4>
                                          </div>
                                          <div class="prt-ves-ratting-title">
                                            <h5 class="text-success"><?php echo $row_query2['review_title_oneword_1']; ?></h5>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="prt-reviews-single-content">
                                      <div class="prt-ves-paragraph">
                                        <p>
                                        <?php echo $row_query2['review_text_1']; ?>
                                        </p>
                                      </div>
                                      <div class="prt-post-date">
                                        <span>Posted on <?php echo $row_query2['date_1']; ?></span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="prt-reviews-single">
                                    <div class="prt-reviews-single-thumb">
                                      <div class="prt-rvs-head">
                                        <div class="prt-rvs-head-img">
                                          <img
                                            src="<?php echo $row_query2['user_pic_2']; ?>"
                                            class="img-fluid circle"
                                            alt=""
                                          />
                                        </div>
                                        <div class="prt-rvs-head-caption">
                                          <div class="prt-ves-ratting">
                                          <?php echo $row_query2['total_stars_2']; ?>
                                          </div>
                                          <div class="prt-ves-reviewer">
                                            <h4>By: <?php echo $row_query2['user_name_2']; ?></h4>
                                          </div>
                                          <div class="prt-ves-ratting-title">
                                            <h5 class="text-success"><?php echo $row_query2['review_title_oneword_2']; ?></h5>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="prt-reviews-single-content">
                                      <div class="prt-ves-paragraph">
                                        <p>
                                        <?php echo $row_query2['review_text_2']; ?>
                                        </p>
                                      </div>
                                      <div class="prt-post-date">
                                        <span>Posted on <?php echo $row_query2['date_2']; ?></span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="prt-reviews-single">
                                    <div class="prt-reviews-single-thumb">
                                      <div class="prt-rvs-head">
                                        <div class="prt-rvs-head-img">
                                          <img
                                            src="<?php echo $row_query2['user_pic_3']; ?>"
                                            class="img-fluid circle"
                                            alt=""
                                          />
                                        </div>
                                        <div class="prt-rvs-head-caption">
                                          <div class="prt-ves-ratting">
                                          <?php echo $row_query2['total_stars_3']; ?>
                                          </div>
                                          <div class="prt-ves-reviewer">
                                            <h4>By: <?php echo $row_query2['user_name_3']; ?></h4>
                                          </div>
                                          <div class="prt-ves-ratting-title">
                                            <h5 class="text-success"><?php echo $row_query2['review_title_oneword_3']; ?></h5>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="prt-reviews-single-content">
                                      <div class="prt-ves-paragraph">
                                        <p>
                                        <?php echo $row_query2['review_text_3']; ?>
                                        </p>
                                      </div>
                                      <div class="prt-post-date">
                                        <span>Posted on <?php echo $row_query2['date_3']; ?></span>
                                      </div>
                                    </div>
                                  </div>

                                  <?php
                    }
                    ?>
                       

                    

                    
                    </div>
                    
                  </div>
                </div>
              </div>

 
              
               <!--//? Nearby Destination -->
              
              <div class="vesh-detail-bloc"> 
                <div class="vesh-detail-bloc_header">
                  <a
                    data-bs-toggle="collapse"
                    data-parent="#schoolsinfo"
                    data-bs-target="#schoolsinfo"
                    aria-controls="schoolsinfo"
                    href="javascript:void(0);"
                    aria-expanded="false"
                    ><h4 class="property_block_title">
                      Nearby Great Destinations
                    </h4></a>
                </div>
                <div
                  id="schoolsinfo"
                  class="panel-collapse collapse show"
                  aria-labelledby="schoolsinfo"
                >
                  <div class="vesh-detail-bloc-body">
                    <div class="nerb-lists-groups">
                    <?php
                    $main_id = $_GET['main_id'];
                    $data_fetch_query3 = mysqli_query($conn, "select * from nearby_places where prop_id = '$main_id'");
                    while ($row_query3 = mysqli_fetch_array($data_fetch_query3)) {
                      ?>
                            <!--//? nearby places -->
                                  <div class="nerb-lists-single">
                                    <div class="nerb-lists-sgl-first">
                                    <!-- // todo -->
                                      <div class="prt-rvs-head-img"> 
                                      <img
                                            src="<?php echo $row_query3['nb_pl_image']; ?> "
                                            class="img-fluid square--80 rounded"
                                            alt=""
                                          />
                                    </div>
                                      <div class="nerb-lists-sgl-caption">
                                        <div class="nerb-school-name">
                                        <h5 class="rlhc-title-name verified">
                                          <a
                                            href="https://rishikeshvisit.com/blog-index.php?main_id=<?php echo $row_query3['prop_id']; ?>&main_category=<?php echo $row_query3['category']; ?>"
                                            class="prt-link-detail"
                                            ><?php echo $row_query3['nb_pl_name']; ?></a
                                          >
                                        </h5>

                                        </div>
                            
                                        <div class="nerb-school-subtext">
                                         <span>  <?php echo $row_query3['nb_pl_distance']; ?></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="nerb-lists-sgl-last">
                                      <div class="nerb-lists-sgl-01">
                                        <div class="nerb-section-number-subtext"><?php echo $row_query3['nb_pl_type']; ?></div>
                                        <!-- <div class="nerb-section-title">
                                     <a class="label font--medium label-light-primary me-2" href="https://rishikeshvisit.com/famous-place-to-visit-in-rishikesh.php"> Read More</a> 
                                    </div> -->
                                      </div>
  
                                      <div class="nerb-lists-sgl-03">
                                        <div class="nerb-section-number">
                                          <div class="prt-ves-ratting">
                                          <?php echo $row_query3['nb_pl_stars']; ?>
                                          </div>
                                        </div>
                                        <div class="nerb-section-title">
                                          <span> <?php echo $row_query3['nb_pl_reviews']; ?> Reviews</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <?php
                    }
                    ?>

                    </div>
                  </div>
                </div>
              </div>       
            </div>
            <!-- property main detail -->

            <!-- Property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
              <!-- Like And Share -->

              <div class="pg-side-groups">
                <?php
                $main_id = $_GET['main_id'];

                $data_fetch_query = mysqli_query($conn, "select * from packages_plan where prop_id = '$main_id'");
                while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                  ?>
                          <div class="form-group">
                                      <div
                                        class="booking-info-try bg-light rounded border border-primary"
                                      >
                                        <ul>
                                        <h4 class="total-title"><?php echo $row_query['package_tier']; ?></h4>
                                          <li>
                                            <h5> Person</h5>
                                            <span><input type="number" value="1" id="num_of_person" min="1" style="height: 20px" class="form-control border border-primary booking-info-try" /></span>
                                          </li>
                              
                                          <li>
                                            <h5> Total</h5>
                                            <span id="totalSpan"></span>
                                          </li>
                                          <li>
                                            <h5> Room</h5>
                                            <span class="text-primary">Single</span>
                                          </li>
                                           <li>
                                            <h5> Month</h5>
                                            <span><input type="month" value="<?php echo date('Y-m'); ?>" style="height: 20px" class="form-control bg-light border border-primary booking-info-try" /></span>
                                          </li>
 
                                           <div class="single-button">

                                   <a href="https://rishikeshvisit.com/checkout.php?main_id=<?php echo $row_query['prop_id']; ?>&package_category=<?php echo $row_query['package_tier']; ?>&num_of_person="
                               class="btn font--medium btn-light-primary full-width">
                    
                                Book now  <i class="fa-solid fa-arrow-right"></i>
                            </a>
                                 </div>
                            
                                        </ul>
                                      </div>
                                    </div>

                            <div class="pg-side-block">
                              <div class="pg-side-block-body">                
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var numInput = document.getElementById("num_of_person");
                    var totalSpan = document.getElementById("totalSpan");
                    var mprice = <?php echo $row_query['price']; ?>;

                    numInput.addEventListener("input", function () {
                        var numValue = parseInt(numInput.value);
                        var calculatedValue = numValue * mprice;
                        totalSpan.textContent = "$ " + calculatedValue;
                    });
                });
            </script>
            </body>
            </html>







                          
                             <?php
                }
                ?>                

                         
                <div class="pg-side-block">
                <?php
                $main_id = $_GET['main_id'];
                $data_fetch_query7 = mysqli_query($conn, "select * from allaboutproperty where prop_id = '$main_id'");
                while ($row_query2 = mysqli_fetch_array($data_fetch_query7)) {
                  ?>
                  
                            <div class="pg-side-block-body">
                               <div class="pg-side-block-info">
                                 <div class="vl-elfo-group">
                                   <div class="vl-elfo-icon">
                                     <i class="fa-solid fa-phone-volume"></i>
                                   </div>
                                   <div class="vl-elfo-caption">
                                     <h6>Call Us</h6>
                                     <p> +91 999999999</p>
                                   </div>
                                 </div>
                                 <div class="vl-elfo-group">
                                   <div class="vl-elfo-icon">
                                     <i class="fa-regular fa-envelope"></i>
                                   </div>
                                   <div class="vl-elfo-caption">
                                     <h6>Drop A Mail</h6>
                                     <p>paythemezhub@gmail.com</p>
                                   </div>
                                 </div>
                                 <div class="vl-elfo-group">
                                   <div class="vl-elfo-icon">
                                     <i class="fa-solid fa-globe"></i>
                                   </div>
                                   <div class="vl-elfo-caption">
                                     <h6>Website</h6>
                                     <p>https://nikhilchauhan.netlify.app</p>
                                   </div>
                                 </div>
                               </div>
                               <div class="pg-side-block-buttons">
                                 <div class="single-button">
                                   <a
                                     href="JavaScript:Void(0);"
                                     data-bs-toggle="modal"
                                     data-bs-target="#offer"
                                     class="btn font--medium btn-light-success full-width"
                                     ><i class="fa-solid fa-paper-plane me-2"></i>Whatsapp</a
                                   >
                                 </div>
                                 <div class="single-button">
                                   <a
                                   href="JavaScript:Void(0);"
                                     data-bs-toggle="modal"
                                     data-bs-target="#offer"
                                     class="btn font--medium btn-light-primary full-width"
                                     ><i class="fa-solid fa-paper-plane me-2"></i>Mail</a
                                   >
                                 </div>
                               </div>
                             </div>

                

                             <?php
                }
                ?>                

                       
                      </div>
                      <div class="pull-right flipInX">
                      <div class="drp_menu_headr">
                        <h4> <i class="fa-regular fa-circle-check fa-lg"></i>  What's included</h4> 
                      </div>

                      
                      <?php
                      $main_id = $_GET['main_id'];
                      $data_fetch_query = mysqli_query($conn, "select * from prop_included where prop_id = '$main_id'");
                      while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                        ?>
                       
                                  <div class="ntf-list-groups">
                                    <div class="ntf-list-groups-single">
                                      <div class="ntf-list-groups-icon text-success">
                                      <?php echo $row_query['prop_pkg_including_icon']; ?>
                                      </div>
                                      <div class="ntf-list-groups-caption">
                                        <p class="medium">
                                        <?php echo $row_query['prop_pkg_including']; ?>
                                        </p>
                                      </div>
                                    </div>
                                    <?php
                      }
                      ?>             
      
                       
                      </div>

                           <!-- //todo What's Not included -->
                   <div class="pull-right flipInX">
                      <div class="drp_menu_headr">
                        <h4> <i class="fa-regular fa-circle-xmark fa-lg"></i> What's Not included</h4>
                      </div>

                      <?php
                      $main_id = $_GET['main_id'];
                      $data_fetch_query = mysqli_query($conn, "select * from prop_not_included where prop_id = '$main_id'");
                      while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                        ?>
                                  <div class="ntf-list-groups">
                                    <div class="ntf-list-groups-single">
                                      <div class="ntf-list-groups-icon text-danger ">
                                      <?php echo $row_query['prop_pkg_excluding_icon']; ?>
                                      </div>
                                      <div class="ntf-list-groups-caption">
                                        <p class="medium">
                                        <?php echo $row_query['prop_pkg_excluding']; ?>
                                        </p>
                                      </div>
                                    </div>

                                    <?php
                      }
                      ?>             


                        
                        <!-- //todo  Highlights-->
                   <div class="pull-right flipInX">
                      <div class="drp_menu_headr">
                        <h4> <i class="fa-regular fa-star fa-lg"></i> Highlights</h4>
                      </div>
                                     <?php
                                     $main_id = $_GET['main_id'];
                                     $data_fetch_query = mysqli_query($conn, "select * from prop_highlights where prop_id = '$main_id'");
                                     while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                                       ?>
                                    <!-- // * new line 1 -->
                                  <div class="ntf-list-groups">
                                    <div class="ntf-list-groups-single">
         
                                      <div class="ntf-list-groups-icon">
                                      <i class="fa-regular fa-circle-dot fa-sm"></i>
                                      </div>
                                      <div class="ntf-list-groups-caption">

                                        <p class="medium">
                                        <?php echo $row_query['prop_ht_content']; ?>
                                        </p>
                                      </div>
                                    </div>

                                    <?php
                                     }
                                     ?>            


                    
                        <!-- //?  Daily Schedule-->
                   <div class="pull-right flipInX">
                      <div class="drp_menu_headr">
                        <h4> <i class="fa-regular fa-calendar-days fa-lg"></i> Daily Schedule</h4>
                      </div>
                      <?php
                      $main_id = $_GET['main_id'];
                      $data_fetch_query = mysqli_query($conn, "select * from yoga_schedules where prop_id = '$main_id'");
                      while ($row_query = mysqli_fetch_array($data_fetch_query)) {
                        ?>
                                    <!-- // * new line 1 -->
                                  <div class="ntf-list-groups">
                                    <div class="ntf-list-groups-single">
                                      <div class="ntf-list-groups-icon">
                                      <i class="fa-regular fa-clock fa-sm text-primary"></i>
                                      </div>
                                      <div class="ntf-list-groups-caption">
                                        <p class="medium">
                                      <strong><?php echo $row_query['yoga_schedule_time']; ?> </strong> <?php echo $row_query['yoga_schedule_activity']; ?>
                                        </p>
                                      </div>
                                    </div>
                          
                                    <?php
                      }
                      ?> 
                      </div>
                    </div>
      </div>
                          <!-- block ends here -->
                    </div>
                  </div>
                </div>
</div>
              <div class="pg-side-block">
                 
                 
               </div>
                        

                        
                      </div>
                    </div>
                  </div>
                </div>

               
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================ Property Detail End ================================== -->

      <!-- ============================ Related Property ===================================== -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-10">
              <div class="sec-heading">
                <h6>Similar Property nearby</h6>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="similar-slide">
                <!-- Single Slide -->
                <?php
                $main_category = $_GET['main_category'];
                $data_fetch_query4 = mysqli_query($conn, "select * from allaboutproperty where category = '$main_category'");
                while ($row_query4 = mysqli_fetch_array($data_fetch_query4)) {
                  ?>
                            <div class="single-slide">
                              <div class="veshm-list-wraps">
                                <div class="veshm-type"><span><?php echo $row_query4['category']; ?></span></div>

                                <div class="veshm-list-thumb">
                      
                                  <div class="veshm-list-img-slide">
                                    <div class="veshm-list-click">
                                      <div>
                                        <a href="single-property-1.html"
                                          ><img
                                            src="<?php echo $row_query4['img_1']; ?>"
                                            class="img-fluid mx-auto"
                                            alt=""
                                        /></a>
                                      </div>
                                      <div>
                                        <a href="single-property-1.html"
                                          ><img
                                            src="<?php echo $row_query4['img_2']; ?>"
                                            class="img-fluid mx-auto"
                                            alt=""
                                        /></a>
                                      </div>
                                      <div>
                                        <a href="single-property-1.html"
                                          ><img
                                            src="<?php echo $row_query4['img_3']; ?>"
                                            class="img-fluid mx-auto"
                                            alt=""
                                        /></a>
                                      </div>
                                      <div>
                                        <a href="single-property-1.html"
                                          ><img
                                            src="<?php echo $row_query4['img_4']; ?>"
                                            class="img-fluid mx-auto"
                                            alt=""
                                        /></a>
                                      </div>
                                      <div>
                                        <a href="single-property-1.html"
                                          ><img
                                            src="<?php echo $row_query4['img_5']; ?>"
                                            class="img-fluid mx-auto"
                                            alt=""
                                        /></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="veshm-list-block">
                                  <div class="veshm-list-head">
                                    <div class="veshm-list-head-caption">
                                      <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl"><?php echo $row_query4['price']; ?>
                                          <span class="monthly">/Person</span>
                                        </h4>
                                      </div>
                                      <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                          <a
                                            href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
                                            class="prt-link-detail"
                                            > <?php echo substr( $row_query4['title'], 0, 37  ); ?></a
                                          >
                                        </h5>
                                       
                                      </div>
                                      <div class="nerb-lists-sgl-04">
                                        <div class="nerb-section-number">
                                          <div class="prt-ves-ratting">
                                          <?php echo $row_query4['prop_stars']; ?>
                                          </div>
                                          
                                        </div>
                                        <i class="fa-solid fa-people-group"></i>
                                              <?php echo $row_query4['prop_no_of_reviews']; ?> Reviews
                                        
                                      </div>
                                    </div>
                       
                                  </div>
                      
                                  <div class="veshm-list-footer">
                                            
                                            <div class="prty-veryfy">
                                              <?php echo $row_query4['air_services']; ?> 
                                            </div>
                                            <div class="prty-veryfy">
                                              <i class="fa-solid fa-utensils"></i> 
                                              <?php echo $row_query4['meal_services']; ?> 
                                            </div>
                                            <div class="prty-veryfy">
                                                <i class="fa-solid fa-circle-check"></i>
                                                Certified Instructors
                                              </div>
                                            <div class="prty-veryfy">
                                            <i class="fa-solid fa-language"></i> 
                                            <?php echo $row_query4['faculty_language']; ?> 
                                          </div>
                                          <div class="prty-veryfy">
                                          <i class="fa-solid fa-people-group"></i>
                                            <?php echo $row_query4['prop_no_of_reviews']; ?> 
                                          </div>
                                          <div class="prty-veryfy">
                                          <i class="fa-solid fa-calendar"></i>
                                            <?php echo $row_query4['no_of_days']; ?> Days
                                          </div>

                                          </div>
                                          <div class="veshm-list-availabilty">
                                                      <a
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#availability"
                                                        class="btn btn-avalability"
                                                        >Request to Book</a>
                                                </div>
                                </div>
                              </div>
                            </div>

            <?php
                }
                ?>
              


              

               

               

                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= Related Property End ================================= -->

      

      <!-- ============================ Footer Start ================================== -->
      <?php include 'footer.php'; ?>
      <!-- ============================ Footer End ================================== -->

      
        
           
          </div>
        </div>
      </div>
      

        

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

   
    <!-- Custom Chart JavaScript -->
    

    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script>
      new dateDropper({
        selector: '#checkin',
      });
    </script>
    <script>
      new dateDropper({
        selector: '#checkout',
      });
    </script>
 </body>
</html>