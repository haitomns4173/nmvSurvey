<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NMV Data Collection</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body>
  <div class="app header-default side-nav-dark">
    <div class="layout">
      <!-- Header START -->
      <div class="header navbar">
        <div class="header-container">
          <div class="nav-logo">
            <a href="index.html">
              <b><img src="assets/img/logo.png" alt=""></b>
              <span class="logo">
                <img src="assets/img/logo-text.png" alt="">
              </span>
            </a>
          </div>
          <ul class="nav-left">
            <li>
              <a class="sidenav-fold-toggler" href="javascript:void(0);">
                <i class="lni-menu"></i>
              </a>
              <a class="sidenav-expand-toggler" href="javascript:void(0);">
                <i class="lni-menu"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Header END -->

      <!-- Side Nav START -->
      <div class="side-nav expand-lg">
        <div class="side-nav-inner">
          <ul class="side-nav-menu">
            <li class="side-nav-header">
              <span>Navigation</span>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="index.html">
                <span class="title">Insert Data</span>
              </a>
            </li>
            <li class="nav-item dropdown open">
              <a class="dropdown-toggle" href="view_data.php">
                <span class="title">View Data</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Side Nav END -->



      <!-- Page Container START -->
      <div class="page-container">
        <!-- Content Wrapper START -->
        <div class="main-content">
          <div class="container-fluid">
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrapper row">
              <div class="col-12 col-lg-3 col-md-6">
                <h4 class="page-title">Dashboard</h4>
              </div>
              <div class="col-12 col-lg-9 col-md-6">
                <ol class="breadcrumb float-right">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">/ View Data</li>
                </ol>
              </div>
            </div>
            <!-- Breadcrumb End -->
          </div>

          <!-- Main Form Strats-->
          <div class="col-12 grid-margin">
            <div class="col-12 m-b-10">
              <div class="card">
                <div class="card-header border-bottom">
                  <h4 class="card-title">View Data Table</h4>
                </div>
                <div class="card-body">
                  <p class="text-muted m-b-20 box-content">
                    <code>View the data form the table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Company Name</th>
                          <th>Founder</th>
                          <th>Email</th>
                          <th>Phone</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                            $conn = new mysqli('localhost','root','','nmvdata');

                            if($conn->connect_error)
                            {
                              die('Connection Failed : '.$conn->connect_error);
                            }
                            else
                            {

                              $sql = "SELECT `company_id`, `name`, `founder`, `email`, `phone` FROM `nmvsurvey`";
                              $result = mysqli_query($conn, $sql);

                              if($result)
                              {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                  $id = $row['company_id'];
                                  $name = $row['name'];
                                  $founder = $row['founder'];
                                  $email = $row['email'];
                                  $phone = $row['phone'];
                                  ?>
                                  <td><?php echo $id ?></td>
                                  <td><?php echo $name ?></td>
                                  <td><?php echo $founder?></td>
                                  <td><?php echo $email ?></td>
                                  <td><?php echo $phone ?></td>
                                  </tr>
                                  <?php
                                }
                              }
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Main Form Ends -->

          <!-- Footer START -->
          <footer class="content-footer">
            <div class="footer">
              <div class="copyright">
                <span>Copyright © 2022 <b class="text-dark">NMV</b>. All Right Reserved</span>
                <span class="go-right">
                  <a href="" class="text-gray">Term &amp; Conditions</a>
                  <a href="" class="text-gray">Privacy &amp; Policy</a>
                </span>
              </div>
            </div>
          </footer>
          <!-- Footer END -->
        </div>
        <!-- Page Container END -->
      </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="assets/js/main.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/js/dashborad1.js"></script>

</body>

</html>