<?php
include_once 'dbhelper.php';
$brandList = getAllBrand();
$typeList = getAllType();
$truckList = getAllTruck();
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
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="adminDashboard.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link waves-effect" href="type.php">Type</a>
          </li>
          <li class="nav-item">
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
  <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-4">
                    <form action="truckController.php" method="POST" enctype="multipart/form-data">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="truck_name" class="form-control" name="truck_name">
                                    <label for="truck_name" class="">Truck name</label>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="truck_description" class="form-control" name="truck_description">
                                    <label for="truck_description" class="">Truck Description</label>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="truck_features" class="form-control" name="truck_features">
                                    <label for="truck_features" class="">Truck Features <span class="small red-text">use comma(,) to separate</span></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                  <span for="truck_brochure">Truck Brochure</span>      
                                    <input type="file" id="truck_brochure"  name="truck_brochure">
                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-4">
                                  <span for="type_id">Truck Type</span>
                                    <select name="type_id" id="type_id" class="form-control ">
                                      <?php
                                          foreach($typeList as $typeData){
                                      ?>
                                      <option value="<?php echo $typeData['type_id'];?>"><?php echo $typeData['type_name'];?></option>
                                    <?php
                                          }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-4">
                                  <span for="brand_id">Truck Brand</span>
                                    <select name="brand_id" id="brand_id" class="form-control ">
                                      <?php
                                          foreach($brandList as $brandData){
                                      ?>
                                      <option value="<?php echo $brandData['brand_id'];?>"><?php echo $brandData['brand_name'];?></option>
                                    <?php
                                          }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-12 ">
                            <span >Truck Image</span>      
                                <input type="file" name="file" id="truck_image" placeholder="truck_image">
                                <img id="blah" src="images/logo/logo.jpg" class="my-5 img-fluid" style="height : 200px !important; width : auto !important;  margin-left: auto;
                                    margin-right: auto;" alt="your image" />
                            </div>
                            <!-- Grid column -->



                            <div class="col-md-12">
                              <button class="btn btn-primary" type="submit" name="addTruck"><i class="fas fa-plus"></i> Add Truck</button>
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
                                <th>Truck Name</th>
                                <th>Truck Desc.</th>
                                <th>Truck Features</th>
                                <th>Truck Brochure</th>
                                <th>Truck Type</th>
                                <th>Truck Brand</th>
                                
                            </tr>
                        </thead>
                        <tbody id="myBody">
                          <?php
                           foreach($truckList as $truckData){
                          ?>
                            <tr>
                                <td class="align-middle"><?php echo $truckData['truck_id'];?></td>
                                <td class="align-middle"><?php echo $truckData['truck_name'];?></td>
                                <td class="align-middle"><?php echo $truckData['truck_description'];?></td>
                                <td class="align-middle"><?php echo $truckData['truck_features'];?></td>
                                <td class="align-middle"><a class="blue-text" target="_blank" href="images/brochure/<?php echo $truckData['truck_brochure'];?>"><?php echo $truckData['truck_brochure'];?></a></td>
                                <td class="align-middle"><?php echo $truckData['type_name'];?></td>
                                <td class="align-middle"><?php echo $truckData['brand_name'];?></td>
                            </tr>
                            <?php
                           }
                            ?>
                        <tfoot>
                            <tr>
                            <th>#</th>
                                <th>Truck Name</th>
                                <th>Truck Desc.</th>
                                <th>Truck Features</th>
                                <th>Truck Brochure</th>
                                <th>Truck Type</th>
                                <th>Truck Brand</th>
                                
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

        $("#truck_image").change(function () {
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