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
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
        
        </div>
        <div class="col-md-8">
          
        
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