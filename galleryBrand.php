<?php
include_once 'dbhelper.php';
$brandData = getBrand(array($_GET['id']));
$brandList = getAllTruckByBrand(array($_GET['id']));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Avantrac</title>
    <!-- MDB icon -->
    <link rel="icon" href="images/logo/logo-icon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar border-bottom ">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="index.php">
                <img src="images/logo/logo-notwhite.png" style="height: 40px !important;" alt="Logo">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link waves-effect" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link waves-effect" href="about.php">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link waves-effect" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                    <form class="form-inline" method="POST" action="searchController.php" >
              <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
              </div>
            </form>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/avantrac" class="nav-link waves-effect">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <!-- put email here in avantrac -->
                        <a href="mailto:webmaster@example.com?Subject=Avantrac%20Inquiry"
                            class="nav-link border border-light rounded waves-effect mr-2">
                            <i class="fas fa-envelope mr-1"></i>Email us
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- put email here in avantrac -->
                        <a href="tel:+032 253 1871" class="nav-link border border-light rounded waves-effect mr-2">
                            <i class="fas fa-phone mr-1"></i>Call us
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Intro -->
    <div class="card card-intro mb-5 ">

    </div>

    <!--Main layout-->
    <main>
    <div class="container my-5 py-5 ">
 
 
 <!--Section: Content-->
 <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

   <!--Grid row-->
   <div class="row">

     <!--Grid column-->
     <div class="col-md-6 mb-4 mb-md-0">

       <h3 class="font-weight-bold border-bottom"><?php echo $brandData['brand_name'];?></h3>

       <p class="text-muted text-justify"><?php echo $brandData['brand_desc']?></p>

       <!-- <a class="btn btn-purple btn-md ml-0" href="#" role="button">Start now<i class="fa fa-gem ml-2"></i></a> -->
     </div>
     <!--Grid column-->

     <!--Grid column-->
     <div class="col-md-6 mb-4 mb-md-0">

       <!--Image-->
       <div class="view overlay z-depth-1-half">
         <img src="images/brand/<?php echo $brandData['brand_image']?>" style="width:100%; " class="img-fluid"
           alt="">
         <a href="#">
           <div class="mask rgba-white-light"></div>
         </a>
       </div>

     </div>
     <!--Grid column-->

   </div>
   <!--Grid row-->

   <!-- //// -->

 </section>
 <!--Section: Content-->


</div>
        <div class="container ">
            <hr>
        </div>
        <div class="container">
      <h2 class="text-uppercase text-center"><?php echo $brandData['brand_name']?></h2>
      <hr>
      <!--Section: Products v.3-->
      <section class=" mb-4">
        <!--Grid row-->
        <div class="row wow fadeIn">
          <!-- loop here  -->
          <?php
          foreach($brandList as $brandData){
          ?>
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- Card -->
            <div class="card">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top"  style="height: 250px !important;" src="images/trucks/<?php echo $brandData['truck_image']?>" alt="Card image cap">
                <a href="galleryProduct.php?id=<?php echo $brandData['truck_id']?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><?php echo $brandData['truck_name']?></h4>
                <!-- Text -->
                <p class="card-text"><?php echo $brandData['truck_description']?></p>
                <p class="card-text "><?php echo $brandData['truck_features']?></p>

                <!-- Button -->
                <a href="galleryProduct.php?id=<?php echo $brandData['truck_id']?>" class="btn btn-info btn-md"> View <i class="fas fa-angle-double-right"></i></a>

              </div>

            </div>
            <!-- Card -->
          </div>
          <!--Grid column-->
                <?php
          }
                ?>
          <!-- end loop -->
        </div>
        <!--Grid row-->



      </section>
      <!--Section: Products v.3-->



    </div>
    </main>
    <!--Main layout-->
    <!-- footer -->
    <?php include_once 'footer.php';?>
    <!-- /footer -->
    <!-- modal ///////////////////// -->
    <!-- Modal -->

    <!-- modal ///////////////////// -->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
        new WOW().init();
    </script>

</body>

</html>