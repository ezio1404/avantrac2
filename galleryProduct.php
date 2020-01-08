<?php
include 'dbhelper.php';
$truckData = getTruck(array($_GET['id']));

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
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <img src="images/trucks/<?php echo $truckData['truck_image'];?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-5 my-sm-5 my-lg-3">
                    <h4 class="border-bottom pb-2" ><?php echo $truckData['truck_description'];?></h4>
                    <p class="text-justify"><?php echo $truckData['truck_description'];?><p>

                        <h5 class="border-bottom">Features</h5>
                        <ul class="list-group list-group-flush">
                            <?php 
                                // echo $truckData['truck_features'];
                                $truckFeatures = explode(',',$truckData['truck_features']);
                            ?>
                            <?php
                            foreach($truckFeatures as $tf){
                            ?>
                            <li class="list-group-item"><i class="fas fa-check red-text"></i> <?php echo $tf ?></li>
                                <?php
                            }
                                ?>
                        </ul>

                        <a href="images/brochure/<?php echo $truckData['truck_brochure'];?>" target="_blank" class="btn red darken-4 white-text btn-block lead"> <i class="far fa-file-pdf fa-lg mr-2"></i> Download Brochure</a>
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