<?php
include_once 'dbhelper.php';
$brandList = getAllBrand();
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
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar border-bottom ">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="adminDashboard.php">
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
                        <a class="nav-link waves-effect" href="adminDashboard.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link waves-effect" href="type.php">Type</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="brand.php">Brand</a>
                    </li>


                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item ">
                        <!-- put email here in avantrac -->
                        <a href="logout.php" class="nav-link border border-danger  rounded waves-effect mr-2">
                            <i class="fas fa-sign-out-alt mr1"></i>Logout
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
        <div class="container  my-5 py-5">
            <div class="row">
                <div class="col-md-4">
                    <form action="brandController.php" method="POST"  enctype="multipart/form-data">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="brand_name" class="form-control"  name="brand_name">
                                    <label for="brand_name" class="">Brand name</label>
                                </div>
                                <div class="md-form mb-4">
                                    <input type="text" id="brand_desc" class="form-control"  name="brand_desc">
                                    <label for="brand_desc" class="">Brand Desc</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-12 ">
                                <input type="file" name="file" id="brand_image" placeholder="brand_image">
                                <img id="blah" src="images/logo/logo.jpg" class="my-5 img-fluid" style="height : 300px !important; width : auto !important;  margin-left: auto;
                                    margin-right: auto;" alt="your image" />

                            </div>
                            <!-- Grid column -->
                            <div class="col-md-12">
                            <button class="btn btn-primary" type="submit" name="addBrand"><i class="fas fa-plus"></i> Add type</button>

                            </div>

                        </div>
                        <!-- Grid row -->
                    </form>

                </div>
                <div class="col-md-8">
                    <table id="example" class=" table" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand Name</th>
                                <th>Brand Desc</th>
                                <th>Brand Image</th>
                            </tr>
                        </thead>
                        <tbody id="myBody">
                            <?php
                            foreach($brandList as $brandData){
                            ?>
                            <tr>
                                <td><?php echo $brandData['brand_id'];?></td>
                                <td><?php echo $brandData['brand_name'];?></td>
                                <td><?php echo $brandData['brand_desc'];?></td>
                                <td>
                                    <img src="images/brand/<?php echo $brandData['brand_image'];?>" class="img-fluid" style="height : 10.5rem !important; width : auto !important;  margin-left: auto;
                                    margin-right: auto;"  alt="">
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Brand Name</th>
                                <th>Brand Desc</th>
                                <th>Brand Image</th>

                            </tr>
                        </tfoot>
                    </table>
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
    <script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/buttons.flash.min.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#brand_image").change(function () {
            readURL(this);
        });
    </script>
    <script>
        $(document).ready(function () {
        $('#example').DataTable({
            "pageLength": 20,
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
    </script>

</body>

</html>