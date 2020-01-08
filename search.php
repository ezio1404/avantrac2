<?php
include_once 'dbhelper.php';
$truckList= $_SESSION['search'];

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
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline" method="POST" action="searchController.php">
                            <div class="md-form my-0">
                                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search"
                                    aria-label="Search">
                            </div>
                        </form>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons pt-1">
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
    <!-- Intro -->



    </div>

    <!--Main layout-->
    <main>
        <div class="container">
            <h2 class="text-uppercase text-center">Search results</h2>
            <hr>
            <!--Section: Products v.3-->
            <section class=" mb-4">
                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!-- loop here  -->
                    <?php
          foreach($truckList as $truckData){
          ?>
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" style="height: 250px !important;"
                                    src="images/trucks/<?php echo $truckData['truck_image']?>" alt="Card image cap">
                                <a href="galleryProduct.php?id=<?php echo $truckData['truck_id']?>">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h4 class="card-title border-bottom pb-3 search"><?php echo $truckData['truck_name']?>
                                </h4>
                                <p class="card-text search">Brand: <?php echo $truckData['brand_name']?> </p>
                                <p class="card-text search">Type : <?php echo $truckData['type_name']?> </p>
                                <!-- Text -->
                                <p class="card-text search"><?php echo $truckData['truck_description']?></p>
                                <p class="lead">Features</p>
                                <p class="card-text search"><?php echo $truckData['truck_features']?></p>
                                <!-- Button -->
                                <a href="galleryProduct.php?id=<?php echo $truckData['truck_id']?>"
                                    class="btn btn-info btn-md"> View <i class="fas fa-angle-double-right"></i></a>

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
    <script>
        function getQueryStrings() {
            var assoc = {};
            var decode = function (s) {
                return decodeURIComponent(s.replace(/\+/g, " "));
            };
            var queryString = location.search.substring(1);
            var keyValues = queryString.split('&');

            for (var i in keyValues) {
                var key = keyValues[i].split('=');
                if (key.length > 1) {
                    assoc[decode(key[0])] = decode(key[1]);
                }
            }

            return assoc;
        }
        var qs = getQueryStrings();
        var myParam = qs["q"];

        console.log(myParam);

        let searchitems = document.querySelectorAll('.search');

        console.log(searchitems.textCotent);
        searchitems.forEach(function (el) {

            let str =el.textContent;
           
            // console.log(str);
            var n = str.toLowerCase().includes(myParam.toLowerCase());
            if(n){
              el.style.color = "orange";
            }
        })
    </script>


</body>

</html>