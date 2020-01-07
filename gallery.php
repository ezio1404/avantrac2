<?php
include_once 'dbhelper.php';
$brandList= getAllBrand();
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
                        <form class="form-inline">
                            <div class="md-form my-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                    aria-label="Search">
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
        <div class="container">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active lead text-uppercase " id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Brand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lead  text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Types</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container mt-lg-5 mt-sm-3">
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
                <img class="card-img-top" src="images/brand/<?php echo $brandData['brand_image']?>" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><?php echo $brandData['brand_name']?></h4>
                <!-- Text -->
                <p class="card-text"><?php echo $brandData['brand_desc']?></p>
                <!-- Button -->
                <a href="" class="btn btn-info btn-md"> View <i class="fas fa-angle-double-right"></i></a>

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
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container mt-lg-5 mt-sm-3">
                        <!--Section: Products v.3-->
                        <section class=" mb-4">

                            <!--Grid row-->
                            <div class="row wow fadeIn">
                                <!-- loop here  -->
                                <!--Grid column-->
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <!-- Card -->
                                    <div class="card">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="images/logo/logo.jpg" alt="Card image cap">
                                            <a href="galleryType.php?cat=dumptruck">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title">truck kinds</h4>
                                            <!-- Text -->
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <!-- Button -->
                                            <a href="" class="btn btn-info btn-md"> View <i
                                                    class="fas fa-angle-double-right"></i></a>

                                        </div>

                                    </div>
                                    <!-- Card -->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->



                        </section>
                        <!--Section: Products v.3-->
                    </div>
                </div>

            </div>
        </div>
        <div class="container ">
            <hr>
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