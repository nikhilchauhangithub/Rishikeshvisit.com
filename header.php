<?php
require_once 'database/dbcon.php';

?>
<div class="header header-dark change-logo">
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