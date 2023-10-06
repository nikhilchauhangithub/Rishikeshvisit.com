<?php
require_once 'database/dbcon.php';
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
      <div class="header header-transparent change-logo">
        <div class="container">


          <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
           
              <a class="nav-brand static-logo" href="https://rishikeshvisit.com/index.php"
                ><img src="assets/img/logo-light.png" class="logo" alt=""
              /></a>
              <a class="nav-brand fixed-logo" href="https://rishikeshvisit.com/index.php"
                ><img src="assets/img/logo.png" class="logo" alt=""
              /></a>
             
        
              <div class="nav-toggle"></div>

             
            </div>
            
           <div class="nav-menus-wrapper" style="transition-property: none">
              <ul class="nav-menu">       
               <li>
               <a href="https://rishikeshvisit.com/index.php"
                    >Home<span class="submenu-indicator"></span
                  ></a>
               </li>
                <li>
                  <a href="#"
                    >Yoga<span class="submenu-indicator"></span
                  ></a>
                  
<ul class="nav-dropdown">
                <?php
                $data_fetch_query1 = mysqli_query($conn, "select * from allaboutproperty");
                if ($row_query1 = mysqli_fetch_array($data_fetch_query1)) {
                    $category = $row_query1['category'];
                    ?>
                    <li><a href="https://rishikeshvisit.com/category-all.php?main_cat_id=<?php echo $category; ?>">Yoga teacher training</a></li>
                    <li><a href="https://rishikeshvisit.com/yoga-category-all.php?main_cat_id=<?php echo $category; ?>&yogahours=online">Online YTT Rishikesh</a></li>
                    <li><a href="https://rishikeshvisit.com/yoga-category-all.php?main_cat_id=<?php echo $category; ?>&yogahours=100">100 hrs YTT Rishikesh</a></li>
                    <li><a href="https://rishikeshvisit.com/yoga-category-all.php?main_cat_id=<?php echo $category; ?>&yogahours=200">200 hrs YTT Rishikesh</a></li>
                    <li><a href="https://rishikeshvisit.com/yoga-category-all.php?main_cat_id=<?php echo $category; ?>&yogahours=300">300 hrs YTT Rishikesh</a></li>
                    <li><a href="https://rishikeshvisit.com/yoga-category-all.php?main_cat_id=<?php echo $category; ?>&yogahours=500">500 hrs YTT Rishikesh</a></li>
                    <?php
                }
                ?>
            </ul>
                </li>
        
                <li>
                  <a href="#"
                    >Retreats<span class="submenu-indicator"></span
                  ></a>
                  <ul class="nav-dropdown">
                    <li><a href="home-2.html">Yoga Retreats in Rishikesh</a></li>
                    <li><a href="home-3.html">Online Yoga Retreats</a></li>
                    
                  </ul>
                </li>

                <li>
                  <a href="#"
                    >Hotels<span class="submenu-indicator"></span
                  ></a>
              
                </li>

 <li>
                  <a href="https://rishikeshvisit.com/blog-index.php"
                    >Blogs & Articles<span class="submenu-indicator"></span
                  ></a>
                 
                </li>

                <!-- <li>
                  <a
                    href="#"
                    target="_blank"
                    >Contact Us</a
                  >
                </li>
                
                <li>
                  <a
                    href="#"
                    target="_blank"
                    >About Us</a
                  >
                </li> -->
              </ul>
        
            </div>
          
          </nav>
        </div>
      </div>
      <!-- End Navigation -->
      <div class="clearfix"></div>
      <!-- ============================================================== -->
      <!-- Top header  -->
      <!-- ============================================================== -->

      <!-- ============================ Hero Banner  Start================================== -->
      <div
        class="image-cover hero-header"
        style="background: url(assets/img/banner-7.jpg) no-repeat"
        data-overlay="1"
      >
        <div class="container">
          <div class="inner-banner-text text-center">
            <h1>Discover A Beautiful<br />Place With Us</h1>
            <p class="text-light">
              Would you explore nature paradise in the world, let't find your the
              dream in Rishikesh with us.
            </p>
          </div>

        
        </div>
      </div>
      <!-- ============================ Hero Banner End ================================== -->

      <!-- ============================ Choose category Start ================================== -->
      <section class="classic-bg mid">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
              <div class="sec-heading center light">
                <h2>Explore Top Categories</h2>
                <p>
                Discover Yoga, Relaxing Stays, and Stunning Rishikesh: Your Ultimate Travel Experience Awaits!
                </p>
              </div>
            </div>
          </div>

          <div class="row gx-xl-4 gx-lg-4">
          <?php

          $data_fetch_query = mysqli_query($conn, "select * from home_categories");
          while ($row_query = mysqli_fetch_array($data_fetch_query)) {
            ?>
                                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <div class="vesh-list-categ-box">
                                        <a href="https://rishikeshvisit.com/category-all.php?main_cat_id=<?php echo $row_query['category']; ?>" class="vesh-categ-list-links">
                                          <div class="vesh-categ-list-icons">
                                            <i class="<?php echo $row_query['icon']; ?>"></i>
                                          </div>
                                          <div class="vesh-categ-list-content">
                                          
                                            <div class="veshm-list-098"><span><?php echo $row_query['total_properties']; ?> List</span></div>
                                            <h4 class="vesh-content-title"><?php echo $row_query['category']; ?></h4>
                                            <div class="vesh-prt-location">In <?php echo $row_query['available_location']; ?> Locations in Rishikesh</div>

                                            <div class="vesh-categ-strt">
                                              <span class="starting">Start From</span>
                                              <h4 class="rlhc-price-name theme-cl">
                                              <?php echo $row_query['starting_price']; ?> $<span class="monthly"></span>
                                              </h4>
                                            </div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <?php
          }
          ?>
          </div>
        </div>
      </section>
      <!-- ============================ Choose Categories End ================================== -->

      <!--//? ============================ Explore Properties Start ================================== -->
      <!--//* ================================Best Yoga Teacher Trainings in Rishikesh============================== -->
      <section class="mid">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
              <div class="sec-heading center">
                <h2>Best Yoga Teacher Trainings In Rishikesh</h2>
                <br>

                <p>
                Discover Serenity and Mastery: Top Yoga Teacher Trainings in Rishikesh Await Your Journey.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="similar-slide">
                <!-- Single Slide -->
                <?php

                $data_fetch_query4 = mysqli_query($conn, "select * from allaboutproperty");
                while ($row_query4 = mysqli_fetch_array($data_fetch_query4)) {
                  ?>
                                      <div class="single-slide">
                                        <div class="veshm-list-wraps">
                                          <div class="veshm-type"><span><?php echo $row_query4['category']; ?></span></div>
                                          <div class="veshm-list-thumb">                    
                                            <div class="veshm-list-img-slide">
                                              <div class="veshm-list-click">
                                                <div>
                                                  <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
                                                    ><img
                                                      src="<?php echo $row_query4['img_1']; ?>"
                                                      class="img-fluid mx-auto"
                                                      alt=""
                                                  /></a>
                                                </div>
                                                <div>
                                                  <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
                                                    ><img
                                                      src="<?php echo $row_query4['img_2']; ?>"
                                                      class="img-fluid mx-auto"
                                                      alt=""
                                                  /></a>
                                                </div>
                                                <div>
                                                  <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
                                                    ><img
                                                      src="<?php echo $row_query4['img_3']; ?>"
                                                      class="img-fluid mx-auto"
                                                      alt=""
                                                  /></a>
                                                </div>
                                                <div>
                                                  <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
                                                    ><img
                                                      src="<?php echo $row_query4['img_4']; ?>"
                                                      class="img-fluid mx-auto"
                                                      alt=""
                                                  /></a>
                                                </div>
                                                <div>
                                                  <a href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
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
                                                      >
                                                      <?php echo substr($row_query4['title'], 0, 40); ?></a
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
                                            
                                                      <div class="prty-veryfy ">
                                                        <?php echo $row_query4['air_services']; ?> 
                                                      </div>
                                                      <div class="prty-veryfy">
                                                          <i class="fa-solid fa-circle-check"></i>
                                                          Certified Instructors
                                                        </div>
                                                      <div class="prty-veryfy">
                                                        <i class="fa-solid fa-utensils"></i> 
                                                        <?php echo $row_query4['meal_services']; ?> 
                                                      </div>                                           
                                                      <div class="prty-veryfy">
                                                      <i class="fa-solid fa-language"></i> 
                                                      <?php echo $row_query4['faculty_language']; ?> 
                                                    </div>
                                                    <div class="prty-veryfy">
                                                    <i class="fa-solid fa-calendar"></i>
                                                      <?php echo $row_query4['no_of_days']; ?> Days
                                                    </div>
                                                    </div>
                                                    <div class="veshm-list-availabilty">
                                                        <a
                                                          href="https://rishikeshvisit.com/single-view.php?main_id=<?php echo $row_query4['prop_id']; ?>&main_category=<?php echo $row_query4['category']; ?>"
                                                          class="btn btn-avalability"
                                                          >Read More</a>
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
            <!-- End Single Property -->
          </div>
        </div>
      </section>

      <!--//* ================================Best Hotels in Rishikesh============================== -->
      <section class="mid">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
              <div class="sec-heading center">
                <h2>Best Hotels in Rishikesh</h2>
                <p>
                Discover Rishikesh's Finest Hotels for a Tranquil Retreat
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center gx-3 gy-4">
            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>
                <div class="veshm-list-thumb">
                  
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-1.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-9.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-8.png"
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
                        <h4 class="rlhc-price-name theme-cl">
                          $7,500<span class="monthly">/Months</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Catbird Realty Advisors</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>
                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >3 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >2 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >2200 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->
            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type fr-sale"><span>For sale</span></div>
                <div class="veshm-list-thumb">          
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-2.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-10.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-11.png"
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
                        <h4 class="rlhc-price-name theme-cl">$100,400</h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Banyan Real Estate Group</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>
                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >3 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >3 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >1800 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->
            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>
                <div class="veshm-list-thumb">
                
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-3.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-12.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-13.png"
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
                        <h4 class="rlhc-price-name theme-cl">
                          $8,599<span class="monthly">/Months</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Allen Tate Real Company</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >4 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >2 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >2300 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                 
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-4.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-14.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-15.png"
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
                        <h4 class="rlhc-price-name theme-cl">
                          $9,549<span class="monthly">/Months</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >510 Knob and Key Realty</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >5 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >3 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >2100 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                 
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-5.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-10.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-12.png"
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
                        <h4 class="rlhc-price-name theme-cl">
                          $8,499<span class="monthly">/Months</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >10/310 Dream Big Real Estate</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >2 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >2 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >1700 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-7.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-9.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-14.png"
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
                        <h4 class="rlhc-price-name theme-cl">
                          $7,549<span class="monthly">/Months</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Select Brick Builders</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >3 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >2 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >2200 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type fr-sale"><span>For sale</span></div>

                <div class="veshm-list-thumb">
                 
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-6.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-11.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-15.png"
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
                        <h4 class="rlhc-price-name theme-cl">$89,990</h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Hearthstone Real Property</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >3 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >2 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >2000 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                  
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-8.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-10.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-13.png"
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
                        <h4 class="rlhc-price-name theme-cl">
                          $7,549<span class="monthly">/Months</span>
                        </h4>
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Great Apex Realty Group</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  <div class="veshm-list-footer">
                    <div class="veshm-list-circls">
                      <ul>
                        <li>
                          <span class="bed-inf"
                            ><i class="fa-solid fa-bed"></i></span
                          >3 Bed
                        </li>
                        <li>
                          <span class="bath-inf"
                            ><i class="fa-solid fa-bath"></i></span
                          >2 Ba
                        </li>
                        <li>
                          <span class="area-inf"
                            ><i class="fa-solid fa-vector-square"></i></span
                          >2200 Sft
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Property -->
          </div>
        </div>
      </section>

      <!--//* ============================Best Destinations in Yoga City========================= -->
      <section class="mid">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
              <div class="sec-heading center">
                <h2>Best Destinations in Yoga City</h2>
                <p>
                Discover the Soul of Yoga: Unveiling Rishikesh's Most Enchanting Destinations
               
                </p>
              </div>
            </div>
          </div>

          <div class="row justify-content-center gx-3 gy-4">
            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                  
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-1.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-9.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-8.png"
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
                        <!-- <h4 class="rlhc-price-name theme-cl">
                          $7,500<span class="monthly">/Months</span>
                        </h4> -->
                      </div>
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Catbird Realty Advisors</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type fr-sale"><span>For sale</span></div>

                <div class="veshm-list-thumb">
            
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-2.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-10.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-11.png"
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
                      <!-- <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">$100,400</h4>
                      </div> -->
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Banyan Real Estate Group</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
            
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-3.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-12.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-13.png"
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
                    
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Allen Tate Real Company</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                 
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">                
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-4.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-14.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-15.png"
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
                      <!-- <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">
                          $9,549<span class="monthly">/Months</span>
                        </h4>
                      </div> -->
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >510 Knob and Key Realty</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                 
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-5.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-10.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-12.png"
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
                      <!-- <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">
                          $8,499<span class="monthly">/Months</span>
                        </h4>
                      </div> -->
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >10/310 Dream Big Real Estate</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-7.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-9.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-14.png"
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
                      <!-- <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">
                          $7,549<span class="monthly">/Months</span>
                        </h4>
                      </div> -->
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Select Brick Builders</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type fr-sale"><span>For sale</span></div>

                <div class="veshm-list-thumb">
                 
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-6.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-11.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-15.png"
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
                      <!-- <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">$89,990</h4>
                      </div> -->
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Hearthstone Real Property</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                 
                </div>
              </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="veshm-list-wraps">
                <div class="veshm-type"><span>For rent</span></div>

                <div class="veshm-list-thumb">
                  
                  <div class="veshm-list-img-slide">
                    <div class="veshm-list-click">
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-8.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-10.png"
                            class="img-fluid mx-auto"
                            alt=""
                        /></a>
                      </div>
                      <div>
                        <a href="single-property-1.html"
                          ><img
                            src="assets/img/prt-13.png"
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
                      <!-- <div class="rlhc-price">
                        <h4 class="rlhc-price-name theme-cl">
                          $7,549<span class="monthly">/Months</span>
                        </h4>
                      </div> -->
                      <div class="listing-short-detail-flex">
                        <h5 class="rlhc-title-name verified">
                          <a
                            href="single-property-1.html"
                            class="prt-link-detail"
                            >Great Apex Realty Group</a
                          >
                        </h5>
                        <div class="rlhc-prt-location">
                          <img
                            src="assets/img/pin.svg"
                            width="16"
                            class="me-1"
                            alt=""
                          />210 Zirak Road, Canada
                        </div>
                      </div>
                    </div>
                    <div class="veshm-list-head-flex">
                      <button class="btn btn-like active" type="button">
                        <i class="fa-solid fa-heart-circle-check"></i>
                      </button>
                    </div>
                  </div>

                  <div class="veshm-list-availabilty">
                    <a
                      href="JavaScript:Void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#availability"
                      class="btn btn-avalability"
                      >Check Availabilty</a
                    >
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Single Property -->
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!--//? ============================ Explore Properties End ====================== -->
      <!--//? ============================ Why Choose Us Start ================================== -->
      <section>
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12 col-12">
              <div class="side-thumber-wrap">
                <div class="side-effect"></div>
                <div class="side-thumber-img">
                  <figure>
                    <img
                      src="assets/img/side-1.png"
                      class="img-fluid rounded"
                      alt=""
                    />
                  </figure>
                </div>
                <div class="side-thumber-caption">
                  <div class="single-side-thumber">
                    <div class="single-side-icon">
                      <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <div class="single-side-text">
                      <h6>Instant Assistance: Have a question or need guidance at any hour?</h6>
                    </div>
                  </div>
                  <div class="single-side-thumber">
                    <div class="single-side-icon">
                      <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <div class="single-side-text">
                      <h6>24/7 Customer Service: Your convenience is our priority.</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
              <div class="choose-us-head">
                <!-- <div class="choose-us-wriops mb-2">
                  <span class="font--bold label-light-success px-3 py-2 rounded"
                    >Choose Us</span
                  >
                </div> -->
                <div class="choose-title">
                  <h2>Choose Rishikesh Visit for Your <br />Perfect Yoga Journey?</h2>
                  <p>
                  Join us at Rishikesh Visit and let your yoga journey unfold amidst the breathtaking landscapes of Rishikesh
                  </p>
                </div>
                <div class="veshm-icon-box-list mt-4">
                  <ul>
                    <li>
                      <div class="vib-list-wrap21">
                        <div class="vib-list-icon">
                        <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div class="vib-list-caption">
                          <h5> Yoga Expertise</h5>
                          <p>
                          Unlock the true potential of yoga with our renowned teacher training programs and top yoga schools in Rishikesh.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="vib-list-wrap21">
                        <div class="vib-list-icon">
                        <i class="fa-solid fa-map-location"></i>
                        </div>
                        <div class="vib-list-caption">
                          <h5> Local Insight</h5>
                          <p>
                          Discover the hidden gems of Rishikesh with our curated list of best tourist destinations, handpicked for an unforgettable experience.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="vib-list-wrap21">
                        <div class="vib-list-icon">
                        <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="vib-list-caption">
                          <h5>Your Comfort, Our Commitment</h5>
                          <p>
                          We take pride in going the extra mile to make your journey smooth. Whether it's a booking concern or travel advice, we're here to ensure your comfort and satisfaction.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="vib-list-wrap21">
                        <div class="vib-list-icon">
                        <i class="fa-solid fa-wallet"></i>
                        </div>
                        <div class="vib-list-caption">
                          <h5>Best Rates</h5>
                          <p>
                          Experience the ultimate blend of quality and affordability. We offer the best rates for an enriching yoga and travel adventure.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!--//? ============================ Why Choose Us End ====================== -->


      <!--//? ================================= Blog Grid ================================== -->
      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
              <div class="sec-heading center">
                <h2>Trending Blogs on Rishikesh</h2>
                <p>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                  blanditiis praesentium voluptatum deleniti atque corrupti quos
                  dolores
                </p>
              </div>
            </div>
          </div>

          <div class="row g-xl-3 g-lg-3 g-md-3 g-3">
            <!-- Single blog Grid -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="veshm-grid-blog">
                <div class="veshm-grid-blog-thumb">
                  <img src="https://thumbs.dreamstime.com/b/triveni-ghat-walking-street-rishikesh-holy-dip-ganga-sacred-famous-aarti-words-comes-join-two-tri-x-189921434.jpg" class="img-fluid" alt="" />
                </div>
                <div class="veshm-grid-blog-body">
                  <div class="veshm-grid-body-header">
                    <div class="veshm-grid-posted">
                      <span>10 Jul 2022</span>
                    </div>
                    <div class="veshm-grid-title">
                      <h4>
                        <a href="blog-detail.html"
                          >The spiritual city of Rishikesh</a
                        >
                      </h4>
                    </div>
                  </div>
                  <div class="veshm-grid-body-middle">
                    <p>
                    Triveni Ghat situated in the spiritual city of Rishikesh, holds immense significance as a revered bathing ghat and a prominent landmark. Nestled along the banks of the holy Ganges River, it is a place where spirituality, devotion, and the sacred waters converge, making it an essential destination for pilgrims and visitors seeking a profound connection with the divine.
                    </p>
                  </div>
                  <div class="veshm-grid-body-footer">
                    <a href="https://rishikeshvisit.com/famous-place-to-visit-in-rishikesh.php" class="btn btn-blog-link"
                      >Continue Reading</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="veshm-grid-blog">
                <div class="veshm-grid-blog-thumb">
                  <img src="https://4.bp.blogspot.com/-kn3RagKa_aA/VRt97ZrTg_I/AAAAAAAA1r4/3SkTYrzNIvQ/s1600/Rishikesh_view_across_bridge.jpg" class="img-fluid" alt="" />
                </div>
                <div class="veshm-grid-blog-body">
                  <div class="veshm-grid-body-header">
                    <div class="veshm-grid-posted">
                      <span>17 Jan 2023</span>
                    </div>
                    <div class="veshm-grid-title">
                      <h4>
                        <a href="blog-detail.html"
                          >The sacred city of Rishikesh</a
                        >
                      </h4>
                    </div>
                  </div>
                  <div class="veshm-grid-body-middle">
                    <p>
                    The Tera Manzil Temple, located in the sacred city of Rishikesh, is an extraordinary architectural gem that stands as a symbol of spiritual significance and religious harmony. This unique temple, also known as the "Thirteen-Story Temple," showcases a fascinating blend of various architectural styles and is dedicated to multiple Hindu deities.
                    </p>
                  </div>
                  <div class="veshm-grid-body-footer">
                    <a href="https://rishikeshvisit.com/famous-place-to-visit-in-rishikesh.php" class="btn btn-blog-link"
                      >Continue Reading</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="veshm-grid-blog">
                <div class="veshm-grid-blog-thumb">
                  <img src="https://thelandofwanderlust.com/wp-content/uploads/2022/03/55126EF6-1BAB-43B5-841F-87912018D734.jpeg" class="img-fluid" alt="" />
                </div>
                <div class="veshm-grid-blog-body">
                  <div class="veshm-grid-body-header">
                    <div class="veshm-grid-posted">
                      <span>26 Feb 2023</span>
                    </div>
                    <div class="veshm-grid-title">
                      <h4>
                        <a href="blog-detail.html"
                          >The spiritual haven of Rishikesh</a
                        >
                      </h4>
                    </div>
                  </div>
                  <div class="veshm-grid-body-middle">
                    <p>
                    The Beatles Ashram, also known as Chaurasi Kutia, is a fascinating attraction nestled within the spiritual haven of Rishikesh. This abandoned ashram gained international fame when the Beatles, the legendary British rock band, stayed here in 1968 to learn transcendental meditation from Maharishi Mahesh Yogi. Today.
                    </p>
                  </div>
                  <div class="veshm-grid-body-footer">
                    <a href="https://rishikeshvisit.com/famous-place-to-visit-in-rishikesh.php" class="btn btn-blog-link"
                      >Continue Reading</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--//? ================= Blog Grid End ================= -->

      <!--//? ============================ Call To Action ================================== -->
      
     
      <!--//? ============================ Call To Action End ================================== -->

      <!--//? ============================ Footer Start ================================== -->
      <?php include 'footer.php'; ?>
      <!--//? ============================ Footer End ================================== -->

     
       
     

     
   
   
    <!-- End Wrapper -->
 

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
